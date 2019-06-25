<!DOCTYPE html>
<head>
	<title>Keuskupan</title>
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
		<center><i class="fas fa-dove fa-2x"></i></center>
		<!--
			<center><i class="fas fa-dove fa-2x"></i></center>
			<center><i class="fas fa-cross fa-2x"></i></center>
		-->
		<h3>Login :</h3>
		<form action="login-proses.php" method="post">
			<div class="form-input">
				<input placeholder="masukkan username" name="username" type="username">
			</div>
			<div class="form-input">
				<input placeholder="masukkan password" name="password" type="password">
			</div>
			<div class="form-input">
				<input type="submit" name="submit" value="Login">
			</div>
			<!--<button type="submit" name="submit">Login</button>-->
		</form>

	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="js/jquery.vide.js"></script>
	<?php
		session_start();
	

		if(!isset($_SESSION['report']))
		{
			//echo "KOSONG";
		}
		else if(isset($_SESSION['report']))
		{
			echo "
				<center> " .$_SESSION['report']. " </center>
			";
			//echo "ADA ISINYA";
			//echo $_SESSION['report'];
			unset($_SESSION['report']);
		}
	?>


</body>

</html>