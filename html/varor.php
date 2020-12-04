<?php

		header('Content-Type: text/html, charset=utf-8');

		$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

		if(!$dbh){
			echo "Ingen kontakt med databasen";
			exit;
		}

		$sql = "SELECT * FROM produkt";
		$res = $dbh->prepare($sql);			// Prepar qustion
		$res->execute();						// Asks the qustione
		$result = $res->get_result();			// Brings results

		if(!$result){
			echo "Felaktig SQL fråga";
			exit;
		}

		$dbh ->close();							// Closes the database
		
		
		
		$varor = array();
		while($row = $result->fetch_assoc()){
			
			array_push($varor, $row);	

		}
		


/*
  $varor=array(
    array("Äpple","Grönt surt","50", "bilder/apple.jpg"),
    array("Apelsin","Orange söt", "38","bilder/orange.jpg"),
    array("Päron","Gult saftigt", "100","bilder/pear.jpg"),
    array("Banan","Gul böjd", "30","bilder/banana.jpg"),
    array("Grapefrukt","Konstig", "300","bilder/banana.jpg"),
  );



		header('Content-Type: text/html, charset=utf-8');

		$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

		if(!$dbh){
			echo "Ingen kontakt med databasen";
			exit;
		}

		$sql = "SELECT * FROM produkt";
		$res = $dbh->prepare($sql);			// Prepar qustion
		$res->execute();						// Asks the qustione
		$result = $res->get_result();			// Brings results

		if(!$result){
			echo "Felaktig SQL fråga";
			exit;
		}

		$dbh ->close();							// Closes the database

		while($row = $result->fetch_assoc()){
			echo	$row['prise']." kronor for one " . $row['username'];
			echo	"<br>";

		}
		*/