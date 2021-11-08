<html>  
<head>
    <title>Flächenberechnung</title>
    <h1>Flächenberechnung</h1>
</head>
<body>  
<form method = "post">   
Länge: <input type="number" name="laenge">   
<br><br>  
Breite: <input type="number" name="breite"><br>  
<br><br>
Belagart: <input type="name" name="belagart"><br> 
<br><br>
<input type = "submit" name = "submit" value="Berechnen">   
</form>   
</body>   
</html>  
<?php   
if(isset($_POST['submit']))  
    {   
//Variablen
$laenge = $_POST['laenge'];   
$breite = $_POST['breite'];   
$flaeche = ($laenge*$breite); 
$belagart = $_POST['belagart'];
echo "Die Fläche ist: $flaeche m². Die Belagart ist: $belagart .";   
}   
?>  
