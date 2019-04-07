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
                		<a href="#"><i class="fa fa-windows"></i>Syllabus<i class="caret"></i></a>
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
//include 'sample.php';
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

if(isset($_POST['submit'])){
$semester = $_POST['sem'];
$opt = $_POST['option'];
$id = $_SESSION['usn'];
}
if( $opt == 1)
{

$sql = "SELECT * FROM student_marks WHERE sem= '$semester' and usn= '$id' " ;
$result = mysqli_query($conn, $sql);

echo "<h3 align=center>Showing results of $semester semester for $id  </h3>" ;
		echo "<table border=1 align=center>";
    echo "<tr><td><b>SUBJECT CODE<b></td><td><b>SUBJECT NAME<b></td><td><b>INTERNALS 1<b></td><td><b>ASSIGNMENT 1<b></td><td><b>INTERNALS 2<b></td><td><b>ASSIGNMENT 2<b></td><td><b>CIE<b></td><td><b>SEE<b></td><td><b>GRADES<b></td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		//echo "<tr><td><b>USN</b></td><td><i>".$row["usn"]." </i></td></tr>";
		//echo "<tr><td><b>DEPARTMENT</b></td><td><i>".$row["student_dept"]." </i></td></tr>";
		echo "<tr><td><i>".$row["sub_code"]."</i></td><td><i>".$row["sub_name"]."</i></td><td><i>".$row["cie1"]."</i> </td><td><i>".$row["assignment1"]." </i></td><td><i>".$row["cie2"]." </i></td><td><i>".$row["assignment2"]." </i></td><td><i>".$row["cie"]."</i></td><td><i>".$row["see"]."</i></td><td><i>".$row["grade"]."</i></td></tr>";
		
	}
 echo "</table>";
}
else 
{
$sql = "SELECT * FROM student_attendance WHERE sem= '$semester' and usn= '$id' " ;
$result = mysqli_query($conn, $sql);

echo "<h3 align=center>Showing attendance of $semester semester for $id  </h3>" ;
		echo "<table border=1 align=center>";
    echo "<tr><td><b>SUBJECT CODE<b></td><td><b>SUBJECT NAME<b></td><td><b>ATTENDANCE<b></td></tr>";
	while($row = mysqli_fetch_assoc($result)) {
		//echo "<tr><td><b>USN</b></td><td><i>".$row["usn"]." </i></td></tr>";
		//echo "<tr><td><b>DEPARTMENT</b></td><td><i>".$row["student_dept"]." </i></td></tr>";
		echo "<tr><td><i>".$row["sub_code"]."</i></td><td><i>".$row["sub_name"]."</i></td><td><i>".$row["attendance"]."</i></td></tr>";
		
	}
 echo "</table>";
	
}


mysqli_close($conn);
?>
            
            	</div>
				</div><br /><br />
                
                <h4></h4>
                
                	
                        
                        	
                                
                                
                                
                                <div class="row">
                                
                                    <div class="col-md-6">
                                    
                                        
										<button type="button" class="btn btn-login" onclick="location.href = 'logout.php'">Logout</button>
										<button type="button" class="btn btn-login" onclick="location.href = 'student_profile.php'">Back</button>
                                        
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