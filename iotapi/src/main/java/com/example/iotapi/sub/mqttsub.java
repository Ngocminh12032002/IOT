package com.example.iotapi.sub;

import com.example.iotapi.model.IotModel;
import com.example.iotapi.repository.IotRepository;
import com.fasterxml.jackson.databind.JsonNode;
import com.fasterxml.jackson.databind.ObjectMapper;
import com.fasterxml.jackson.databind.util.JSONPObject;
import jakarta.annotation.PostConstruct;
import org.eclipse.paho.client.mqttv3.*;
import org.eclipse.paho.client.mqttv3.persist.MemoryPersistence;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.context.annotation.Bean;
import org.springframework.stereotype.Component;

import java.time.LocalDateTime;

@Component
public class mqttsub {

    @Autowired
    private IotRepository iotRepository;

    @PostConstruct
    public void submqtt() {
        String brokerUrl = "tcp://172.20.10.3:1883";
        String clientId = "MqttSubscriber";
        try {
            MqttClient client = new MqttClient(brokerUrl, clientId, new MemoryPersistence());
            MqttConnectOptions connOpts = new MqttConnectOptions();
            connOpts.setCleanSession(true);

            System.out.println("Connecting to broker: " + brokerUrl);
            client.connect(connOpts);
            System.out.println("Connected");

            client.setCallback(new MqttCallback() {
                @Override
                public void connectionLost(Throwable cause) {
                    System.out.println("Connection lost: " + cause.getMessage());
                }

                @Override
                public void messageArrived(String topic, MqttMessage message) throws Exception {
                    IotModel iotModel = new IotModel();
                    ObjectMapper objectMapper = new ObjectMapper();
                    JsonNode jsonNode = objectMapper.readTree(message.getPayload());
                    int temperatore = jsonNode.get("temp").asInt();
                    int humidity = jsonNode.get("humidity").asInt();
                    int light = jsonNode.get("light").asInt();
                    int dust = jsonNode.get("dust").asInt();
                    iotModel.setTemp(temperatore);
                    iotModel.setHumidity(humidity);
                    iotModel.setLight(light);
                    iotModel.setDust(dust);
                    iotModel.setCreated(LocalDateTime.now());
                    iotModel.setLed(-1);
                    iotModel.setAction(-1);
                    iotRepository.save(iotModel);
                    System.out.println("Message received on topic " + "sensor/data" + ": " + new String(message.getPayload()));
                }

                @Override
                public void deliveryComplete(IMqttDeliveryToken token) {
                }
            });

            client.subscribe("sensor/data");
            System.out.println("Subscribed to topic: " + "sensor/data");

        } catch (MqttException e) {
            e.printStackTrace();
        }
    }
}
