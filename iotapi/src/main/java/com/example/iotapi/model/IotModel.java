package com.example.iotapi.model;

import jakarta.persistence.*;

import java.time.LocalDateTime;

@Entity
@Table(name = "iot")
public class IotModel {
    @Id
    @GeneratedValue(strategy = GenerationType.IDENTITY)
    private long id;

    @Column
    private int temp;

    @Column
    private int humidity;

    @Column
    private int light;

    @Column
    private int led;

    @Column
    private int dust;

    @Column
    private LocalDateTime created;

    @Column
    private int action;

    public IotModel() {
    }

    public long getId() {
        return id;
    }

    public int getTemp() {
        return temp;
    }

    public int getHumidity() {
        return humidity;
    }

    public int getLight() {
        return light;
    }


    public void setId(long id) {
        this.id = id;
    }

    public void setTemp(int temp) {
        this.temp = temp;
    }

    public void setHumidity(int humidity) {
        this.humidity = humidity;
    }

    public void setLight(int light) {
        this.light = light;
    }

    public int getAction() {
        return action;
    }

    public void setAction(int action) {
        this.action = action;
    }

    public LocalDateTime getCreated() {
        return created;
    }

    public void setCreated(LocalDateTime created) {
        this.created = created;
    }

    public int getDust() {
        return dust;
    }

    public void setDust(int dust) {
        this.dust = dust;
    }

    public int getLed() {
        return led;
    }

    public void setLed(int led) {
        this.led = led;
    }

    public IotModel(long id, int temp, int humidity, int light, int led, int dust, LocalDateTime created, int action) {
        this.id = id;
        this.temp = temp;
        this.humidity = humidity;
        this.light = light;
        this.led = led;
        this.dust = dust;
        this.created = created;
        this.action = action;
    }
}
