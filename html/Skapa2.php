     <?php
	 
			$username = filter_input(INPUT_POST,'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			$password = filter_input(INPUT_POST,'password', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			$mailadress = filter_input(INPUT_POST,'mailadress', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			$gatuadress = filter_input(INPUT_POST,'gatuadress', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			$postadress = filter_input(INPUT_POST,'postadress', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			$ort = filter_input(INPUT_POST,'ort', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			$telefonnummer = filter_input(INPUT_POST,'telefonnummer', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
			
			 if(empty($password)||empty($username)||empty($mailadress)||empty($gatuadress)||empty($postadress)||empty($ort)||empty($telefonnummer)){
				 echo "Inte alla värden är fyllda";
				 
			  }else	 {

					$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

					if(!$dbh){
						echo "Ingen kontakt med databasen";
						exit;
					}
					
					$sql = "SELECT Username FROM members ";
					$res = $dbh->prepare($sql);			// Prepar qustion
					$res->execute();						// Asks the qustione
					$result = $res->get_result();	
							
					$lul = 1;
					while($row = $result->fetch_assoc()){
						
						if($row['Username'] == $username){
							echo "Användaren finns redan";
							$lul = 0;
						}
					}

					if($lul == 1)
						{
							echo "$telefonnummer";
							
							$sql = "INSERT INTO members(Username, email, password) VALUE('$username', '$mailadress', '$password')";
							$res = $dbh->prepare($sql);
							$res ->execute();
							$dbh ->close();
							echo "Done";
						}
				
		}
			



		/*
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