<?php

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db_name = "examplenews";

	// $server = "mysql.idhostinger.com";
	// $user = "u568595554_user";
	// $pass = "R80OUGx4";
	// $db_name = "u568595554_klien";

	try{
		$conn = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);

		//mengatur PDO error mode ke exception
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo "Connection failed: ".$e->getMessage();
	}
?>