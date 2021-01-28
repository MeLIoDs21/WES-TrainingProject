	<?php
		header('Content-Type: text/html, charset=utf-8');
		$username = 'Kalle';
			echo "Ll";

		$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

		if(!$dbh){
			echo "Ingen kontakt med databasen";
			exit;
		}

		
		
		
			$sql = "SELECT * FROM customers WHERE Username=?";
			$res = $dbh->prepare($sql);			// Prepar qustion
			$res->bind_param("s", $username);						// Asks the qustione
			$res->execute();						// Asks the qustione
			$result = $res->get_result();			// Brings results
			$row = $result -> fetch_assoc();

		if(!$result){
			echo "Felaktig SQL fråga";
			exit;
		}

		$dbh ->close();							// Closes the database
		
		
		
		$info = array();
		while($row = $result->fetch_assoc()){
			
			array_push($info, $row);	

		}
		
		var_dump($info);