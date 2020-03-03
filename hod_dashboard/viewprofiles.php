<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
include("../includes/dbh.php");
$departt=mysqli_real_escape_string($conn,$_GET['department']);
 ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">


        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">VIEW PROFILES </h4>


                        <table class="table table-bordered table-responsive">
                            <thead class="text-center">
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Faculty Name</th>
                                    <th>Email</th>
                                    <th>Department</th>
                                    <th>Date of Joining </th>
                                    <th>Eligibility for CAS </th>
                                    <th>Self Appraisal Forms </th>
                                    <th colspan="3">CAS Forms </th>
                                    <th>Faculty Summary </th>
                                </tr>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <?php 
									$previousyear=date("Y");
                                     $month=date("m");
									if($month<8){
                        for($x=3;$x>0;$x--){
                            ?>
                            <th scope="col" rowspan="2" style="background-color: white"><?php echo ($previousyear-$x).'-'.($previousyear-($x-1)); ?></th>
									<?php } }
                        else{
														$previousyear=$previousyear+1;
for($x=3;$x>0;$x--){
                            ?>
							
							
				<th scope="col" rowspan="2" style="background-color: white"><?php echo ($previousyear-$x).'-'.($previousyear-($x-1)); ?></th>

                        <?php }
						}
                        ?>
						<th></th>
                                </tr>
                            </thead>
                            <tbody class="text-center">


                                    <?php
									
									$uid=$_SESSION['id'];
                                    $sql="SELECT  id,faculty_name, email, date_of_joining, department FROM faculty_table where department='$departt';";
                            $result=mysqli_query($conn,$sql);
                            $count=0;
                            while($row=mysqli_fetch_array($result))
                                //$name= $row['faculty_name'];
                            //$depart=$row['department'];
                            
                            //$email=$row['email'];
                            //echo $row['email'];
                            //$date_of_joining=$row['date_of_joining'];
                                
                            {
								$count=$count+1;
								?>
							                                <tr>
                                    <td> <?php echo $count; ?></td>
                                    <td><?php echo $row['faculty_name']; ?> </td>
                                    <td><?php echo $row['email'] ;?></td>
                                    <td><?php echo $row['department']; ?> </td>
                                    <td><?php echo $row['date_of_joining']; ?></td>
                                    <td>
									<?php 
									$d=$row['date_of_joining'];
									$year_of_service=date("Y",strtotime($d));
									if(($previousyear-$year_of_service)>5)
									{?>
								                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i>
									<?php }
									else
									{
										?>
                                        <i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
									<?php } ?>
                                    </td>
                                    <td><a href="selfapprasial.php?id=<?php echo $row['id'];?>"> <button class="btn btn-gradient-success ">View</button></a> </td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i></td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i> </td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i> </td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i> </td>
										  </tr>
                                        <?php 
                                        } ?>
                              



                            </tbody>
                        </table>

                    </div><!-- card Body ends -->
                </div><!-- card ends -->
            </div><!-- col ends -->
        </div><!-- main row ends -->
    </div><!-- content-wrapper ends -->

    <?php 
include("../includes/footer.php");
?>