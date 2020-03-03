<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
include('../includes/dbh.php');
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
            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">My account</h3>
                            </div>
                            

                        </div>

                        <form class="forms-sample mt-4" action="usersettings-sys.php" method="POST">
                            <p class="card-description"> General Settings </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text"
                                        name="faculty_name" class="form-control" id="exampleInputUsername1"
                                            placeholder="Name" value="<?php echo $faculty_name; ?>">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Email</label>
                                        <input type="email
                                        " name="email" class="form-control" id="exampleInputUsername1"
                                            placeholder="Email Address" value="<?php echo $email; ?>">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Contact</label>
                                        <input type="text"
                                        name="mobileno" class="form-control" id="exampleInputUsername1"
                                            placeholder="Contact" value="<?php echo $mobileno ;?>">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Department</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Department" value="<?php echo $department; ?>" disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Date of Joining</label>
                                        <input type="date" class="form-control" id="exampleInputUsername1"
                                            placeholder=""
                                            value="<?php echo $date_of_joining; ?>" disabled>
                                    </div>
                                </div>
                                <div class=" col-md-6">

                                    <button type="submit" class=" btn btn-gradient-success btn-sm mr-2">Save</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-info text-center mb-4">My Pofile</h4>
                        <img src="<?php echo $_SESSION['user_image']; ?>" class="rounded-circle mx-auto d-block mb-4"
                            alt="..." width="42" height="42">
                        <p class="text-danger text-center"><?php echo $faculty_name; ?></p>
                        <p class="text-muted text-center"> <span class="text-dark">Date of Joining : </span><?php echo $date_of_joining; ?>
                        </p>
                        <p class="text-dark text-center"> <span>Email : </span><?php echo $email; ?></p>
                        <p class="text-dark text-center"> <span>Department : </span><?php echo $department; ?></p>
                        <p class="text-dark text-center"> <span>Mobile No. : </span><?php echo $mobileno; ?></p>
                        <p class="text-dark text-center"> <span>Employee Code : </span> <?php echo $ecode; ?> </p>
						<?php 
						  if($hod==1){
                          echo '<p class="text-success text-center">HOD OF '.$department.' DEPARTMENT </p><br>';}
						  if($committee==1){
							echo  '<p class="text-success text-center">MEMBER OF COMMITEE</p><br>';
						  }
						  
						  
						  if($admin==1){
						  echo  '<p class="text-success text-center">ADMIN</p><br>';}
						  ?>
                        
                        <hr>
                        <p class="text-info text-center text-capitalize"> CAS ELIGIBILITY AND APPLICATION </p>
                        <p class="text-dark text-center"> Status :
                            <i class="mdi mdi-close-octagon text-danger"> Not Eligible for CAS</i> <i
                                class="mdi mdi-check-decagram text-success"> Eligible for CAS</i>

                        </p>

                        <a href="forms.php" class="btn-link"><button class="btn btn-success btn-sm mr">Apply for
                                CAS</button></a>
                        <a href="guidelines.php" class="btn-link"><button class="btn btn-info btn-sm mr">CAS
                                Guidelines
                            </button></a>

                        <hr>
                        <p class="text-dark text-center text-capitalize"> VIEW PROFILES AND FORMS OF ALL FACULTY
                        </p>
                        <p class="text-center"><a href="viewprofiles.php" class="btn-link"><button
                                    class="btn btn-success btn-sm mb-2">View
                                    Profiles
                                    of Faculty
                                </button></a>
                            <a href="finalsummary.php" class="btn-link"><button class="btn btn-info btn-sm mb-2">View
                                    Final
                                    Summary
                                </button></a>

                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- content-wrapper ends -->



    <?php 
include("../includes/footer.php");
 ?>