<?php
	include_once("z_passwords.php");

	//connect to the SQL database
	function connect()
	{
		global $sqlpass;

		try
		{
			$con = new PDO("mysql:host=devwei.db.11439666.hostedresource.com","devwei",$sqlpass);
			$con->query("USE devwei");
			return $con;
		}
		catch(PDOException $e)
		{
			throw new Exception('Could not connect to database');
		}
	}

	//constants for bitmasking
	define("VALID", 1);
	//send the user to login.php if they don't have rights
	function checkRights($rights)
	{
		global $sqlSalt;

		$con = connect();
		$q1 = $con->query("SELECT rights FROM users WHERE username='".$_COOKIE['username']."' AND password='".$_COOKIE['password']."'");
		if($q1 && $q1->rowCount()>0)
		{
			$a1 = $q1->fetch();
			//fancy bitmasking
			if(($rights & $a1['rights']) == $rights) return;
		}
		header("Location: login.php");
	}
?>
