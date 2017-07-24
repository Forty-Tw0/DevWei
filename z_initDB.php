<?php
	include_once("z_passwords.php");

	//this file is more for documentation than execution

	$con = new PDO("mysql:host=devwei.db.11439666.hostedresource.com","devwei",$sqlpass); 
	if($con)
	{
		$con->query("CREATE DATABASE devwei");
		$con->query("USE devwei");

		$con->query("CREATE TABLE users (username varchar(32) NULL, PRIMARY KEY(username))");
		$con->query("ALTER TABLE users ADD password varchar(128) NULL");
		$con->query("ALTER TABLE users ADD rights int DEFAULT 0");

		//init the devwei with all rights
		$con->query("INSERT INTO users SET username='devwei',password='".hash("sha512",$devpass.$sqlSalt)."',rights=2147483647");
	}
?>
