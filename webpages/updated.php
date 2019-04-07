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
$id = $_SESSION['id'];
if(preg_match("/^c/",$id))
{
$sql = "UPDATE lecture_profile SET lect_name = '".$_POST['lname']."',lect_dept ='".$_POST['ldpt']."',lect_phone = '".$_POST['lphone']."',lect_age ='".$_POST['lage']."',lect_adhar='".$_POST['laad']."',lect_dob='".$_POST['ldob']."',lect_degree='".$_POST['ldeg']."',lect_master='".$_POST['lmas']."',lect_phd1='".$_POST['lp1']."',lect_phd2='".$_POST['lp2']."',lect_phd3='".$_POST['lp3']."',lect_dateofjoin='".$_POST['ldoj']."',lect_email='".$_POST['lemail']."',lect_experience='".$_POST['lex']."',lect_areaof_intrest='".$_POST['laoi']."' WHERE lect_id ='$id'";

if (mysqli_query($conn, $sql))
	echo "Updated successfully";
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}
else if(preg_match("/^4/",$id))
{
	$sql = "UPDATE student_profile SET student_name = '".$_POST['sname']."',student_dept ='".$_POST['sdpt']."',sem = '".$_POST['ssem']."',sec = '".$_POST['ssec']."',student_phone = '".$_POST['sphone']."',student_adhar ='".$_POST['saad']."',student_blood='".$_POST['sbg']."',student_dob='".$_POST['sdob']."',student_father='".$_POST['fname']."',student_father_phone='".$_POST['fo']."',student_mother='".$_POST['mname']."',student_mother_phone='".$_POST['mo']."',student_addmission='".$_POST['sdoj']."',student_address='".$_POST['saad']."',student_email='".$_POST['semail']."',student_guardian='".$_POST['gname']."',student_guardian_phone='".$_POST['go']."',student_guardian_address='".$_POST['gadd']."' WHERE usn ='$id'";
	if (mysqli_query($conn, $sql))
	echo "Updated successfully";
 else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
}

	
mysqli_close($conn);
  
?>							
							<html>
							<body>
								<div class="row">
                                
                                    <div class="col-md-6">
                                    
                                        
										<button type="button" class="btn btn-login" onclick="location.href = 'admin.html'">Back</button>
                                        
                                    </div> 
                                    
                                 </div>
							</body>
							</html>