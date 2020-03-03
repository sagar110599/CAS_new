<?php 	

include("../includes/header.php");
include("../includes/topbar.php");
include("../includes/leftnavbar1.php");
$userId=mysqli_real_escape_string($conn,$_SESSION['id']);
$sqlx="SELECT profilePicLocation, hod, committee, department FROM faculty_table WHERE id='$userId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];
$department=$rowx['department'];
 ?>
 <div class="container" style="margin-top: 8px">
    <div class="row">    		
    <div class="col offset-md-2 parta" id="part-a-container">
    	<br><h2 class="text-center">PRINT ALL SELF APPRAISALS' DATA</h2>
    	<hr>
    	<a href="print-sa-data.php?year=2019&department=<?php echo $department; ?>" class="btn btn-info">PRINT FOR YEAR 2019</a>
        <a href="download-fac-attachments.php?year=2019&department=<?php echo $department; ?>" class="btn btn-primary">DOWNLOAD FACULTY ATTACHMENTS</a>
    	<br><br>
    </div>
	</div>
	</div>
