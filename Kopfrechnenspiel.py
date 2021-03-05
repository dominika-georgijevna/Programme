import random
random.seed()

a = random.randint(1,10)
b = random.randint(1,10)
c = a + b
print("Die Aufgabe:", a, "+", b)

print("Bitte eine Zahl eingeben:")
z = input()
zahl = int(z)

if zahl == c:
    print(zahl, "ist richtig")
elif zahl < 0 or zahl > 100:
    print(zahl, "ist ganz falsch")
elif c-1 <= zahl <= c + 1:
    print(zahl, "ist ganz nahe dran")
else:
    print(zahl, "ist falsch")

print("Ergebnis:", c)
