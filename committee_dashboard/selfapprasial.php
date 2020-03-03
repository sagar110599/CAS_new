<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
$viewerId=mysqli_real_escape_string($conn,$_SESSION['id']);//the one who is viewing the form

$userId=mysqli_real_escape_string($conn,$_GET['id']);//the one whose form is being viewed

if($userId==$viewerId)
{
	$same_user=1;
}
else
{
	$same_user=0;	
}

$sqlx="SELECT profilePicLocation, hod, committee FROM faculty_table WHERE id='$viewerId'";
$resultx=mysqli_query($conn,$sqlx);
$rowx=mysqli_fetch_assoc($resultx);

$hod=$rowx['hod'];
$committee=$rowx['committee'];
$profilePicLocation=$rowx['profilePicLocation'];

 ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
	<div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <?php
					$sqlsfr="SELECT partA,partB,year FROM submitted_for_self_appraisal WHERE facultyId='$userId'";
					$resultsfr=mysqli_query($conn,$sqlsfr);
					if(mysqli_num_rows($resultsfr)==0)
					{	
						?>
						<p style="font-size: 15px">No forms submitted for Self Appraisal.</p>
						<?php
					}
					else
					{
						while($row=mysqli_fetch_array($resultsfr)){
						?>
						<p style="font-size: 20px">YEAR: <?php echo $row['year'];?>-<?php echo ($row['year']+1);?></p>
						<?php
						$flag=false;
						//$rowsfr=mysqli_fetch_assoc($resultsfr);
						if($row['partA']==1)
						{
							$flag=true;
							?>
							<a href="self-appraisal-partA.php?id=<?php echo $userId; ?>&year=<?php echo $row['year'];?>" class="btn btn-success" style="background-color: #DCEDC8;border: 1px solid #DCEDC8;color:black">
				  			Part A Self Appraisal 
							</a>
							<?php
						}
						if($row['partB']==1)
						{
							$flag=true;
							?>
							<a href="self-appraisal-partB.php?id=<?php echo $userId; ?>&year=<?php echo $row['year'];?>" class="btn btn-success" style="background-color: #DCEDC8;border: 1px solid #DCEDC8;color:black">
				  			Part B Self Appraisal 
							</a>
							<?php
						}
						 } 

						if($flag==false)
						{
							?>
							<p style="font-size: 15px">No forms submitted for Self Appraisal.</p>
							<?php
						}
						?>	
						<br>
						<?php
					}
					?>
					<hr style="border: 0.5px solid #c8c8c8">
                    </div><!-- card Body ends -->
                </div><!-- card ends -->
            </div><!-- col ends -->
    </div><!-- content-wrapper ends -->

    <?php 
include("../includes/footer.php");
?>