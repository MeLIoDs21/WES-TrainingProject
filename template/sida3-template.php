<!DOCTYPE html>
<html lang="sv">
  <head>
     <meta charset="utf-8">
     <title>Produkter</title>
		 <link rel="stylesheet" href="css/stilmall.css">
	</head>
  <body id="sida3">
    <div id="wrapper">
			<header><!--Sidhuvud-->
            <h1>Min onlinebutik - Produkter</h1>
      </header>
      
      <?php
		require "masthead.php";
		require "meny.php";
		require "varor.php";
		?>
			
			<main> <!--Huvudinnehåll-->
				<section id="content">
					<h2>Varor</h2>
					
			<?php
					foreach($varor as $vara){
						echo "<tr>", '<figure>';
						 echo "<img src='";
						 echo $vara["picture"];
						 echo "'>",'<figcaption>', "<td>";
						 echo $vara["username"];
						 echo " </td><td>";
						 echo $vara["prise"];
						 echo " </td><td>";
						 echo '<a href="#">Köp</a>';
						 echo "</td>",'</figcation>',"</tr>", '</figure>';
						 }
						?>
            
			</section>
				
				
			</main>
			
			<aside id="aside">
				   <p>News</p>
			</aside>
		</div>
		<!--Egen fil -->
      <?php
		require "footer.php";
		?>
  
  </body>
</html>