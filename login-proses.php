<?php

session_start();

include './Class/Database.php';
include './Class/Login.php';

$database = new Database();
$login = new Login($database->connect());

echo $_POST['username'];
echo "<br>";
echo $_POST['password'];

if($_POST['username'] == 'admin' && $_POST['password'] == 'admin')
{
	$_SESSION['username'] = $_POST['username'];

	header("Location: register.php");
}
else
{
	$login->usrlogin($_POST['username'], $_POST['password']);
}
?>