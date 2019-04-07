
<!DOCTYPE html>
<html lang="en">
  <head>
   <style>
  table {
	  
    border: 1px solid grey;
	border-collapse: collapse;
	align:center;
}
    tr, td{
		padding: 15px;
        text-align: center;
    }
	tr:hover{
		background-color: #f5f5f5;
		}
</style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>PESCE</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
	<link href="font-awesome-4.4.0/css/font-awesome.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!--PAVAN G V, PES College OF Engineering, MANDYA-->
    
<!--==================================================== Head================================================-->   
    

<div class="mygrid">
    
    	<div class="head">
        
        	<div class="grid">
            
            	<h1 style="color:#ffffff; font-size:50px; text-align:center; line-height:2em;">P.E.S.COLLEGE OF ENGINEERING, MANDYA</h1>
            
            </div>
        
        </div>
    
    </div>
	<div class="mygrid">
    
    	<div class="head">
        
        	<div class="grid">
            
            	<h1 style="color:#ffffff; font-size:30px; text-align:center; line-height:2em;">COMPUTER SCIENCE & ENGINEERING</h1>
            
            </div>
        
        </div>
    
    </div>

<!--==================================================== Head================================================-->

<!--=======================**********************Nav****************************=================================-->

		<div class="mygrid mynav">
        
        	<div class="container">
            
            <div class="grid">
            
            	<div class="menu">
        
        	<a href="#" class="bt-menu"><i class="fa fa-bars"></i>Menu</a>
        
        </div>
    
    
    	<nav>
        
        	<ul>
            
            	<li><a href="maincse.html"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="about.html"><i class="fa fa-group"></i>About Us</a></li>
				<li><a href="staff.php"><i class="fa fa-group"></i>Staff</a></li>
                <li class="submenu">
                		<a href="#"><i class="fa fa-windows"></i>Syllabus<i class="caret"></i></a>
                        <ul class="children">
						<li><a href="be.html">BE</a></li>
                        	<li><a href="#">M.Tech CS&E</a></li>
							<li><a href="#">M.Tech CE</a></li> 
                            
                        </ul>
                    </li>
                    <li><a href="libsystem/index.php"><i class="fa fa-book"></i>Library</a></li>
                <li><a href="login.html"><i class="fa fa-sign-in"></i>Login</a></li>
            </ul>

        </nav>
        </div>
            
            </div>
        
        </div>
    
<!--=======================**********************Nav****************************=================================-->

	<div class="mygrid">
    
    
    	<div class="container">
        
        	<div class="grid">
			<div class="holder">
			<div class="row">
                    
                    	<div class="col-md-12 prod">
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

$st_id=$_SESSION['usn'];


$sql = "SELECT * FROM lecture_profile WHERE lect_id= '$st_id' " ;
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
		echo "<h2>WELCOME &nbsp ".$row["lect_name"]."</h2>" ;
		echo "<table border=1 cellpadding=10 align=center>";
        echo "<tr><td><b>ID</b></td><td><i>".$row["lect_id"]."</i></td></tr>";
		echo "<tr><td><b>DEPARTMENT</b></td><td><i>".$row["lect_dept"]."</i></td></tr>";
		echo "<tr><td><b>PHONE NO</b></td><td><i>".$row["lect_phone"]."</i></td></tr>";
		echo "<tr><td><b>E-MAIL</b></td><td><i>".$row["lect_email"]."</i></td></tr>";
		echo "<tr><td><b>AADHAR</b></td><td><i>".$row["lect_adhar"]."</i></td></tr>";
		echo "<tr><td><b>DATE OF BIRTH</b></td><td><i>".$row["lect_dob"]."</i></td></tr>";
		echo "<tr><td><b>YEAR OF JOIN</b></td><td><i>".$row["lect_dateofjoin"] . " </i></td></tr>";
		echo "<tr><td><b>DESIGNATION</b></td><td><i>".$row["lect_designation"]."</i></td></tr>";
		echo "<tr><td><b>DEGREE</b></td><td><i>".$row["lect_degree"]."</i></td></tr>";
		echo "<tr><td><b>MASTERS</b></td><td><i>".$row["lect_master"]."</i></td></tr>";
		echo "<tr><td><b>PhD1</b></td><td><i>".$row["lect_phd1"]."</i> </td></tr>";
		echo "<tr><td><b>Phd2</b></td><td><i>".$row["lect_phd2"]." </i></td></tr>";
		echo "<tr><td><b>Phd3</b></td><td><i>".$row["lect_phd3"]."</i></td></tr>";
		echo "</table>";
	}
	?>
						</br><button type="button" class="btn btn-login" onclick="location.href = 'view_pdf.php'">View my information</button>
	                     
                            
                        <form action="upload_file.php" method="post" enctype="multipart/form-data"></br>

<input type="file" name="file" size="50" />

<br />

<input type="submit" class="btn btn-login" value="Upload" />

</form>
</div>
</div>	
	<div class="row">
                    
                    	<div class="col-md-12 prod">
	<?php
	
 $sql = "SELECT * FROM lecture_allocate WHERE lect_id= '$st_id' " ;
$result = mysqli_query($conn, $sql);

echo "<h2>You are handling classes for </h2>" ;
		echo "<table border=1 align=center>";
    echo "<tr><td><b>SUBJECT CODE<b></td><td><b>SUBJECT NAME<b></td><td><b>SEM<b></td><td><b>SEC<b></td><td><b>View Links<b></td><td><b>Attendance<b></td><td><b>CIE1 link<b></td><td><b>CIE2 link<b></td><td><b>SEE link<b></td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		//$s_code = $row["sub_code"];
		//$sem = $row["sem"];
		//$sec = $row["sec"];
		//echo "<tr><td><b>USN</b></td><td><i>".$row["usn"]." </i></td></tr>";
		//echo "<tr><td><b>DEPARTMENT</b></td><td><i>".$row["student_dept"]." </i></td></tr>";
		echo "<tr><td><i>".$row["sub_code"]."</i></td><td><i>".$row["sub_name"]."</i></td><td><i>".$row["sem"]."</i></td><td><i>".$row["sec"]."</i></td><td><i><a href='show_student.php?sub_code=".$row["sub_code"]."&sem=".$row["sem"]."&sec=".$row["sec"]."'>View!</a></i></td><td><a href='demo.php?sub_code=".$row["sub_code"]."&sem=".$row["sem"]."&sec=".$row["sec"]."&sname=".$row["sub_name"]."'>Insert!</a></td><td><a href='demo1.php?sub_code=".$row["sub_code"]."&sem=".$row["sem"]."&sec=".$row["sec"]."&sname=".$row["sub_name"]."'>Insert!</a></td><td><a href='demo2.php?sub_code=".$row["sub_code"]."&sem=".$row["sem"]."&sec=".$row["sec"]."&sname=".$row["sub_name"]."'>Insert!</a></td><td><a href='demo3.php?sub_code=".$row["sub_code"]."&sem=".$row["sem"]."&sec=".$row["sec"]."&sname=".$row["sub_name"]."'>Insert!</a></td></tr>";
	}
 echo "</table>";

mysqli_close($conn);
 ?>
            
            	</div>
                </div>
				</div>
                
                
                	<div class="row">
                                
							<div class="col-md-6">
										<button type="button" class="btn btn-login" onclick="location.href = 'update_staff.php'">Update Staff </button>
                                        <button type="button" class="btn btn-login" onclick="location.href = 'logout.php'">Logout</button>
                                        </form>
                            </div> 
                                    
                    </div>
				</div>
            
            </div>
        
        </div>
    
    










<!--==============================******************Footer****************=======================================-->

	<div class="footer">
    
    <div class="copy">
    <span class="pull-left footer-adj">&copy; 2018 All Right Reserved To PES College Mandya </span>
    
    <span class="pull-right"><a target="_blank" href=""><img src="pix/JD_LOGO_FB.jpg" class="img-responsive" width="25" height="23" style="margin-top:-30%;"></a></span>
    
    <span class="pull-right"><a target="_blank" href="#"><img src="Pix/fb.png" class="img-responsive" width="25" height="25" style="margin-top:-30%; padding-right:10%;"></a></span>
        <span class="pull-right"><a target="_blank" href="#"><img src="Pix/tw.png" class="img-responsive" width="25" height="25" style="margin-top:-30%; padding-right:10%;"></a></span>
        <span class="pull-right"><a target="_blank" href="#"><img src="Pix/gp.png" class="img-responsive" width="25" height="25" style="margin-top:-30%; padding-right:10%;"></a></span>
    
     </div>
    
    </div>

<!--==============================******************Footer****************=======================================-->



   
    
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/menu.js"></script>
    <script>

		$('.submenu').click(function() {
		
			$(this).children('.children').slideToggle();
		
		});

	</script>
  </body>
</html>
</center>
</html>