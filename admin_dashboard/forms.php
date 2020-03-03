<?php 
include("../includes/header.php");
include("../includes/topbar.php");
include("leftnavbar.php");
 ?>

<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">



        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="alert alert-success" role="alert">
                        A simple success alert—check it out!
                    </div>

                    <form class="form-sample">

                        <!-- Form Tab  -->




                        <div class="template-demo">


                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-stepone" data-toggle="tab"
                                        href="#nav-step1" role="tab" aria-controls="nav-step1" aria-selected="true">Step
                                        1 : A</a>
                                    <a class="nav-item nav-link disabled" id="nav-steptwo" role="tab"
                                        aria-controls="nav-step2" aria-selected="false">Step 2 : A</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepthree" role="tab"
                                        aria-controls="nav-step3" aria-selected="false">Step 3 : A</a>
                                    <a class="nav-item nav-link disabled" id="nav-stepfour" role="tab"
                                        aria-controls="nav-step4" aria-selected="false">Step 4 : A</a>


                                </div>
                            </nav>
                            <div class="mt-4"></div>

                        </div>

                        <!-- end Form Tab  -->



                        <div class="tab-content" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-step1" role="tabpanel"
                                aria-labelledby="nav-step1-tab">
                                <!-- Step 1  -->
                                <div class="form-group">
                                    <label for="exampleFormControlSelect3">Select Year</label>
                                    <select class="form-control form-control-sm" id="exampleFormControlSelect3">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </div>

                                <p class="card-description">Part A : General Information </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Emp. Code</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Persent</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Permanent</label>
                                            <div class="col-sm-9">
                                                <textarea type="text" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Email</label>
                                            <div class="col-sm-9">
                                                <input type="email" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Mobile No.</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Highest Qualification</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Date of Birth</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                </div>



                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-success" id="step1-btn">Next</button>



                            </div> <!-- Step 1 end-->
                            <div class="tab-pane fade" id="nav-step2" role="tabpanel" aria-labelledby="nav-step2-tab">

                                <!-- Step 2-->

                                <p class="card-description"> Details of last service i.e before joining KJSCE </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name of Organization</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> Details of service in KJSCE </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Present Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">DOJ KJSCE</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Present Scale</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Present basic and grade pay</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <hr>

                                <p class="card-description"> Details of last promotion by selection </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Promotion w.e.f</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed Scale</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed basic and grade pay</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> Details of last promotion through CAS </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Designation</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Promotion w.e.f</label>
                                            <div class="col-sm-9">
                                                <input type="date" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed Scale</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Changed basic and grade pay</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step2-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step2-btn">Next</button>

                                <!-- Step 2 end-->
                            </div>
                            <div class="tab-pane fade" id="nav-step3" role="tabpanel" aria-labelledby="nav-step3-tab">
                                <!-- Step 3-->

                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group row">
                                            <label class="col-sm-5 col-form-label">Whether acquired any fresh
                                                educational qualification during said academic year?</label>
                                            <div class="col-sm-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios1" value=""
                                                            checked> Yes </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-2">
                                                <div class="form-check">
                                                    <label class="form-check-label">
                                                        <input type="radio" class="form-check-input"
                                                            name="membershipRadios" id="membershipRadios2"
                                                            value="option2"> No </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="form-check">
                                                    <label class="form-check-label"> if yes: 20 PI </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> If yes, details of qualification </p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Name of Degree</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Institute</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                                <p class="card-description"> * 20 PI for Ph.D and M.Phil.<br>
                                    * 10 PI for other UG/PG Degree/Diploma/Certificate Courses </p>
                                <h6 class="text-dark">GPI</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Self</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">H.O.D</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Committee</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>


                                </div>

                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step3-back">Back</button>
                                <button type="button" class="btn btn-gradient-success" id="step3-btn">Next</button>

                                <!-- Step 3 end-->
                            </div>
                            <div class="tab-pane fade" id="nav-step4" role="tabpanel" aria-labelledby="nav-step4-tab">
                                <!-- Step 4-->

                                <div class="row">
                                    <div class="col-md-12">

                                        <p class="card-description">Details of Course | Summer School | STTP | Online
                                            Course Attended | Completed | Organised during academic year</p>
                                        <div class="control-group after-add-more" style="margin-top:10px">

                                            <button class="btn btn-gradient-success add-more" type="button"><i
                                                    class="mdi mdi-plus"></i>Add </button>
                                        </div>





                                        <div class="copy hide">
                                            <div class="control-group input-group" style="margin-top:10px">
                                                <input type="text" id="srno1" name="srno[]" value=""
                                                    data-toggle="tooltip" title="SrNo." placeholder="Sr.no"
                                                    class="form-control">
                                                <input type="text" id="course1" name="course[]" value=""
                                                    data-toggle="tooltip" title="Name of summer School/Course"
                                                    maxlength="100" placeholder="Name of summer School/Course"
                                                    class="form-control">
                                                <input type="text" id="days1" name="days[]" value=""
                                                    data-toggle="tooltip" title="Duration(Days)"
                                                    placeholder="Duration(Days)" class="form-control">
                                                <input type="text" id="agency1" name="agency[]" value=""
                                                    data-toggle="tooltip" title="Organising Agency"
                                                    placeholder="Organising Agency" class="form-control">
                                                <input type="text" id="rolee1" name="rolee[]" value=""
                                                    data-toggle="tooltip"
                                                    title="If organised in KJSCE, mention the role played"
                                                    placeholder="If organised in KJSCE, mention the role played"
                                                    class="form-control">
                                                <input type="file" name="img[]" class="form-control" id="upload1" />
                                                <div class="input-group-btn">
                                                    <button class="btn btn-gradient-danger btn-icon remove"
                                                        type="button"><i class="mdi mdi-minus"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- row end -->

                                <hr>
                                <p class="card-description mt-4">Three GPI per day but maximum 30</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">

                                            <label class="col-sm-3 col-form-label">Self</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">H.O.D</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Committee</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr>

                                <p class="card-description mt-4">PI Part A : GPI out of 50</p>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">

                                            <label class="col-sm-3 col-form-label">Self</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">H.O.D</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group row">
                                            <label class="col-sm-3 col-form-label">Committee</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" />
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <button type="" class="btn btn-gradient-primary mr-2">Save</button>
                                <button type="button" class="btn btn-gradient-dark mr-2" id="step4-back">Back</button>
                                <a href="forms_b.php"><button type="button" class="btn btn-gradient-success"
                                        id="step4-btn">Next</button></a>

                                <!-- Step 4 end-->
                            </div>







                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
    <!-- content-wrapper ends -->


    <?php 
include("../includes/footer.php");
 ?>