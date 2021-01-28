<?php

		header('Content-Type: text/html, charset=utf-8');

		$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

		if(!$dbh){
			echo "Ingen kontakt med databasen";
			exit;
		}

		$sql = "SELECT * FROM customers WHERE username=?";
		$res = $dbh->prepare($sql);			// Prepar qustion
		$res->bind_param("s", $username);		// Prepar qustion
		$res->execute();						// Asks the qustione
		$result = $res->get_result();			// Brings results

		if(!$result){
			echo "Felaktig SQL fråga";
			exit;
		}

		$dbh ->close();							// Closes the database
		
		
		
		$Info = array();
		while($row = $result->fetch_assoc()){
			
			array_push($Info, $row);	

		}
		
		
