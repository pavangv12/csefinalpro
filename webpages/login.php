
<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computerscience";


// Connect to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Make sure we connected successfully
if(! $conn)
{
    die('Connection Failed'.mysql_error());
}
// Grab User submitted information
$usn = $_POST["usn"];
$pass = $_POST["password"];
// Select the database to use
// mysqli_select_db($dbname,$conn);
 $query = "SELECT usn, password FROM login WHERE usn='$usn'";
 $result = mysqli_query($conn, $query) or die(mysqli_error($conn));


$row = mysqli_fetch_array($result);

if($row["usn"]==$usn && $row["password"]==$pass)
{	

          $_SESSION['usn']=  $usn;
$log=$_SESSION['usn'];
        if(isset($log)){
			if(preg_match("/^4/",$log))
				header("location: student_profile.php");
			else if(preg_match("/^cd/",$log))
				header("location: lecture_profile.php");
			else if(preg_match("/^a/",$log))
				header("location: admin.html");
			else
				header("location: login.html");
			}
}
else
{   
	echo"Sorry, your credentials are not valid, Please try again.";
	header("location:login.html");
	 }
 
  	
?>



 
        
       
