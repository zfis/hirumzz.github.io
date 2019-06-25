<?php
	session_start();

	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
	//echo "<center> " .$_SESSION['username']. " </center>";

?>
<!DOCTYPE html>
<head>
	<<title>Keuskupan</title>
	<link rel="stylesheet" type="text/css" href="css/styleloginvideo.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
	<style>
		.fa-dove {
  			color: #8eb3ed;
		}
	</style>
</head>
<body data-vide-bg="mp4: video/back">
	<div class="login-form">
		<!--<form action="logout.php" method="post">
			<button type="submit" name="submit">Logout</button>
		</form>-->
		<center><i class="fas fa-dove fa-2x"></i></center>
		<center><h3>Please Scan Your RFID</h3></center>
		<form action="next.php" method="post">
			<div class="form-input">
				Your Username<input name="username" type="username" value=<?php echo '"'.$_SESSION['username'].'"' ?> readonly>
			</div>
			<div class="form-input">
				Your Username<input placeholder="masukkan kunci" name="key" type="key" required>
			</div>
			<div class="form-input">
			<!--<button type="submit" name="submit">Next</button>-->
				<input type="submit" name="submit" value="Next">
			</div>
		</form>
			<div class="form-input">
				<form action="logout.php" method="post">
					<input type="submit" name="submit" value="Cancel">
				</form>
			</div>
	<?php
		if(!isset($_SESSION['report']))
		{
			//echo "KOSONG";
		}
		else if(isset($_SESSION['report']))
		{
			echo "<center> " .$_SESSION['report']. " </center>";
			//echo "ADA ISINYA";
			//echo $_SESSION['report'];
			unset($_SESSION['report']);
		}
	?>
	</div>

	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/jquery.vide.js"></script>


</body>

</html>