<?php
	session_start();

	if (!isset($_SESSION['username']))
	{
		header('Location: index.php');
	}
	echo "<center> " .$_SESSION['username']. " </center>";

	include './Class/Database.php';
	include './Class/Admin.php';

	$database = new Database();
	$admin = new Admin($database->connect());

	echo $_POST['username'];
	echo "<br>";
	echo $_POST['rfid'];
	echo "<br>";
	echo $_POST['key'];
	echo "<br>";

	if($_POST['username'] != 'kosong' && $_POST['rfid'] != NULL && $_POST['key'] != NULL)
	{
		echo "Jalan";




		$key = $_POST['key'];
	    echo "<br>isi $ key : ";
	    echo $key;
	    $tes = $_POST['rfid'];
	    echo "<br>isi $ tes : ";
	    echo $tes;
	    echo "<br>panjang $ tes : ";
	    echo strlen($tes);
	    echo "<br>isites : ";
	    $isites = strlen($tes);
	    echo $isites;
	    echo "<br>";
	    echo "<br>";

	    echo "isi dipecah<br>";
	    for($i=0 ; $i< $isites ; $i++)
	    {
	    	$pecah[$i] = substr($tes, $i, 1);
	    	echo $pecah[$i]."<br>";
	    }
		echo "<br>";

	    echo "isi diASCII<br>";
	    for($i=0 ; $i< $isites ; $i++)
	    {
	    	$pecahascii[$i] = ord($pecah[$i]{0}) ;
	    	echo $pecahascii[$i]."<br>";
	    }
	    echo "<br>";

	    echo "isi diASCII ditambah Key<br>";
		for($i=0 ; $i< $isites ; $i++)
	    {
	    	$pecahascii[$i] = $pecahascii[$i] + $key ;
	    	if($pecahascii[$i] > 255)
	    	{
	    		$pecahascii[$i] = $pecahascii[$i] - 255;
	    	}
	    	echo $pecahascii[$i]."<br>";
	    }
		echo "<br>";

	    echo "isi diASCII ditambah Key diubah CHAR<br>";
	    for($i=0 ; $i< $isites ; $i++)
	    {
	    	$hasilarray[$i] = chr($pecahascii[$i]);
	    	echo $hasilarray[$i]."<br>";
	    }
		echo "<br>";

	    echo "HASILNYA isi diASCII ditambah Key diubah CHAR<br>";
	    $hasil = '';
	    for($i=0 ; $i< $isites ; $i++)
	    {
	    	$hasil = $hasil .= $hasilarray[$i];
	    	echo $hasil."<br>";
	    }


		$admin->tambahrfid($_POST['username'], $hasil);
	}
	else
	{
		$_SESSION['report'] = "Data Belum Lengkap!!";
	}

	header("Location: register.php");
?>