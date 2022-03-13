<?php

	session_start();

	$_SESSION['username'] = '';
	$_SESSION['id'] = 0;
	unset($_SESSION['username']);
	unset($_SESSION['id']);
	session_unset();
	session_destroy();
	setcookie("username", "", time() - 3600);
	header('Location: login.php');

?>