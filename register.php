<?php
	session_start();

	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
	echo "<center> " .$_SESSION['username']. " </center>";

	include "./Class/Database.php";
	include "./Class/Admin.php";
	
	$database = new Database();
	$admin = new Admin($database->connect());
	$data = $admin->lihatdatauser();
	$datalogin = $admin->lihattabellogin();
	$datarfid = $admin->lihattabelrfid();
?>
<!DOCTYPE html>
<head>
	<title>Register</title>
</head>

	<form action="logout.php" method="post">
		<button type="submit" name="submit">Logout</button>
	</form>

	<h3>Register User :</h3>
	<form action="tambah-login.php" method="post">
		<input placeholder="masukkan username" name="username" type="username">
		<br>
		<input placeholder="masukkan password" name="password" type="password">
		<br>
		<input placeholder="masukkan nama" name="nama" type="nama">
		<br>
		<button type="submit" name="submit">Register User</button>
	</form>

	<h3>Register RFID :</h3>
	<form action="tambah-rfid.php" method="post">
		<?php
			echo "
			<select name='username'>
				<option value='kosong'> --Pilih Nama-- </option>";
				for($i=0 ; $i<count($data) ; $i++)
				{
					echo "<option value=".$data[$i]['username']."> ".$data[$i]['nama']." </option>";
				}
			echo "
			</select>";
		?>
		<br>
		<input placeholder="masukkan rfid" name="rfid" type="rfid">
		<br>
		<input placeholder="masukkan key" name="key" type="number">
		<br>
		<button type="submit" name="submit">Register RFID</button>
	</form>


	<?php
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

	<h3>Tabel Login</h3>
	<table border="1">
	<tr>
		<td>Username</td>
		<td>Password</td>
		<td>Nama</td>
	</tr>
	<?php
		for($i=0; $i<count($datalogin); $i++)
		{
			echo '
			<tr>
				<td> ' .$datalogin[$i]['username']. ' </td>
				<td> ' .$datalogin[$i]['password']. ' </td>
				<td> ' .$datalogin[$i]['nama']. ' </td>
			</tr> ';
		}
	?>
	</table>

	<h3>Tabel RFID</h3>
	<table border="1">
	<tr>
		<td>ID</td>
		<td>UID</td>
		<td>Username</td>
	</tr>
	<?php
		for($i=0; $i<count($datarfid); $i++)
		{
			echo '
			<tr>
				<td> ' .$datarfid[$i]['id']. ' </td>
				<td> ' .$datarfid[$i]['uid']. ' </td>
				<td> ' .$datarfid[$i]['username']. ' </td>
			</tr> ';
		}
	?>
	</table>

</body>

</html>