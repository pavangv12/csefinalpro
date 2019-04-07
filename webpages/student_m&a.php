<html>
<body>      
<?php
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

$id1=$_POST['id'];
$sem=$_POST['sem'];

$sql = "SELECT * FROM student_profile WHERE usn= '$id1' " ;
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
		echo "<h3 align=center>WELCOME &nbsp ".$row["student_name"]."</h3>" ;
		echo "<table border=1 align=center>";
        echo "<tr><td><b>USN</b></td><td><i>".$row["usn"]."</i></td></tr>";
		echo "<tr><td><b>DEPARTMENT</b></td><td><i>".$row["student_dept"]."</i></td></tr>";
		echo "<tr><td><b>PHONE NO</b></td><td><i>".$row["student_phone"]."</i></td></tr>";
		echo "<tr><td><b>E-MAIL</b></td><td><i>".$row["student_email"]."</i></td></tr>";
		echo "<tr><td><b>AADHAR</b></td><td><i>".$row["student_adhar"]."</i></td></tr>";
		echo "<tr><td><b>DATE OF BIRTH</b></td><td><i>".$row["student_dob"]."</i></td></tr>";
		echo "<tr><td><b>YEAR OF ADDMISSION</b></td><td><i>".$row["student_addmission"] . " </i></td></tr>";
		echo "<tr><td><b>BLOOD GROUP</b></td><td><i>".$row["student_blood"]."</i></td></tr>";
		echo "<tr><td><b>FATHER</b></td><td><i>".$row["student_father"]."</i></td></tr>";
		echo "<tr><td><b>MOTHER</b></td><td><i>".$row["student_mother"]."</i></td></tr>";
		echo "<tr><td><b>FATHER PHONE NO.</b></td><td><i>".$row["student_father_phone"]."</i> </td></tr>";
		echo "<tr><td><b>MOTHER PHONE NO.</b></td><td><i>".$row["student_mother_phone"]." </i></td></tr>";
		echo "<tr><td><b>ADDRESS</b></td><td><i>".$row["student_address"]."</i></td></tr>";
		echo "</table>";
	}
 

$sql = "SELECT * FROM student_marks WHERE sem= '$sem' and usn= '$id1' " ;
$result = mysqli_query($conn, $sql);

echo "<h3 align=center>Showing results of Fifth semester for $id1  </h3>" ;
		echo "<table border=1 align=center>";
    echo "<tr><td><b>SUBJECT CODE<b></td><td><b>SUBJECT NAME<b></td><td><b>INTERNALS 1<b></td><td><b>ASSIGNMENT 1<b></td><td><b>INTERNALS 2<b></td><td><b>ASSIGNMENT 2<b></td><td><b>CIE<b></td><td><b>SEE<b></td><td><b>GRADES<b></td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		//echo "<tr><td><b>USN</b></td><td><i>".$row["usn"]." </i></td></tr>";
		//echo "<tr><td><b>DEPARTMENT</b></td><td><i>".$row["student_dept"]." </i></td></tr>";
		echo "<tr><td><i>".$row["sub_code"]."</i></td><td><i>".$row["sub_name"]."</i></td><td><i>".$row["cie"]."</i> </td><td><i>".$row["assignment1"]." </i></td><td><i>".$row["cie2"]." </i></td><td><i>".$row["assignment2"]." </i></td><td><i>".$row["cie"]."</i></td><td><i>".$row["see"]."</i></td><td><i>".$row["grade"]."</i></td></tr>";
		
	}
 echo "</table>";

$sql = "SELECT * FROM student_attendance WHERE sem= '$sem' and usn= '$id1' " ;
$result = mysqli_query($conn, $sql);

echo "<h3 align=center>Showing attendance of Fifth semester for $id1  </h3>" ;
		echo "<table border=1 align=center>";
    echo "<tr><td><b>SUBJECT CODE<b></td><td><b>SUBJECT NAME<b></td><td><b>ATTENDANCE<b></td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		//echo "<tr><td><b>USN</b></td><td><i>".$row["usn"]." </i></td></tr>";
		//echo "<tr><td><b>DEPARTMENT</b></td><td><i>".$row["student_dept"]." </i></td></tr>";
		echo "<tr><td><i>".$row["sub_code"]."</i></td><td><i>".$row["sub_name"]."</i></td><td><i>".$row["attendance"]."</i></td></tr>";
	}
 echo "</table>";

mysqli_close($conn);
 ?>
 

 </body>
</html>