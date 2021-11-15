<html>
<body>

<?php
class NeueKlasse{
    public $laenge;
    public $breite;

    function berechneFlaeche($breite, $laenge){
        $flaeche = $laenge * $breite;
        return $flaeche;
    }
}
$raum = new NeueKlasse();
$raum->laenge = 5;
$raum->breite = 10;
$flaeche = $raum->berechneFlaeche($raum->breite, $raum->laenge);

echo "Die Fläche ist " . $flaeche . " m²"; 

?>
</html>
</body>
