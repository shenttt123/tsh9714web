#include <WiFi.h>
#include <HTTPClient.h>

const char WIFI_SSID[] = "Wang";
const char WIFI_PASSWORD[] = "200787201277";

String HOST_NAME = "http://10.0.0.95/"; // change to your PC's IP address
String PATH_NAME   = "voltage/insertv.php?voltage=";
String voltage_string = "";
void setup() {

  Serial.begin(9600);
  WiFi.begin(WIFI_SSID, WIFI_PASSWORD);
  Serial.println("Connecting");
  while(WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.print("Connected to WiFi network with IP Address: ");
  Serial.println(WiFi.localIP());
  
  HTTPClient http;

  http.begin(HOST_NAME + PATH_NAME + '0'); //HTTP
  int httpCode = http.GET();
  if(httpCode > 0) {
    // file found at server
    if(httpCode == HTTP_CODE_OK) {
      String payload = http.getString();
      Serial.println(payload);
    } else {
      // HTTP header has been send and Server response header has been handled
      Serial.printf("[HTTP] GET... code: %d\n", httpCode);
    }
  } else {
    Serial.printf("[HTTP] GET... failed, error: %s\n", http.errorToString(httpCode).c_str());
  }

  http.end();
}


void loop() {
  voltage_string = get_voltage();
  Serial.println(voltage_string);
  HTTPClient http;
  http.begin(HOST_NAME + PATH_NAME + get_voltage()); //HTTP
  int httpCode = http.GET();
  http.end();
}

String get_voltage(){
  float voltage1 = analogRead(36) * (3.3 * 3 / 4095.0);
  delay(20000);
  float voltage2 = analogRead(36) * (3.3 * 3 / 4095.0);
  delay(20000);
  float voltage3 = analogRead(36) * (3.3 * 3 / 4095.0);
  delay(20000);
  float voltage4 = analogRead(36) * (3.3 * 3 / 4095.0);
  delay(20000);
  float voltage5 = analogRead(36) * (3.3 * 3 / 4095.0);
  delay(20000);
  float voltage = (voltage1+voltage2+voltage3+voltage4+voltage5)/5;
  return String(voltage*1.04,3);
}