<!DOCTYPE html> <html> 
<head>
    <meta charset="UTF-8"> 
    <title>Volumenberechnung</title> 
</head> 
<body> 
    <!--Eingabefelder-->
	<h1>Berechnung des Volumes</h1>
    <p>Bitte füllen Sie die folgenden Felder mit den Daten zu einem Körper aus!</p><br>
	<form action="" method="post">
			<label for="radius">Radius in cm: </label><br>
			<input type="number" name="radius"><br>
			<label for="hoehe">Höhe in cm: </label><br>
			<input type="number" name="hoehe"><br>
			<button type="submit" name="add" class="button" value="add">Berechnen!</button>
	</form>	 
<?php

#Volume eines Zylinders: V=π*r^2*h
if(!empty($_POST['add'])) {
	$Zylinder = new Zylinder();
$Zylinder->setradius($_POST['radius']);
$Zylinder->sethoehe($_POST['hoehe']);
$Zylinder->setpi(3.14159265);
$Zylinder->setvolumenzylinder();

#Ausgabe für User
echo "<b>Zylinder:</b><br>Radius:    " . $Zylinder->getradius() . " cm";
echo "<br>Höhe:    " . $Zylinder->gethoehe() . " cm";
echo "<br>Zylinder hat ein Volumen von:    " . $Zylinder->getvolumenzylinder() . " cm³";

}
#Volumen des Kegels: V=1/3*π*r^2*h
if(!empty($_POST['add'])) {
	$Kegel = new Kegel();
$Kegel->setradius($_POST['radius']);
$Kegel->sethoehe($_POST['hoehe']);
$Kegel->setpi(3.14159265);
$Kegel->setvolumenkegel();

#Ausgabe für User
echo "<b><br><br><br>Kegel:</b><br>Radius:    " . $Kegel->getradius() . " cm";
echo "<br>Höhe:    " . $Kegel->gethoehe() . " cm";
echo "<br>Kegel hat ein Volumen von:    " . $Kegel->getvolumenkegel() . "cm³";

}
#Hauptklasse
class Koerper {
	protected $radius;
    protected $hoehe;
    protected $pi;
	
    #Set und Get Methoden
	public function setradius($radius){
		$this->radius= $radius;
	}
	public function getradius(){
		return $this->radius;
	}

	public function sethoehe($hoehe){
		$this->hoehe= $hoehe;
	}
	public function gethoehe(){
		return $this->hoehe;
	}
	public function setpi($pi){
		$this->pi =$pi;
	}
	public function getpi(){
		return $this->pi;
	}
	}
#Unterklasse Zylinder
class Zylinder extends Koerper {
    private $volumenzylinder;
    
    public function setvolumenzylinder(){
        $this->volumenzylinder= (($this->radius*$this->radius) * ($this->pi) * ($this->hoehe));
    }
    public function getvolumenzylinder(){
		return $this->volumenzylinder;
	}    
}

#Unterklasse Kegel
class Kegel extends Koerper{
    private $volumenkegel;
    
    public function setvolumenkegel(){
        $this->volumenkegel= ((1/3) * $this->pi * ($this->radius*$this->radius) * $this->hoehe);
    }
    public function getvolumenkegel(){
		return $this->volumenkegel;
	}    
}

?>
</html> 
