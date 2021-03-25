#Funktion mit einem Parameter
def quadrat(x):
    q = x*x
    print("Zahl:", x, "Quadrat:", q)

quadrat(4.5)
a = 3
quadrat(a)
quadrat(2*a)

#Funktion mit mehreren Parameter
def berechnung(x,y,z):
    ergebnis = (x+y) * z
    print("Ergebnis:", ergebnis)

berechnung(2,3,5)
berechnung(5,2,3)
