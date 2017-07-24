<?php
	include_once("./system_functions.php");

	$username = $_POST['username'];
	$password = $_POST['password'];

	$con = connect();
	$q1 = $con->query("SELECT * FROM users WHERE username='".$username."' AND password='".hash("sha512",$password.$sqlSalt)."'");
	if($q1 && $q1->rowCount()>0)
	{
		$a1 = $q1->fetch();

		setcookie("username",$username);
		setcookie("password",hash("sha512",$password.$sqlSalt));

		header("Location: index.php");
	}
	else
	{
		echo "wrong user/pass";
	}
?>
