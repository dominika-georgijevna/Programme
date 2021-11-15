<html>
<body>

</html>
</body>

<?php
class NeueKlasse{
    private $laenge;
    private $breite;

   public function berechneFlaeche($breite, $laenge){
        $flaeche = $laenge * $breite;
        return $flaeche;
    }

    public function setLaenge($_laenge){
        $this->laenge = $_laenge;
    }
    public function setBreite($_breite){
        $this->breite = $_breite;
    }

	function flaechenrechner() {
		$_flaeche = $this->laenge * $this->breite;
		$this->flaeche = $_flaeche;
	}
	function getLaenge() {
		return $this->laenge;
	}

	function getBreite() {
		return $this->breite;
	}

	function getFlaeche() {
		return $this->flaeche;
	}
}

$raum = new NeueKlasse();
$raum->setLaenge(5);
$raum->setBreite(10);
$raum->flaechenrechner();


echo "Die Fläche ist " . $raum->getFlaeche() . " m²"; 


?>
