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

// $id = $_REQUEST['lect_id'];
// $_SESSION['usn'] = $id;



	$sql = "SELECT * FROM lecture_profile WHERE lect_id = '".$_SESSION['usn']."'";
	$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
        if($count == 0) {
            echo "No results";
        }else {
			while($row = mysqli_fetch_assoc($result)) {
			echo "<center><form action='updated.php' method='post'>
			<label>Lecturer Name:</label>
			<input type='text' name='lname' value='".$row["lect_name"]."'>
			<br><br>
			<label>Lecturer dept:</label>
			<input type='text' name='ldpt' value='".$row['lect_dept']."'>
			<br><br>
			<label>Lecturer Phone:</label>
			<input type='text' name='lphone' value='".$row['lect_phone']."'>
			<br><br>
			<label>Lecturer Age:</label>
			<input type='text' name='lage' value='".$row['lect_age']."'>
			<br><br>
			<label>Lecturer Aadhar:</label>
			<input type='text' name='laad' value='".$row['lect_adhar']."'>
			<br><br>
			<label>Lecturer DOB:</label>
			<input type='date' name='ldob' value='".$row['lect_dob']."'>
			<br><br>
			<label>Lecturer Degree:</label>
			<input type='text' name='ldeg' value='".$row['lect_degree']."'>
			<br><br>
			<label>Lecturer Masters:</label>
			<input type='text' name='lmas' value='".$row['lect_master']."'>
			<br><br>
			<label>PHD 1:</label>
			<input type='text' name='lp1' value='".$row['lect_phd1']."'>
			<br><br>
			<label>PHD 2:</label>
			<input type='text' name='lp2' value='".$row['lect_phd2']."'>
			<br><br>
			<label>PHD 3:</label>
			<input type='text' name='lp3' value='".$row['lect_phd3']."'>
			<br><br>
			<label>DOJ:</label>
			<input type='date' name='ldoj' value='".$row['lect_dateofjoin']."'>
			<br><br>
			<label>Lecturer designation:</label>
			<input type='text' name='ldes' value='".$row['lect_designation']."'>
			<br><br>
			<label>Lecturer email:</label>
			<input type='email' name='lemail' value='".$row['lect_email']."'>
			<br><br>
			<label>Lecturer Experience:</label>
			<input type='text' name='lex' value='".$row['lect_experience']."'>
			<br><br>
			<label>Area of Interest:</label>
			<input type='text' name='laoi' value='".$row['lect_areaof_intrest']."'>
			<br><br>
			<input type='submit' value='Update'>
			</form></center>";
			}
			      
		}
mysqli_close($conn);
?>
                <div class="row">
                                
                                    <div class="col-md-6">
                                    
                                        
										
										<button type="button" class="btn btn-login" onclick="location.href = 'lecture_profile.php'">Back</button>		
										<button type="button" class="btn btn-login" onclick="location.href = 'logout.php'">Logout</button>
                                        </form>
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