<!DOCTYPE html>
<html lang="en">
  <head>
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
            
            	<p><h1 style="color:#ffffff; font-size:50px; text-align:center; line-height:2em;">P.E.S.COLLEGE OF ENGINEERING, MANDYA</h1>
            
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

$_SESSION['id'] = $_POST['usn'];

	$sql = "SELECT * FROM student_profile WHERE usn = '".$_SESSION['id']."'";
	$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
        if($count == 0) {
            echo "No results";
        }else {
			while($row = mysqli_fetch_assoc($result)) {
				// echo "<table border=1 cellpadding=10 align=center>";
			echo "<form action='updated.php' method='post'>
			<tabel border=1>
			<tr><td>Student Name:</td><td><input type='text' name='sname' value='".$row["student_name"]."'></td></tr></br></br>
			<tr><td>Student dept:</td><td><input type='text' name='sdpt' value='".$row['student_dept']."'></td></tr></br></br>
			<tr><td>Student Phone:</td><input type='text' name='sphone' value='".$row['student_phone']."'></td></tr></br></br>
			<tr><td>Student SEM:</td><td><input type='text' name='ssem' value='".$row['sem']."'></td></tr></br></br>
			<tr><td>Student Sec:</td><td><input type='text' name='ssec' value='".$row['sec']."'></td></tr></br></br>
			<tr><td>Student Aadhar:<td></td><input type='text' name='saad' value='".$row['student_adhar']."'></td></tr></br></br>
			<tr><td>Student DOB:</td><td><input type='date' name='sdob' value='".$row['student_dob']."'></td></tr></br></br>
			<tr><td>Blood group:</td><td><input type='text' name='sbg' value='".$row['student_blood']."'></td></tr></br></br>
			<tr><td>Father's Name:</td><td><input type='text' name='fname' value='".$row['student_father']."'></td></tr></br></br>
			<tr><td>Father's Phone:</td><td><input type='text' name='fo' value='".$row['student_father_phone']."'></td></tr></br></br>
			<tr><td>Mother's Name:</td><td><input type='text' name='mname' value='".$row['student_mother']."'></td></tr></br></br>
			<tr><td>Mother's Phone:</td><td><input type='text' name='mo' value='".$row['student_mother_phone']."'></td></tr></br></br>
			<tr><td>Admission date:</td><td><input type='date' name='sdoj' value='".$row['student_addmission']."'></td></tr></br></br>
			<tr><td>Address:</td><td><input type='text' name='sadd' value='".$row['student_address']."'></td></tr></br></br>
			<tr><td>Student email:</td><td><input type='email' name='semail' value='".$row['student_email']."'></td></tr></br></br>
			<tr><td>Guardian's Name:</td><td><input type='text' name='gname' value='".$row['student_guardian']."'></td></tr></br></br>
			<tr><td>Guardian's Phone:</td><td><input type='text' name='go' value='".$row['student_guardian_phone']."'></td></tr></br></br>
			<tr><td>Guardian Address:</td><td><input type='text' name='gadd' value='".$row['student_guardian_address']."'></td></tr></br></br>
			<input type='submit' value='Update'>
			</table>
			</form>";
			

			}
			      
		}

mysqli_close($conn);
?>
                </div>
				</div>
                	 <div class="row">
                                
                                    <div class="col-md-6">
                                    
                                        
										<button type="button" class="btn btn-login" onclick="location.href = 'logout.php'">Logout</button>
										<button type="button" class="btn btn-login" onclick="location.href = 'admin.html'">Back</button>
										
                                        
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