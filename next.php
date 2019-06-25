<?php
	session_start();

	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
	echo "<center> " .$_SESSION['username']. " </center>";

	echo "proses lanjutan . . . ";
	echo "<br>";

	include './Class/Database.php';
	include './Class/User.php';

	$database = new Database();
	$user = new User($database->connect());

	echo $_SESSION['username'];
	echo "<br>";
	echo $_POST['key'];
	echo "<br>";

	if (!isset($_SESSION['rfid']))
	{
		$user->rfidlogin($_SESSION['username'], $_POST['key']);
	}
	if (isset($_SESSION['rfid']))
	{
		header("Location: indexuser.php");
	}
?>