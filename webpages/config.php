<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "computerscience";

// Create connection
$link = mysqli_connect($servername, $username, $password, $dbname);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>