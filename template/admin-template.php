<!DOCTYPE html>

<html lang="sv">
  <head>
     <meta charset="utf-8">
     <title>Produkter</title>
		 <link rel="stylesheet" href="css/stilmall.css">
  </head>
  <body id="produkter">
    <div id="wrapper">
      
      <?php
		require "masthead.php";
		require "Meny-Inloggad.php";
		require "connect-admin.php";
		?>
		
		<main> <!--Huvudinnehåll-->
			<section id="content">
				<h2>Control Panel</h2>

				<table>
					<tbody>
						<tr>
							<td>Username</td>
							<td><?php echo $Info[0]["username"] ?></td>
						</tr>
						<tr>
							<td>Firstname</td>
							<td><?php echo $Info[0]["firstname"] ?></td>
						</tr>
						<tr>
							<td>Lastname</td>
							<td><?php echo $Info[0]["lastname"] ?></td>
						</tr>
						<tr>
							<td>Adress</td>
							<td><?php echo $Info[0]["adress"] ?></td>
						</tr>
						<tr>
							<td>Postnr</td>
							<td><?php echo $Info[0]["postnr"] ?></td>
						</tr>
						<tr>
							<td>Postadress</td>
							<td><?php echo $Info[0]["postadress"] ?></td>
						</tr>
						<tr>
							<td>Phone</td>
							<td><?php echo $Info[0]["phone"] ?></td>
						</tr>
					</tbody>
				</table>
						
			</section>
		</main>
	
	
      <?php
		require "footer.php";

		?>
	</div>
  </body>
</html>

<!--

		header('Content-Type: text/html, charset=utf-8');

		$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

		if(!$dbh){
			echo "Ingen kontakt med databasen";
			exit;
		}

		$sql = "SELECT * FROM customers WHERE";
		$res = $dbh->prepare($sql);			// Prepar qustion
		$res->execute();						// Asks the qustione
		$result = $res->get_result();			// Brings results
		
		
		
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
-->