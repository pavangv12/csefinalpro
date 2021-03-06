
 
<!DOCTYPE html>
<html lang="en">
  <head>
  <style>
  table {
    border: 1px solid grey;
	border-collapse: collapse;
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
                		<a href="staff.html"><i class="fa fa-windows"></i>Syllabus<i class="caret"></i></a>
                        <ul class="children">
						<li><a href="be.html">BE</a></li>
                        	<li><a href="#">M.Tech CS&E</a></li>
							<li><a href="#">M.Tech CE</a></li> 
                            
                        </ul>
                    </li>
                    
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

$id=$_REQUEST['usn'];
$_SESSION['usn']=$id;

$sql = "SELECT * FROM student_profile WHERE usn= '$id' " ;
$result = mysqli_query($conn, $sql);


    while($row = mysqli_fetch_assoc($result)) {
		echo "<h2 align=center>SHOWING DETAILS OF &nbsp ".$row["student_name"]."</h2>" ;
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
 

echo "</br><a href='viewstudent.php?sem=".$_SESSION["sem"]."&sec=".$_SESSION["sec"]."'><button>Back</button></a>";
mysqli_close($conn);
 ?>
            </div>
			</div>
			</div>
            	
                <h4>Select the options for more details:</h4>
                
                	<div class="row">
                    
                    	<div class="col-md-8">
                        
                        		<div class="row ">
                                    
                                    <div class="col-md-4">
									<form action="student_marks&attendance1.php" align="center" method="post">
                                        <div class="form-group has-feedback form" >
                                            <select class="form-control" name="sem">
											<option class="form-control" value="1">First</option>
											<option class="form-control" value="2">Second</option>
											<option class="form-control" value="3">Third</option>
											<option class="form-control" value="4">Fourth</option>
											<option class="form-control" value="5">Fifth</option>
											<option class="form-control" value="6">Sixth</option>
											<option class="form-control" value="7">Seventh</option>
											<option class="form-control" value="8">Eighth</option>
											</select>
																						
                                        </div>
                                    </div>
            					</div>
                                
                                <div class="row ">
                                    
                                    <div class="col-md-4">
                                        <div class="form-group has-feedback form" >
                                            <select class="form-control" name="option">
											<option class="form-control" value="0">ATTENDENCE</option>
											<option class="form-control" value="1">RESULT</option>
											</select>
                                        </div>
                                    </div>
            					</div>
                                
                                <div class="row">
                                
                                    <div class="col-md-12">
                                    
                                        <input type="submit" class="btn btn-login" name="submit" value="FETCH" />
										<button type="button" class="btn btn-login" onclick="location.href = 'viewstudent.php'">Back</button>
										<button type="button" class="btn btn-login" onclick="location.href = 'logout.php'">Logout</button>
                                        </form>
                                    </div> 
                                    
                                 </div>
                        
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