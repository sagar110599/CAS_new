<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
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
                            <div class="col-4 text-right">
                                <button class="btn btn-sm btn-primary">Edit</button>
                            </div>

                        </div>

                        <form class="forms-sample mt-4" action="">
                            <p class="card-description"> General Settings </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Email</label>
                                        <input type="email" class="form-control" id="exampleInputUsername1"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Contact</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Contact">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Department</label>
                                        <input type="text" class="form-control" id="exampleInputUsername1"
                                            placeholder="Department">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Date of Joining</label>
                                        <input type="date" class="form-control" id="exampleInputUsername1"
                                            placeholder="">
                                    </div>
                                </div>
                                <div class=" col-md-6">

                                    <button type="submit" class=" btn btn-gradient-success btn-sm mr-2">Save</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <form class="forms-sample mt-4" action="">
                            <p class="card-description"> Change Password
                            </p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">New Password</label>
                                        <input type="password" class="form-control" id="exampleInputUsername1"
                                            placeholder="New Password">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Confirm Password</label>
                                        <input type="password" class="form-control" id="exampleInputUsername1"
                                            placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>

                            <div class="row align-items-center">

                                <div class=" col-md-6">

                                    <button type="submit" class=" btn btn-gradient-success btn-sm mr-2">Submit</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <form class="forms-sample mt-4" action="">
                            <p class="card-description"> Change Profile Picture</p>


                            <div class="row align-items-center">


                                <div class=" col-md-6">
                                    form
                                    <div class="form-group">
                                        <label>File upload</label>
                                        <input type="file" name="img[]" class="file-upload-default">
                                        <div class="input-group col-xs-12">
                                            <input type="text" class="form-control file-upload-info" disabled
                                                placeholder="Upload Image">
                                            <span class="input-group-append">
                                                <button class="file-upload-browse btn btn-gradient-primary"
                                                    type="button">Upload</button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title text-info text-center mb-4">My Pofile</h4>
                        <img src="../assets/images/faces/face1.jpg" class="rounded-circle mx-auto d-block mb-4"
                            alt="...">
                        <p class="text-danger text-center">Name Surname</p>
                        <p class="text-muted text-center"> <span class="text-dark">Date of Joining : </span>2000-02-02
                        </p>
                        <p class="text-dark text-center"> <span>Email : </span>committee@gmail.com</p>
                        <p class="text-dark text-center"> <span>Department : </span>Computer </p>
                        <p class="text-dark text-center"> <span>Mobile No. : </span>1234567890</p>
                        <p class="text-dark text-center"> <span>Employee Code : </span> 1 </p>
                        <p class="text-success text-center"> Member of CAS committee </p>
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


                    </div>
                </div>
            </div>

        </div>
    </div><!-- content-wrapper ends -->



    <?php 
include("../includes/footer.php");
 ?>