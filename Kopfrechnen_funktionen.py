def aufgabe():
    a = random.randint(1,10)
    b = random.randint(1,10)
    erg = a + b
    print("Die Aufgabe:", a, "+", b)
    return erg

def kommentar(eingabezahl, ergebnis):
    if eingabezahl == ergebnis:
        print(eingabezahl, "ist richtig")
    else:
        print(eingabezahl, "ist falsch")

import random
random.seed()

c = aufgabe()

zahl = c + 1
versuch = 0

while zahl != c:
    versuch = versuch + 1

    print("Bitte eine Zahl eingeben:")
    z = input()

    try:
        zahl = int(z)
    except:
        print("Sie haben keine Zahl eingeben")
        continue

    kommentar(zahl,c)

print("Ergebnis:", c)
print("Anzahl Versuche:", versuch)
