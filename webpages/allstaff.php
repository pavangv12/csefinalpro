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
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
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
                        
                        <h4>List of teaching staff:</h4>
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

$sql = "SELECT * FROM lecture_profile";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
        if($count == 0) {
            echo "No results";
        }else {
         

// echo "<h3 align=center>Showing list of students under $scode subject</h3>" ;
		echo "<table border=1 align=center>";
		echo "<tr><td><b>STAFF ID<b></td><td><b>NAME OF THE STAFF<b></td><td><b>DESIGNATION<b></td><td><b>QUALIFICATION<b></td><td><b>EXPERIENCE<b></td></tr>";
       
	   while($row = mysqli_fetch_assoc($result)) {
	   $i = $row['lect_id'];
	   echo "<tr><td>".$row['lect_id']."</td><td><a href='view_pdf1.php?st=".$row['lect_id']."'>".$row['lect_name']."</a></td><td>".$row['lect_designation']."</td><td>".$row['lect_degree'].",".$row['lect_master'].",".$row['lect_phd1'].",".$row['lect_phd2']."</td><td>".$row['lect_experience']."</td></tr>";
	   
	   }
	   echo "</table><br>";
	   
		}
mysqli_close($conn);
		
		?>
                        
                        	
                            
                        
                        </div>
                        
                       
                    
                    </div>
					
					<div class="row">
                    
                    	<div class="col-md-12 prod">
                        
                        <h4>List of non-teaching staff:</h4>
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

$sql = "SELECT * FROM nontech_profile";
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
        if($count == 0) {
            echo "No results";
        }else {
         

// echo "<h3 align=center>Showing list of students under $scode subject</h3>" ;
		echo "<table border=1 align=center>";
		echo "<tr><td><b>NAME OF THE STAFF<b></td><td><b>DESIGNATION<b></td><td><b>QUALIFICATION<b></td><td><b>EXPERIENCE<b></td></tr>";
       
	   while($row = mysqli_fetch_assoc($result)) {
	   
	   echo "<tr><td><a>".$row['nts_name']."</a></td><td>".$row['nts_designation']."</td><td>".$row['nts_qualification']."</td><td>".$row['nts_exp']."</td></tr>";
	   
	   }
	   echo "</table><br>";
	   
		}
mysqli_close($conn);
		
		?>
                        
                        	
                            
                        
                        </div>
                        
                       
                    
                    </div>
								<div class="row">
                                
                                    <div class="col-md-12">
                                    
                                       
										<button type="button" class="btn btn-login" onclick="location.href = 'admin.html'">Back</button>
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
    <span class="pull-left footer-adj">&copy; 2018 All Right Reserved To PES College Mandya</span>
    
    <span class="pull-right"><a target="_blank" href="#"><img src="pix/JD_LOGO_FB.jpg" class="img-responsive" width="25" height="23" style="margin-top:-30%;"></a></span>
    
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