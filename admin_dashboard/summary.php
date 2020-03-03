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
                        <div class="row">
                            <div class="col-sm-6">
                                <h4 class="card-title">Summary of PI Scores of Committee</h4>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect1">
                                        <option default>Choose Year</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <table class="table table-hover table-responsive">
                            <thead class="text-center">
                                <tr>
                                    <th>Category</th>
                                    <th>Max. Marks for PI</th>
                                    <th>Criteria</th>
                                    <th>A (Last to Last Academic Year <br>2016-2017)</th>
                                    <th>B (Last Academic Year <br>2017-2018)</th>
                                    <th>C (Current Academic Year <br>2018-2019)</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Part A</td>
                                    <td>50</td>
                                    <td>General</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>42</td>
                                </tr>

                                <tr>
                                    <td>Part B : I</td>
                                    <td>100</td>
                                    <td>Teaching and Learning</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>Part B : II</td>
                                    <td>100</td>
                                    <td>Co-Curricular and administrative <br>activities in college</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>Part B : III</td>
                                    <td>175</td>
                                    <td>Publications, supervisor, guide, <br>research, consultancy, <br>intellectual
                                        properties</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td>Part B : IV</td>
                                    <td>75</td>
                                    <td>Co-Curricular and administrative <br>activities outside college</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td colspan="3">PI total out of 500</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>0</td>
                                </tr>

                                <tr>
                                    <td colspan="6">Average PI = (A + B + C) / 3 = 14.00</td>
                                </tr>

                                <tr>
                                    <td colspan="6">Average PI % = ((Average PI)/500)*100 = 2.80</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- card Body ends -->
                </div><!-- card ends -->
            </div><!-- col ends -->
        </div><!-- main row ends -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <table class="table table-hover table-responsive d-table mt-4">
                            <thead class="text-center">
                                <tr>
                                    <th>Grade </th>
                                    <th>% Average PI score </th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Satisfactory</td>
                                    <td>50-100</td>
                                </tr>
                                <tr>
                                    <td>Not Satisfactory</td>
                                    <td>0-49</td>
                                </tr>
                            </tbody>
                        </table>
                    </div><!-- card Body ends -->
                </div><!-- card ends -->
            </div><!-- col ends -->
        </div><!-- main row ends -->
        <div class="row mt-5">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="mt-4">List of Enclosures: (Please attach copies of certificates, sanction orders,
                            papers etc. wherever necessary)</p>
                        <table class="table table-hover table-responsive d-table">
                            <thead class="text-center">
                                <tr>
                                    <th>Sr. No. </th>
                                    <th>Description </th>
                                    <th>Attached File</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>1</td>
                                    <td>2019-2018</td>
                                    <td>~</td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>2018-2017 </td>
                                    <td>~</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>2017-2016 </td>
                                    <td>~</td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Part A</td>
                                    <td>~</td>
                                </tr>
                            </tbody>
                        </table>
                        <p class="mt-4 mb-4 text-center">LNB: The proforma duly filled along with all enclosures,
                            submitted will be verified by the authorities.</p>
                        <p class="text-center"> <button type="button" class="btn btn-danger mb-2">Print</button></p>

                    </div><!-- card Body ends -->
                </div><!-- card ends -->
            </div><!-- col ends -->
        </div><!-- main row ends -->



    </div><!-- content-wrapper ends -->

    <?php 
include("../includes/footer.php");
?>