<?php
//Creates new record as per request
    //Connect to database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "dbfinal";
 
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Database Connection failed: " . $conn->connect_error);
    }
 
    //Get current date and time
    //date_default_timezone_set('Asia/Kolkata');
    //$d = date("Y-m-d");
    //echo " Date:".$d."<BR>";
    //$t = date("H:i:s");
 
    if(!empty($_POST['uid']))
    { 
    	$uid = $_POST['uid'];
        $uid = rtrim($uid); //menghapus spasi diakhir kalimat
        $username = $_POST['username'];
        $username = rtrim($username);
    	//$station = $_POST['station'];
 
	    $sql = "INSERT INTO tbltemp (uid, username)
		
		VALUES ('".$uid."','".$username."')";

			
		if ($conn->query($sql) === TRUE) {
		    echo "OK";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
	}
 
 
	$conn->close();
?>