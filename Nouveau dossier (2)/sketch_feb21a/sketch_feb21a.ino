#include <Adafruit_Fingerprint.h>


SoftwareSerial mySerial(2, 3);
Adafruit_Fingerprint finger = Adafruit_Fingerprint(&mySerial);
void setup() {
  // put your setup code here, to run once:
Serial.begin(57600);
  while (!Serial);  // Attendre que le moniteur série soit disponible
  Serial.println("Initialisation...");
  
  // Initialiser le module de capteur d'empreinte
  finger.begin(57600);

  if (finger.verifyPassword()) {
    Serial.println("Mot de passe OK !");
  } else {
    Serial.println("Mot de passe incorrect");
    while (1) { 
      // Boucle infinie si le mot de passe est incorrect
    }
  }

}

void loop() {
  // put your main code here, to run repeatedly:
  
 // Récupérer une image prétraitée
  int result = finger.getImage();
  //int result = finger.Image();
  if (result == FINGERPRINT_OK) {
    // Afficher l'image prétraitée
  for (int i = 0; i < sizeof(finger.getImage()); i++) {
      Serial.write(finger.getImage());
   //  }
    }else {
    Serial.print("Erreur de capture d'empreinte : ");
    Serial.println(result);
  }
  
  delay(1000);

}
