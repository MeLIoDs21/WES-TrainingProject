<?php

	 header('Content-Type: text/html, charset=utf-8');
	 
	 $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	 $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
	 

	$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

	if(!$dbh){
		echo "Ingen kontakt med databasen";
		exit;
	}

	$sql = "SELECT Username, password FROM members WHERE Username='{$username}'";
	$res = $dbh->prepare($sql);			// Prepar qustion
	$res->execute();						// Asks the qustione
	$result = $res->get_result();			// Brings results

	if(!$result){
		echo "Felaktig SQL fråga";
		exit;
	}

	$dbh ->close();							// Closes the database

	if($result -> fetch_assoc()["password"] == "{$password}"){
		echo	"Succe";
		echo	"<br>";
	} else { echo "Fail"; }
	
	/*
			while($row = $result->fetch_assoc()){
			echo	$row['prise']." kronor for one " . $row['username'];
			echo	"<br>";
	 */
	 
	 
