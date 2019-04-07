<?php
session_start();
$id = $_REQUEST['st'];
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
$sq="SELECT pdf_data FROM lecture_profile where lect_id='$id'";
$result=mysqli_query($conn,$sq);
$count = mysqli_num_rows($result);
        if($count == 0) {
            echo "No results";
        }
		else
		{
			
			while($row = mysqli_fetch_assoc($result)) {
				
				$fname = $row['pdf_data'];
				$f = $fname;
				//header('Content-type: application/pdf');
//header('Content-Disposition: inline; filename="' . $fname . '"');
//header('Content-Transfer-Encoding: binary');
//header('Content-Length: ' . filesize($f));
//header('Accept-Ranges: bytes');
//@readfile($f); 
$f = "curiculum_lect/".$fname."";
			}
			if((glob ( $f , GLOB_MARK  )))
				echo "File not found";
		}
?>
<html>
<body>
<embed src="<?php echo $f; ?>" type="application/pdf" width="100%" height="100%">
</body>
</html>
