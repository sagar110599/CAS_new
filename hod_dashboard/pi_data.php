<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
include("../includes/dbh.php");
$userId=$_SESSION['id'];
$sql="SELECT email, faculty_name, date_of_joining, department, ecode, mobileno, profilePicLocation, hod, committee, principal, admin FROM faculty_table WHERE id='$userId'";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

$email=$row['email'];
$faculty_name=$row['faculty_name'];
$date_of_joining=$row['date_of_joining'];
$department=$row['department'];
$ecode=$row['ecode'];
$mobileno=$row['mobileno'];
 ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-center">P.I. Data Input Portal </h4>
                        <p class="card-description text-center"> Choose a faculty in your department and fill their PI
                            values
                        </p>
                        <form class="forms-sample mt-4" action="pidataportal_sys.php" method="POST">
                            <div class="form-group">
                                <label for="f_name">Select Faculty</label>
                                <select class="form-control form-control-sm" id="f_name" name="fname">
                                    				    	<?php

				    	$sql="SELECT id, faculty_name FROM faculty_table WHERE department='$department' AND id not in('$userId')";
				    	$result=mysqli_query($conn, $sql);
				    	while($row=mysqli_fetch_assoc($result))
				    	{
				    		$id=$row['id'];
				    		$faculty_name=$row['faculty_name'];
				    		?>
				    		<option value="<?php echo $id; ?>"><?php echo $faculty_name; ?></option>
				    		<?php
				    	}

				    	?>
				      	
                                </select>
								<br>
								 <label for="yearselect">Select Year</label>
								<select class="form-control form-control-sm" id="yearselect" name="yearselect" onselect="">
								<?php 
								$year=date("Y");
								$month=date("m");
									if($month<8){
                        for($x=1;$x<=3;$x++){
                         ?>
		<option value="<?php echo ($year-$x); ?>"><?php echo ($year-$x).'-'.($year-$x+1); ?></option>
                             <?php 
						}}
							else
							{for($x=0;$x<3;$x++){
								?>
										<option value="<?php echo ($year-$x); ?>"><?php echo ($year-$x).'-'.($year+1-$x); ?></option>
										
	<?php }} ?>
								</select>
                            </div>
							<script>
              document.getElementById("yearselect").addEventListener("change", myFunction);
			  

function myFunction() {
	
	console.log(document.getElementById('yearselect').options[document.getElementById('yearselect').selectedIndex].text);

  document.getElementById("yearselected").innerHTML = document.getElementById('yearselect').options[document.getElementById('yearselect').selectedIndex].text;
}


							
							</script>
                            <p class="text-dark" id="yearselected"> </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Part A Total PI (maximum marks : 50)</label>
                                        <input type="number" class="form-control" name="parta18" id="parta18" min="0" max="50" required>
                                           
                                    </div>
                                </div>

                            </div>

                            <p class="card-description"> Part B</p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category I Total PI (Maximum marks :
                                            100)</label>
                                        <input type="number" class="form-control" name="partbi18" id="partbi18" min="0" max="100" required>
                                            
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category II Total PI (Maximum marks :
                                            100)</label>
                                        <input type="number" class="form-control" name="partbii18" id="partbii18" min="0" max="100" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category III Total PI (Maximum marks :
                                            175)</label>
                                        <input type="number" class="form-control" name="partbiii18" id="partbiii18" min="0" max="175" required>
                                           
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category IV Total PI (Maximum marks :
                                            75)</label>
                                        <input type="number" class="form-control"  name="partbiv18" id="partbiv18" min="0" max="75" required>
                                            
                                    </div>
                                </div>
                            </div>
                            <hr>
                             <button type="submit" class=" btn btn-gradient-success btn-sm mr-2">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content-wrapper ends -->

    <?php 
include("../includes/footer.php");
?>