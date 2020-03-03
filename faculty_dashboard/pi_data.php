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
                        <h4 class="card-title text-center">P.I. Data Input Portal </h4>
                        <p class="card-description text-center"> Choose a faculty in your department and fill their PI
                            values
                        </p>
                        <form class="forms-sample mt-4" action="">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">Select Faculty</label>
                                <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>
                            <p class="text-dark"> 2017-2018 </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Part A Total PI (maximum marks : 50)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Part A Total PI (maximum marks : 50)">
                                    </div>
                                </div>

                            </div>

                            <p class="card-description"> Part B</p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category I Total PI (Maximum marks :
                                            100)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Category I Total PI (Maximum marks : 100)">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category II Total PI (Maximum marks :
                                            100)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Confirm PasswordCategory II Total PI (Maximum marks : 100)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category III Total PI (Maximum marks :
                                            175)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Category III Total PI (Maximum marks : 175)">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category IV Total PI (Maximum marks :
                                            75)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Confirm PasswordCategory IV Total PI (Maximum marks : 75)">
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <p class="text-dark"> 2016-2017 </p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Part A Total PI (maximum marks : 50)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Part A Total PI (maximum marks : 50)">
                                    </div>
                                </div>

                            </div>

                            <p class="card-description"> Part B</p>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category I Total PI (Maximum marks :
                                            100)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Category I Total PI (Maximum marks : 100)">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category II Total PI (Maximum marks :
                                            100)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Confirm PasswordCategory II Total PI (Maximum marks : 100)">
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category III Total PI (Maximum marks :
                                            175)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Category III Total PI (Maximum marks : 175)">
                                    </div>
                                </div>
                                <div class=" col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputUsername1">Category IV Total PI (Maximum marks :
                                            75)</label>
                                        <input type="number" class="form-control" id="exampleInputUsername1"
                                            placeholder="Confirm PasswordCategory IV Total PI (Maximum marks : 75)">
                                    </div>
                                </div>
                            </div>
                            <div class="row align-items-center">

                                <div class=" col-md-6">

                                    <button type="submit" class=" btn btn-gradient-success btn-sm mr-2">Save</button>
                                </div>
                            </div>
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