//frontend
<html>
	<head>
		<link rel="stylesheet" href="style.css" type="text/css">
	</head>
	<body>
		<form action="" method="post">
			
		
		
			<label for="geburtsdatum">Geburtsdatum: </label><br>
			<input type="text" name="geburtsdatum"><br>
		
		
			<label for="vorname">Vorname: </label><br>
			<input type="text" name="vorname"><br>
		
		
			<label for="nachname">Nachname: </label><br>
			<input type="text" name="nachname"><br>

			<button type="submit" name="add" class="button" value="buecher">Alle</button>
			<button type="submit" name="Reset" class="button" value="reset">Datenbank Zurücksetzen</button>
		</form>

	<?php include 'controller.php'; ?>
	</body>
</html>

//backend
function addAutor(){
	global $conn;
	
	$firstname = $_POST['vorname'];
	$surname = $_POST['nachname'];
	$birthdate = date('Y-m-d H:i:s',strtotime($_POST['geburtsdatum'])); 
	

	$SQL = 	"INSERT INTO buchladen.autoren (vorname, nachname, geburtsdatum) ";
	$SQL .= "VALUES ('{$firstname}', '{$surname}', '{$birthdate}')";
	


	//echo $SQL . "<br>";
	
	$result = $conn->query($SQL);
	
	//echo $conn->error;

	if($result){
		echo "Einfügen erfolgreich";
	}else{
		echo "Etwas ist schief gegangen";
		echo mysqli_error($conn);
	}
}
