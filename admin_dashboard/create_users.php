<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
 ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-8">
                                <h3 class="mb-0">Create User</h3>
                            </div>
                            <div class="col-4">

                                <button type="button" class="btn btn-sm btn-primary float-right" data-toggle="modal"
                                    data-target="#uploadcsv">
                                    Upload CSV </button>
                                <!-- Modal -->
                                <div class="modal fade" id="uploadcsv" tabindex="-1" role="dialog"
                                    aria-labelledby="ploadcsv" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content bg-white">
                                            <div class=" modal-header">
                                                <h5 class="modal-title" id="ploadcsv">Upload CSV</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="form-group">

                                                    <input type="file" name="img[]" class="file-upload-default">
                                                    <div class="input-group col-xs-12">
                                                        <input type="text"
                                                            class="form-control form-control-sm file-upload-info"
                                                            disabled placeholder="Upload CSV">
                                                        <span class="input-group-append">
                                                            <button
                                                                class="file-upload-browse btn btn-gradient-primary btn-sm"
                                                                type="button">Upload</button>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary btn-sm"
                                                    data-dismiss="modal">Close</button>
                                                <button type="button" class="btn btn-primary btn-sm">Upload CSV</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <form class="forms-sample mt-4" action="createu.php" method="POST">
                            <p class="card-description"> General Information</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Name</label>
                                        <input type="text" class="form-control" name="faculty_name" 
                                            placeholder="Name">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Email</label>
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Email Address">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Contact</label>
                                        <input type="text" class="form-control" name="mobileno"
                                            placeholder="Contact">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Date of Joining</label>
                                        <input type="date" class="form-control" name="date_of_joining"
                                            placeholder="">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Employee Code </label>
                                        <input type="text" class="form-control" name="ecode"
                                            placeholder="Employee Code">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="department">Department</label>
                                        <select class="form-control" id="department" name="department">
                                            <option value="Computer">Computer</option>
                                            <option value="Extc">Extc</option>
                                            <option value="Etrx">Etrx</option>
                                            <option value="IT">IT</option>
                                            <option value="Mechanical">Mechanical</option>
                                            <option value="Science & Humanities">Science & Humanities </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">
                                <div class="col-md-12">

                                    <div class="form-group form-inline">
                                        <label class="form-check-label mt-1 mb-2 mr-sm-4">Roles</label>
                                        <div class="form-check mb-2 mr-sm-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="defaultCheckedFaculty" name="faculty" value="1">Faculty
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 mr-sm-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="defaultCheckedH.O.D" name="hod" value="1">H.O.D
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 mr-sm-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="defaultCheckedCommittee" name="committee" value="1">Committee
                                            </label>
                                        </div>
                                        <div class="form-check mb-2 mr-sm-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="defaultCheckedPrincipal" name="principal" value="1">Principal
                                            </label>
                                        </div>
										<div class="form-check mb-2 mr-sm-4">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input" id="defaultCheckedPrincipal" name="admin" value="1">Admin
                                            </label>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <button type="submit" name="createuser" class="btn btn-gradient-success btn-sm mr-2 mt-2">Create</button>
                            <button class="btn btn-info btn-sm mt-2 mr-2" type="button" data-toggle="collapse"
                                data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                Info CSV
                            </button>
                            <a href="download.php?name=read.csv" class="btn-link"><button class=" btn btn-dark btn-sm mt-2" type="button">
                                    Download
                                    Example
                                    CSV</button></a>

                            <div class="collapse" id="collapseExample">

                                <table class="table table-bordered table-responsive mt-4">
                                    <thead>
                                        <tr>
                                            <th>Faculty Name </th>
                                            <th>Email</th>
                                            <th>Password </th>
                                            <th>Emp Code </th>
                                            <th>Date of Joining </th>
                                            <th>Department</th>
                                            <th>Faculty</th>
                                            <th>Hod</th>
                                            <th>Committee</th>
                                            <th>Principal</th>
                                            <th>Admin</th>
                                            <th>Emp Code </th>
                                            <th>Mobile No.</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- main row ends -->
    </div><!-- content-wrapper ends -->

    <?php 
include("../includes/footer.php");
?>