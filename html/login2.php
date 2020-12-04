<?php
	 header('Content-Type: text/html, charset=utf-8');
	
	
	if(empty($_POST['username']) || empty($_POST['password'])){
		header("Location: login.php");
	}else{
		$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW);
		
		require "../Includes/connect-login.php";
		
	}
		
		/*
				while($row = $result->fetch_assoc()){
				echo	$row['prise']." kronor for one " . $row['username'];
				echo	"<br>";
		 */
		 
		 
