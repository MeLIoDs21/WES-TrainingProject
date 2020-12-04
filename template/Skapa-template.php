<!DOCTYPE html>

<html lang="sv">

  <head>
     <meta charset="utf-8">
     <title>Logga in</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="login">
    <div id="wrapper">
      <?php
		require "masthead.php";
		require "meny.php";
		?>
		
			<main> <!--Huvudinnehåll-->
				<section>
					 <form action="Skapa2.php" method="post">
            <p><label for="user">Användarnamn:</label>
            <input type="text" id="user" name="username"></p>

            <p><label for="pwd">Lösenord:</label>
            <input type="password" id="pwd" name="password"></p>
			
			<p><label for="mailadress">Mailadress:</label>
            <input type="text" id="mailadress" name="mailadress"></p>
			
			<p><label for="gata">Gatuadress:</label>
            <input type="text" id="gata" name="gatuadress"></p>
			
			<p><label for="postnr">Postnummer:</label>
            <input type="text" id="postnr" name="postadress"></p>
			
			<p><label for="ort">Ort:</label>
            <input type="text" id="ort" name="ort"></p>
			
			<p><label for="telefonnummer">Telefonnummer:</label>
            <input type="text" id="telefonnummer" name="telefonnummer"></p>
			
            <p>
            <input type="submit"  value="Skapa användare">
            </p>
          </form>
				</section>
			</main>
			

    </div>
      <?php
		require "footer.php";
		?>

	</body>
</html>
