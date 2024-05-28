<?php 
	session_start(); 

	if (!isset($_SESSION['user_nom'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login-form.php');
	} else{		header('location: inscription-form.php');  }

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user_nom']);
		header("location: login-form.php");
	}
           
?>
