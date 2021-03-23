import random
random.seed()

summe = 0

while summe < 30:
    zahl = random.randint(1,8)
    summe = summe + zahl
    print("Zahl:", zahl, "Zwischensumme:", summe)

print("Ende")
