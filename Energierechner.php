<!DOCTYPE html> <html>
<head>
    <meta charset="UTF-8">
    <title>Energieverbrauch und Kosten</title>
</head>

<body>

<form action="LKOOPHiobLukas.php" method="POST">
		<p>  Bezeichnung: <input type="text" name="gname"></p>
		<p>     Wattzahl(ganzzahlig): <input type="text" name="watt"></p>
		<p>Nutzungsdauer(ganzzahlig): <input type="text" name="nutzzeit"></p>

    <p><input type="submit" value="Berechne"></p>
		<input type="reset" value="Zurücksetzen"></p>

	</form>


<?php

class SetKosten{

private $Geraet;
private $Wattzahl;
private $Nutzdauer;
public $Verbrauch;
public $Kosten;

		public function setName($name){
			$this->Geraet = $name;
		}

		public function getName(){
			return $this->Geraet;
		}

		public function setNutzdauer($dauer){
			$this->Nutzdauer =$dauer;
		}

		public function getNutzdauer(){
			return $this->Nutzdauer;
		}

		public function setWatt($wzahl){
			$this->Wattzahl = $wzahl;
		}

		public function getWatt(){
			return $this->Wattzahl;
		}

		public function setVerbrauch(){
			$this->Verbrauch = ($this->Wattzahl * $this->Nutzdauer) / 1000;
		}

		public function getVerbrauch(){
			return $this->Verbrauch;
		}


		public function setKosten(){
			$this->Kosten = ($this->Verbrauch * $this->Nutzdauer);
		}

		public function getKosten(){
			return $this->Kosten;
		}
}

$verbraucher = new SetKosten();
$verbraucher->setName($_POST["gname"]);
$verbraucher->setNutzdauer($_POST["nutzzeit"]);
$verbraucher->setWatt($_POST["watt"]);
$verbraucher->setVerbrauch();
$verbraucher->setKosten("0.3");

echo "(Preis für 1kWh 0.30 €) <br>";
echo "<br>";
echo "<br>";
echo "Das Gerät hat folgendende Daten: <br>";
echo "<br>";
echo "Bezeichnung: " . $verbraucher->getName() . "<br>";
echo "<br>";
echo "Nutzungsdauer: " . $verbraucher->getNutzdauer() . " Stunden<br>";
echo "<br>";
echo "Energieverbrauch: " . $verbraucher->Verbrauch . " kWh<br>";
echo "<br>";
echo "Stromkosten: " . $verbraucher->Kosten . " €<br>";

?>

</body>

</html>
