<?php
   session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computerscience";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
	$log=$_SESSION['usn'];
        if(isset($log)){
			if(preg_match("/^4/",$log))
				header("location: student_profile.php");
			else if(preg_match("/^cd/",$log))
				header("location: lecture_profile.php");
			else if(preg_match("/^a/",$log))
				header("location: admin.html");
			else
				header("location: login.php");
			}
?>
