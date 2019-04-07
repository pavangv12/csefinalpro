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

$lid = $_POST['lid'];

$sql = "SELECT * from lecture_allocate where lect_id='$lid'";
if($result = mysqli_query($conn,$sql))
{
   if(mysqli_num_rows($result) > 0){
        echo "<table>";
            echo "<tr>";
                echo "<th>Lect_ID</th>";
                echo "<th>Lect_Name</th>";
                echo "<th>Sub_Name</th>";
                echo "<th>Sub_Code</th>";
                 echo "<th>Sem</th>";               
                echo "<th>Sec</th>";

       
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['lect_name'] . "</td>";
                echo "<td>" . $row['lect_id'] . "</td>";
                echo "<td>" . $row['sub_name'] . "</td>";
                echo "<td>" . $row['sub_code'] . "</td>";
                echo "<td>" . $row['sem'] . "</td>";
                echo "<td>" . $row['sec'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

  


/*

$sql = "INSERT INTO lecture_allocate VALUES ('$lname','$lid','$sname','$scode','$sem','$sec')";
if (mysqli_query($conn, $sql))
	echo "Record added successfully";
else
	{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
*/
mysqli_close($conn);
  
?>