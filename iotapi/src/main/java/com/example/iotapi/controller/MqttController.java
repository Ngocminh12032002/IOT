package com.example.iotapi.controller;

import com.example.iotapi.model.IotModel;
import com.example.iotapi.repository.IotRepository;
import org.eclipse.paho.client.mqttv3.MqttClient;
import org.eclipse.paho.client.mqttv3.MqttConnectOptions;
import org.eclipse.paho.client.mqttv3.MqttException;
import org.eclipse.paho.client.mqttv3.MqttMessage;
import org.eclipse.paho.client.mqttv3.persist.MemoryPersistence;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.data.domain.Page;
import org.springframework.data.domain.PageRequest;
import org.springframework.data.domain.Pageable;
import org.springframework.data.domain.Sort;
import org.springframework.integration.core.MessagingTemplate;
import org.springframework.stereotype.Controller;
import org.springframework.web.bind.annotation.*;

import java.time.LocalDateTime;
import java.util.List;
import java.util.Optional;

@RestController
public class MqttController {
    @Autowired
    private IotRepository iotRepository;

    @GetMapping("/")
    public IotModel indexPage(){
        List<IotModel> iotModel = iotRepository.findTopByTimestapDesc();
        return iotModel.get(0);
    }

    @GetMapping("/findAll")
    public Page<IotModel> getAllModel(@RequestParam int page,
                                      @RequestParam int size,
                                      @RequestParam(required = false) String keyword,
                                      @RequestParam(required = false) String sort,
                                      @RequestParam(required = false) String order){
        Sort.Direction direction = Sort.Direction.DESC;
        if (order != null && order.equalsIgnoreCase("asc")) {
            direction = Sort.Direction.ASC;
        }
        Sort sorting = Sort.by(direction, sort != null ? sort : "id");
        Pageable pageableWithSort = PageRequest.of(page, size, sorting);
        if (keyword != null) {
            return iotRepository.findAllWithKeyword(keyword, pageableWithSort);
        } else {
            return iotRepository.findAll(pageableWithSort);
        }
    }

    @PostMapping("/publish")
    public String publicMessage(@RequestParam("led1") String led1State,@RequestParam("led2") String led2State){
        String brokerUrl = "tcp://192.168.1.88:1883";
        String clientId = "MqttPublisher";
        String topic = "test";
        try {
            MqttClient client = new MqttClient(brokerUrl, clientId, new MemoryPersistence());
            MqttConnectOptions connOpts = new MqttConnectOptions();
            connOpts.setCleanSession(true);
            client.connect(connOpts);

            String mqttMessage = led1State + " " + led2State;
            client.publish(topic, new MqttMessage(mqttMessage.getBytes()));

            IotModel iotModel = new IotModel();
            iotModel.setLed(Integer.parseInt(led1State));
            iotModel.setAction(1);
            iotRepository.save(iotModel);
            Thread.sleep(2000);
            System.out.println("Message publish: " + mqttMessage);
            return "Da thuc hien";
        } catch (MqttException | InterruptedException e) {
            e.printStackTrace();
            return "Khong thuc hien duoc";
        }
    }

    @PostMapping("/controlLed1")
    public String publicMessageLed1(@RequestParam("led1") String led1State){
        String brokerUrl = "tcp://172.20.10.3:1883";
        String clientId = "MqttPublisher";
        String topic = "controlLed";
        try {
            MqttClient client = new MqttClient(brokerUrl, clientId, new MemoryPersistence());
            MqttConnectOptions connOpts = new MqttConnectOptions();
            connOpts.setCleanSession(true);
            client.connect(connOpts);
            client.publish(topic, new MqttMessage(led1State.getBytes()));
            IotModel iotModel = new IotModel();
            iotModel.setLed(1);
            iotModel.setCreated(LocalDateTime.now());
            iotModel.setAction(Integer.parseInt(led1State));
            iotRepository.save(iotModel);
            Thread.sleep(2000);
            System.out.println("Message publish: " + led1State);
            return "Da thuc hien";
        } catch (MqttException | InterruptedException e) {
            e.printStackTrace();
            return "Khong thuc hien duoc";
        }
    }

    @PostMapping("/controlLed2")
    public String publicMessageLed2(@RequestParam("led2") String led2State){
        String brokerUrl = "tcp://172.20.10.3:1883";
        String clientId = "MqttPublisher";
        String topic = "controlLed2";
        try {
            MqttClient client = new MqttClient(brokerUrl, clientId, new MemoryPersistence());
            MqttConnectOptions connOpts = new MqttConnectOptions();
            connOpts.setCleanSession(true);
            client.connect(connOpts);
            client.publish(topic, new MqttMessage(led2State.getBytes()));
            IotModel iotModel = new IotModel();
            iotModel.setLed(2);
            iotModel.setCreated(LocalDateTime.now());
            iotModel.setAction(Integer.parseInt(led2State));
            iotRepository.save(iotModel);
            Thread.sleep(2000);
            System.out.println("Message publish: " + led2State);
            return "Da thuc hien";
        } catch (MqttException | InterruptedException e) {
            e.printStackTrace();
            return "Khong thuc hien duoc";
        }
    }

    @PostMapping("/controlLed3")
    public String publicMessageLed3(@RequestParam("led3") String led3State){
        String brokerUrl = "tcp://172.20.10.3:1883";
        String clientId = "MqttPublisher";
        String topic = "controlLed3";
        try {
            MqttClient client = new MqttClient(brokerUrl, clientId, new MemoryPersistence());
            MqttConnectOptions connOpts = new MqttConnectOptions();
            connOpts.setCleanSession(true);
            client.connect(connOpts);
            client.publish(topic, new MqttMessage(led3State.getBytes()));
            IotModel iotModel = new IotModel();
            iotModel.setLed(3);
            iotModel.setCreated(LocalDateTime.now());
            iotModel.setAction(Integer.parseInt(led3State));
            iotRepository.save(iotModel);
            Thread.sleep(2000);
            System.out.println("Message publish: " + led3State);
            return "Da thuc hien";
        } catch (MqttException | InterruptedException e) {
            e.printStackTrace();
            return "Khong thuc hien duoc";
        }
    }

    @GetMapping("/findAllAction")
    public Page<IotModel> getAllAction(@RequestParam int page,
                                       @RequestParam int size,
                                       @RequestParam(required = false) String keyword,
                                       @RequestParam(required = false) String sort,
                                       @RequestParam(required = false) String order){
//        Sort sort = Sort.by(Sort.Direction.DESC, "id");
        Sort.Direction direction = Sort.Direction.DESC;
        if (order != null && order.equalsIgnoreCase("asc")) {
            direction = Sort.Direction.ASC;
        }
        Sort sorting = Sort.by(direction, sort != null ? sort : "id");
        Pageable pageableWithSort = PageRequest.of(page, size, sorting);
        if (keyword != null) {
            if (keyword.endsWith("Quạt")){
                return iotRepository.findAllByFan(keyword, pageableWithSort);
            } else if (keyword.endsWith("Đèn LED 1")) {
                return iotRepository.findAllByLed(keyword, pageableWithSort);
            } else if (keyword.endsWith("Đèn LED 2")) {
                return iotRepository.findAllByLed2(keyword, pageableWithSort);
            } else if (keyword.endsWith("Bật")) {
                return iotRepository.findAllByActionOn(keyword, pageableWithSort);
            } else if (keyword.endsWith("Tắt")) {
                return iotRepository.findAllByActionOff(keyword, pageableWithSort);
            }
            return iotRepository.findAllActionWithKeyword(keyword, pageableWithSort);
        } else {
            return iotRepository.findAllAction(pageableWithSort);
        }
    }

    @GetMapping("/findHumidity")
    public Page<Double> getHumidity(@RequestParam int page,
                                      @RequestParam int size,
                                      @RequestParam(required = false) String keyword,
                                      @RequestParam(required = false) String sort,
                                      @RequestParam(required = false) String order) {
        Pageable pageableWithSort = PageRequest.of(page, size);
        return iotRepository.findHumidityBest(pageableWithSort);
    }
}
