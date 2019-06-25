<?php
	session_start();
	
	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
	
	include './Class/Database.php';
	include './Class/Admin.php';
	
	$database = new Database();
	$admin = new Admin($database->connect());
	
	echo $_POST['username'];
	echo "<br>";
	echo $_POST['password'];
	echo "<br>";
	echo $_POST['nama'];
	echo "<br>";
	

	$admin->tambahlogin($_POST['username'], $_POST['password'], $_POST['nama']);

	header("Location: register.php");
?>
