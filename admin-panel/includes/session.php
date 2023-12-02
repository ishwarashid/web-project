<?php
	session_start();
	if (!isset($_SESSION['SESSION_ID']))
	{
		header("Location: page-login.php");
		exit();
	}
?>