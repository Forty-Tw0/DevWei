<?php
	include_once("system_functions.php");

	if(checkRights(VALID))
	{
		echo 'You are logged in as: '.$_COOKIE['username'].'<br>
		<a href="logout.php">Logout</a>';
	}
	else
	{
		echo '<a href="login.php">Login</a>';
	}
?>
