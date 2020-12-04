<?php
header('Content-Type: text/html, charset=utf-8');

$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

if(!$dbh){
	echo "Ingen kontakt med databasen";
	exit;
}

$sql = "SELECT Username FROM members ";
$res = $dbh->prepare($sql);			// Prepar qustion
$res->execute();						// Asks the qustione
$result = $res->get_result();			// Brings results

if(!$result){
	echo "Felaktig SQL fråga";
	exit;
}

$dbh ->close();							// Closes the database

while($row = $result->fetch_assoc()){
	if($row['Username'] == $username)
		echo "Lul";

}
