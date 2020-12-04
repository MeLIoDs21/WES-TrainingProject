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
		require "meny.php";
		require "varor.php";
		?>
		
		<main> <!--Huvudinnehåll-->
			<section id="content">
				<h2>Varor</h2>
				<table>
					<thead>
						<tr>
							<th>ProduktID</th>
							<th>Name</th>
							<th>Beskrivning</th>
							<th>Pris</th>
							<th>Bild</th>
							<th></th>
						</tr>
					</thead>
					<tbody>
					<?php
					foreach($varor as $vara){
						echo "<tr><td>";
						 echo $vara["produktID"];
						 echo "</td><td>";
						 echo $vara["username"];
						 echo "</td><td>";
						 echo $vara["description"];
						 echo "</td><td>";
						 echo $vara["prise"];
						 echo "</td><td>";
						 echo "<img src='";
						 echo $vara["picture"];
						 echo "'></td></tr>";
						 }
						?>
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
		-->