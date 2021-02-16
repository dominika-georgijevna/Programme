print("Geben Sie Ihr Gehalt in Euro ein:")
gehalt=int(input())
steuer=float()
if gehalt>4000:
    steuer=float(0.26)
elif gehalt>2500<4000:
    steuer=float(0.22)
else:
    steuer=float(0.18)
summe= gehalt * steuer
print("Es ergibt sich eine Steuer von ", summe, "Euro")
