#include <DHT.h>
#include <PubSubClient.h>
#include <ESP8266WiFi.h>

const char* ssid = "MinhNN";
const char* password = "123456789";
const char* mqtt_server = "172.20.10.3";

const int DHTPIN = 2; //D4
const int DHTTYPE = DHT11;
const int LDR_PIN = 17; //A0
const int ledPin1 = 16; //D0
const int ledPin2 = 5; //D1
const int ledPin3 = 4; //D2

DHT dht(DHTPIN, DHTTYPE);
WiFiClient espClient;
PubSubClient client(espClient);

bool readDHT = false;
bool readLDR = false;

void setup_wifi() {
  delay(10);
  Serial.println();
  Serial.print("Connecting to ");
  Serial.println(ssid);
  WiFi.begin(ssid, password);
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }
  Serial.println("");
  Serial.print("WiFi connected, IP address: ");
  Serial.println(WiFi.localIP());
}

void callback(char* topic, byte* payload, unsigned int length) {
  if (strcmp(topic, "test") == 0) {
    String message = "";
    for (int i = 0; i < length; i++) {
      message += (char)payload[i];
    }
    int value1, value2;
    if (sscanf(message.c_str(), "%d %d", &value1, &value2) == 2) {
      if (value1 == 1) {
        digitalWrite(ledPin1, HIGH);  // Bật đèn LED 1
      } else if (value1 == 0) {
        digitalWrite(ledPin1, LOW);  // Tắt đèn LED 1
      }

      if (value2 == 1) {
        digitalWrite(ledPin2, HIGH);  // Bật đèn LED 2
      } else if (value2 == 0) {
        digitalWrite(ledPin2, LOW);  // Tắt đèn LED 2
      }
    }
  }
  else if (strcmp(topic, "controlLed") == 0  ){
    if (payload[0] == '1') {
      digitalWrite(ledPin1, HIGH);  // Bật đèn LED 1
    } else if (payload[0] == '0') {
      digitalWrite(ledPin1, LOW);  // Tắt đèn LED 1
    }
  }
  else if ((strcmp(topic, "controlLed2") == 0  )){
    if (payload[0] == '1') {
      digitalWrite(ledPin2, HIGH);  // Bật đèn LED 2
    } else if (payload[0] == '0') {
      digitalWrite(ledPin2, LOW);  // Tắt đèn LED 2
    }
  }
  else if ((strcmp(topic, "controlLed3") == 0  )){
    if (payload[0] == '1') {
      digitalWrite(ledPin3, HIGH);  // Bật đèn LED 3
    } else if (payload[0] == '0') {
      digitalWrite(ledPin3, LOW);  // Tắt đèn LED 3
    }
  }
}

void reconnect() {
  while (!client.connected()) {
    Serial.print("Attempting MQTT connection...");
    if (client.connect("ESP8266Client")) {
      Serial.println("connected");
      client.subscribe("test");
      client.subscribe("controlLed");
      client.subscribe("controlLed2");
      client.subscribe("controlLed3");
    } else {
      Serial.print("failed, rc=");
      Serial.print(client.state());
      Serial.println(" try again in 5 seconds");
      delay(5000);
    }
  }
}

void setup() {
  pinMode(ledPin1, OUTPUT);
  pinMode(ledPin2, OUTPUT); 
  pinMode(ledPin3, OUTPUT); 
  Serial.begin(9600);
  dht.begin();
  setup_wifi();
  client.setServer(mqtt_server, 1883);
  client.setCallback(callback);
}

void loop() {
  if (!client.connected()) {
    reconnect();
  }
  client.loop();
  int t, h, l, dust;
  h = dht.readHumidity();
  t = dht.readTemperature();
  l = analogRead(LDR_PIN);
  dust = random(110);
  if(dust > 100) {
    while (true) {
      digitalWrite(ledPin1, HIGH); 
      digitalWrite(ledPin3, HIGH); 
      delay(500);
      digitalWrite(ledPin1, LOW); 
      digitalWrite(ledPin3, LOW); 
      delay(500);
      digitalWrite(ledPin1, HIGH); 
      digitalWrite(ledPin3, HIGH); 
      delay(500);
      digitalWrite(ledPin1, LOW); 
      digitalWrite(ledPin3, LOW); 
    }
  }

  Serial.print("Nhiet do: ");
  Serial.println(t);
  Serial.print("Do am: ");
  Serial.println(h);
  Serial.print("Giá trị ánh sáng: ");
  Serial.println(l);
  Serial.println();
  delay(2000);

  String data = "{\"temp\": " + String(t) + ", \"humidity\": " + String(h) + ", \"light\": " + String(l) + ", \"dust\": " + String(dust) + "}";
  client.publish("sensor/data", data.c_str());
}