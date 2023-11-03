package com.example.iotapi;

import org.springframework.boot.SpringApplication;
import org.springframework.boot.autoconfigure.SpringBootApplication;
import org.eclipse.paho.client.mqttv3.*;
import org.eclipse.paho.client.mqttv3.persist.MemoryPersistence;
@SpringBootApplication
public class IotapiApplication {

	public static void main(String[] args) {

		SpringApplication.run(IotapiApplication.class, args);

	}

}
