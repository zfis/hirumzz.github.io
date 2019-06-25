<?php
	session_start();

	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
	if (!isset($_SESSION['rfid']))
	{
		header('Location: user.php');
	}
	echo "<center> " .$_SESSION['username']. " </center>";
	echo "<center> " .$_SESSION['rfid']. " </center>";
?>
<!DOCTYPE html>
<head>
	<title>User</title>
</head>
	<center>
		<form action="logout.php" method="post">
		<button type="submit" name="submit">Logout</button>
		</form>
	</center>
	
</body>

</html>