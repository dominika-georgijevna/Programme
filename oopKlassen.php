<html>
	<head>
		<meta charset="utf-8"/>
		<title>Flächenberechnung</title>
	</head>
	<body>
		<h2>Berechnung der Raumfläche</h2>
	</body>
</html>


<?php

#Definition der Klasse "Raum"
class Raum {

	#Definition der Attribute
	private $laenge;
	private $breite;
	private $name;
	private $flaeche;

	#Definiton der set-Methoden (Setzen von Werten)
	function setLaenge($laenge) {
		$this->laenge = $laenge;
	}

	function setBreite($breite) {
		$this->breite = $breite;
	}

	function setName($name) {
		$this->name = $name;
	}

	#Definiton der get-Methoden (Ausgeben von Werten)
	function getLaenge() {
		return $this->laenge;
	}

	function getBreite() {
		return $this->breite;
	}

	function getName() {
		return $this->name;
	}

	function getFlaeche() {
		return $this->flaeche;
	}

	#Definition des Flächenberechners
	function flaechenrechner() {
		$flaeche = $this->laenge * $this->breite;
		$this->flaeche = $flaeche;
	}

}

#Erstelle Raum B23, setze Attribute und berechne die Fläche
$B23 = new Raum();
$B23->setName("B2.3");
$B23->setLaenge(3);
$B23->setBreite(4);
$B23->flaechenrechner();

#Ausgabe der Werte
echo "Die Fläche des Raums " . $B23->getName() . " beträgt " . $B23->getFlaeche() . "m².";

?>
