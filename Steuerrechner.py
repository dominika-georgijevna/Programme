print("Geben Sie Ihr Gehalt in Euro ein:")
gehalt=int(input())
steuer=float(0.18)
if gehalt>2500:
    steuer=float(0.22)
else:
    steuer=float(0.18)
summe= gehalt * steuer
print("Es ergibt sich eine Steuer von ", summe, "Euro")
