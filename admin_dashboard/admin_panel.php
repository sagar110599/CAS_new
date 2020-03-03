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

                        <div class="row mt-4">
                            <div class="col-md-6">
                                <h4 class="card-title"> Admin Panel</h4>
                            </div>
                            <div class="col-md-6">
                                <a href="create_users.php" class="btn-link"><button
                                        class="btn btn-success btn-sm float-right">Create
                                        User</button></a>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-6">
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label">Sort by : </label>
                                    <div class="col-sm-6">
                                        <select class="form-control form-control-sm">
                                            <option>Category1</option>
                                            <option>Category2</option>
                                            <option>Category3</option>
                                            <option>Category4</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="search-field d-none d-md-block">
                                    <form class="d-flex align-items-center h-100" action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control form-control-sm bg-transparent"
                                                placeholder="Search Faculty Name">
                                            <button type="button" class="btn btn-primary btn-icon">
                                                <i class=" mdi mdi-magnify mdi-18px"></i>
                                            </button>

                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered table-responsive">
                            <thead class="text-center">
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Faculty Name</th>
                                    <th>Email</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                    <th>Date of Joining </th>
                                    <th>Eligibility for CAS </th>
                                    <th>Faculty </th>
                                    <th>H.O.D.</th>
                                    <th>Committee</th>
                                    <th>Principal</th>
                                    <th>Admin </th>
                                    <th>Update</th>
                                    <th>Delete User</th>
                                </tr>

                            </thead>
                            <tbody class="text-center">

                                <tr>
                                    <td> 1.</td>
                                    <td>Prof. Babaso Aldar </td>
                                    <td>babasoaldar@somaiya.edu </td>
                                    <td> <input type="text" class="form-control form-control-sm bg-transparent"
                                            placeholder="Department"></td>
                                    <td> <input type="date" class="form-control form-control-sm bg-transparent"></td>
                                    <td>Eligible <i class="mdi mdi-check-decagram text-success"></i>
                                        Not Eligible <i class="mdi mdi-close-octagon text-danger"></i></td>
                                    <td>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input"
                                                    contenteditable="true">Faculty
                                            </label>
                                        </div>

                                    </td>
                                    <td>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">H.O.D
                                            </label>
                                        </div>

                                    </td>
                                    <td>
                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">Committee
                                            </label>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">Principal
                                            </label>
                                        </div>
                                    </td>
                                    <td>

                                        <div class="form-check">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">Admin
                                            </label>
                                        </div>

                                    </td>
                                    <td>
                                        <form action="">
                                            <input type="hidden" value="">
                                            <button class="btn btn-outline-success btn-sm">Update</button>
                                        </form>
                                    </td>
                                    <td>
                                        <form action="">
                                            <input type="hidden" value="">
                                            <button class="btn btn-outline-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>




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