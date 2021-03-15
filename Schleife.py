import random
random.seed()

a = random.randint(1,10)
b = random.randint(1,10)
c = a + b
print("Die Aufgabe:", a, "+", b)

for versuch in range(1,10):
    print("Bitte eine Zahl eingeben:")
    z = input()
    zahl = int(z)
    
if zahl == c:
    print(zahl, "ist richtig")
    break
else:
    print(zahl, "ist falsch")

print("Ergebnis: ", c)
print("Anzahl Versuche:", versuch)
