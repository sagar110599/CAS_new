<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
 ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">EDIT ACCESS PANEL
                        </h4>
                        <p class="text-center">
                            List of faculties that have applied for Edit Access
                        </p>
                        <p class="text-center">
                            No faculties have applied for edit access
                        </p>
                        <table class="table table-bordered d-table table-responsive">
                            <thead class="text-center">
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Faculty Name</th>
                                    <th>Form</th>
                                    <th>Grant Access</th>
                                </tr>

                            </thead>
                            <tbody class="text-center">

                                <?php

				$sql="SELECT facultyId, form, year FROM request_edit_access ORDER BY id DESC";
				$result=mysqli_query($conn, $sql);
				if(mysqli_num_rows($result)==0)
				{
					?>
					<p>No faculties have applied for edit access</p>
					<?php
				}
				else
				{
					$counter=0;
					while($row=mysqli_fetch_assoc($result))
					{
						$facultyId=$row['facultyId'];
						$form=$row['form'];
						$year=$row['year'];

						$counter+=1;

						$sqln="SELECT faculty_name FROM faculty_table WHERE id='$facultyId'";
						$resultn=mysqli_query($conn,$sqln);
						$rown=mysqli_fetch_assoc($resultn);
						$faculty_name=$rown['faculty_name'];
						?>
						<tr id="ga<?php echo $counter; ?>">
							<td><?php echo $counter; ?></td>
							<td><?php echo $faculty_name; ?></td>
							<td>Form <?php echo $form; ?> ~ <?php echo ($year-1).'-'.$year; ?></td>
							<td>
								<form class="grant-access-form" action="grant_access_sys.php" method="POST">	
									<input type="hidden" name="counter" value="<?php echo $counter; ?>">						      		
		  							<input type="hidden" name="facultyId" value="<?php echo $facultyId; ?>">
		  							<input type="hidden" name="year" value="<?php echo $year; ?>">
		  							<input type="hidden" name="form" value="<?php echo $form; ?>">
		  							<button type="submit" name="submit" class="btn btn-primary" id="ga<?php echo $id; ?>">Grant Access</button>			  							
						      	</form>
							</td>
						</tr>
						<?php
					}
				}

				?>



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