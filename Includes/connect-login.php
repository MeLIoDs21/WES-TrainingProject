<?php

	$dbh = new mysqli("localhost", "MeLIoDs", "loal00001", "webbshop");

	if(!$dbh){
		echo "Ingen kontakt med databasen";
		exit;
	}
	$sql = "SELECT password FROM members WHERE Username=?";
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

	if($row["password"] == $password){
		session_start();
		$_SESSION['username']= $username;
		require "../html/admin.php";
	} else { echo "Fail"; }
	
















/*
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
*/
