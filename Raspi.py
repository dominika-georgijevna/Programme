
import RPi.GPIO as GPIO
import time

button = 3
led = 37
led2 = 35
spieler = 31


GPIO.setmode(GPIO.BOARD)
GPIO.setup(led, GPIO.OUT)
GPIO.setup(button, GPIO.IN)
GPIO.setup(led2, GPIO.OUT)
GPIO.setup(spieler, GPIO.IN)


GPIO.output(led, GPIO.LOW)
counter = 0
counter2 = 0
ziel = 10

while ziel >= counter:
        print(GPIO.input(spieler))
        GPIO.output(led, GPIO.LOW)
        GPIO.output(led2, GPIO.LOW)

        if GPIO.input(button) == 0:
                counter = counter +1
                time.sleep(0.2)

        if GPIO.input(spieler) == 0:
                counter2 = counter2 + 1
                time.sleep(1)

if counter > counter2:
        GPIO.output(led, GPIO.HIGH)
        time.sleep(4)
else:
        GPIO.output(led2, GPIO.HIGH)
        time.sleep(4)
GPIO.cleanup()
