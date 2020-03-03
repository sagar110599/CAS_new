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
                                    <th>2016-2017 </th>
                                    <th>2017-2018 </th>
                                    <th>2018-2019 </th>
                                    <th> </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">

                                <tr>
                                    <td> 1.</td>
                                    <td>Prof. Babaso Aldar </td>
                                    <td>babasoaldar@somaiya.edu </td>
                                    <td>Computer </td>
                                    <td>2018-05-12 </td>
                                    <td>
                                        <i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i>
                                    </td>
                                    <td><button class="btn btn-gradient-success ">View</button> </td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i></td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i> </td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i> </td>
                                    <td><i class="mdi mdi-close-octagon mdi-24px text-danger"></i>
                                        <i class="mdi mdi-check-decagram mdi-24px text-success"></i> </td>
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