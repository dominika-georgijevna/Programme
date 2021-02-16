#Zufallsgenerator
import random
random.seed()

a = random.randint(1,10)
b = random.randint(1,10)
c = a + b
print("Die Aufgabe:", a, "+", b)

print("Bitte eine Zahl eingeben:")
z = input()
zahl = int (z)

if zahl ==c:
    print(zahl, "ist richtig")
else:
    print(zahl, "ist falsch")
    print("Ergebnis:", c)
