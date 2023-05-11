#include <Arduino.h>

// définition des broches et variables utilisées
int trig = 3;
int echo = 2;
int lecture_echo;
int distance_mm;
int compteur = 0;
int a;
char* debutDeTrame[2]={"$","$"};
char* finDeTrame[2]={"§","§"};
const unsigned long MEASURE_TIMEOUT = 25000UL; // 25ms = ~8m à 340m/s

/* Vitesse du son dans l'air en mm/us */
const float SOUND_SPEED = 340.0 / 1000;

void setup()
{
  pinMode(trig,OUTPUT);
  digitalWrite(trig, LOW);
  pinMode(echo, INPUT);
  Serial.begin(9600);
}
void loop()
{ 
  digitalWrite(trig, HIGH);
  delayMicroseconds(10);
  digitalWrite(trig, LOW);


  long measure = pulseIn(echo, HIGH, MEASURE_TIMEOUT);
   
  float distance_mm = measure / 2.0 * SOUND_SPEED;
  float pourcentage = distance_mm * 100 /4000;
         pourcentage = 100 - pourcentage;

   
  /* Affiche les résultats en mm, cm et m */
  Serial.print(debutDeTrame[2]);
  Serial.print(pourcentage, 2);
  Serial.println(finDeTrame[2]);
  
  delay(500);


  }