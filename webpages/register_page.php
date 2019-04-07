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

if(isset($_POST['submit']))
{
if($_POST['psw']!=$_POST['psw-repeat'])
{
	echo "Enter correct password";
	//echo "<button type='button' onclick='location.href=\\'register.html\\''>Enter</button>";
}
else
{
	$sql1 = "INSERT INTO login VALUES ('".$_POST['usn']."','".$_POST['psw']."')";
  $sql2 = "INSERT INTO student_profile VALUES ('".$_POST['usn']."','".$_POST['nm']."','".$_POST['dept']."','".$_POST['ph']."','".$_POST['email']."','".$_POST['ad']."','".$_POST['dob']."','".$_POST['add']."','".$_POST['bg']."','".$_POST['fname']."','".$_POST['fno']."','".$_POST['mname']."','".$_POST['mno']."','".$_POST['address']."','".$_POST['gname']."','".$_POST['gno']."','".$_POST['gad']."')";	
  
 if (mysqli_query($conn, $sql1) and mysqli_query($conn, $sql2)) 
    echo "New record added successfully";
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
  
  }
}
?>