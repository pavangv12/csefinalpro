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
				 while($row = mysqli_fetch_assoc($result))
				 {
				$flag++;
				if($row['sem'] == $sem and $row['sec'] == $sec)
				{
					$sq = "SELECT cie1,cie2,assignment1,assignment2 FROM student_marks WHERE usn='$getData[0]'";
					$res = mysqli_query($con, $sq);
					$flag1 = 0;
					while($row = mysqli_fetch_assoc($res))
					{
						$flag1++;
					 $c++;
	        $marks = $getData[1]/2;
			$gradem = ($row['cie1'] + $row['cie2'] + $row['assignment1'] + $row['assignment2'])/2;
			 $m = $marks + $gradem;
			 if($m >= 90)
				 $g = 'S';
			 else if($m >= 75 and $m <=89)
				 $g = 'A';
			 else if($m>=65 and $m<=74)
				 $g = 'B';
			 else if($m>=55 and $m<=64)
				 $g = 'C';
			 else if($m>=45 and $m<=54)
				 $g = 'D';
			 else if($m>=40 and $m<=44)
				 $g ='E';
			 else
				 $g = 'F';
			
			     
	           $sql1 = "UPDATE student_marks ". "SET see='$marks',grade='$g' ". "WHERE usn='$getData[0]' and sub_code='$sc' and sub_name='$sname' and sem='$sem' and sec='$sec'";
                    $result1 = mysqli_query($con, $sql1);
				if(!isset($result1))
				{
					//$c--;
					//header('location:some.php?Count=$c');
					echo "No recieved results";
$c =0;					
				}
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
