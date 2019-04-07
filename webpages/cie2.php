<?php
session_start();
$u = $_SESSION['usn'];
$sc = $_SESSION['sc'];
$sem = $_SESSION['sem'];
$sec = $_SESSION['sec'];
$sname = $_SESSION['sname'];
//echo $sec,$sem,$sc;
$con= mysqli_connect("localhost", "root","mysql","computerscience") or die(mysql_error());
 if(isset($_POST["Import"])){
		
		$filename=$_FILES["file"]["name"];		


		 if($_FILES["file"]["size"] > 0)
		 {
		  	$file = fopen($filename, "r");
			
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			//echo $ext;
if( $ext != "csv" ) {echo 'Upload a CSV file';}
else
{

	       /* while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				$sql = "SELECT sub_code,sem,sec FROM lecture_allocate WHERE lect_id = '$u' AND sub_code='$sc' AND sem = '$sem' AND '$sec'";
			$result = mysqli_query($con, $sql);
			
			while($row = mysqli_fetch_assoc($result)){

			if($row['sub_code']!= $getData[1] || $row['sem']!= $getData[3] || $row['sec']!=getData[5])
				 {
					 echo "cannot upload";
					 //header("location: lecture_profile.php");
				 }
				 echo $row['sub_code'],$row['sem'],$row['sec'];
				 echo "<br>";
			}
			 }*/
			 $c =1;
			 
			 while (($getData = fgetcsv($file, 10000, ",")) !== FALSE)
	         {
				 
				$sql = "SELECT sem,sec FROM student_allocate WHERE usn='$getData[0]'";
				 $result = mysqli_query($con, $sql);
                  $flag=0;
				 //echo $getData[1],$getData[3],$getData[5];
				 while($row = mysqli_fetch_assoc($result)){
				$flag++;
				if($row['sem'] == $sem and $row['sec'] == $sec)
				{
					 $c++;
	        
			     
	           $sql1 = "UPDATE student_marks ". "SET cie2='$getData[1]',assignment2='$getData[2]' ". "WHERE usn='$getData[0]' and sub_code='$sc' and sub_name='$sname' and sem='$sem' and sec='$sec'";
                    $result1 = mysqli_query($con, $sql1);
				if(!isset($result1))
				{
					//$c--;
					//header('location:some.php?Count=$c');
					echo "No recieved results";
$c =0;					
				}
				
	         }
			 else
			 {
				 //$c--;
				 $_SESSION['count'] = $c;
				 header('location:some1.php');
				 exit();
			 }
			 
			 }
			 
			 if($flag==0)
			{
				$_SESSION['count'] = $c;
			    header("location:some1.php");
				exit();
			}
			 }
			 if($c>0)
				 echo "Successfull";
			 
} fclose($file);	
		 }
		 
	}	 


 ?>
