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
                        <h4 class="card-title text-center">PRINT ALL SELF APPRAISALS' DATA
                        </h4>
                        <hr>
                        <?php   $cyear=date("Y");
						$month=date("m");
						
						if($month<8){
                        for($x=1;$x<=3;$x++){
                         ?>
                        
                        <p class="text-center">
                            <a href="print-sa-data.php?year=<?php echo ($cyear-$x);?>&department=<?php echo $depart; ?>">
                                <button type="button" class="btn btn-primary mb-2">Print for Year <?php echo ($cyear-$x);?></button></a>
                            <a href="download-fac-attachments.php?year=<?php echo ($cyear-$x);?>&department=<?php echo $depart; ?>" button type="button" class="btn btn-info mb-2">Download Faculty All
                                Attachments for Year <?php echo ($cyear-$x);?> </button></a></p>
                            <?php 
						}}
							else
							{for($x=0;$x<3;$x++){
                         ?>
								
							
                        <p class="text-center">
                            <a href="print-sa-data.php?year=<?php echo ($cyear-$x);?>&department=<?php echo $depart; ?>">
                                <button type="button" class="btn btn-primary mb-2">Print for Year <?php echo ($cyear-$x);?></button></a>
                            <a href="download-fac-attachments.php?year=<?php echo ($cyear-$x);?>&department=<?php echo $depart; ?>" button type="button" class="btn btn-info mb-2">Download Faculty All
                                Attachments for Year <?php echo ($cyear-$x);?> </button></a></p>
						<?php }} ?>
							
                        
                    </div><!-- card Body ends -->
                </div><!-- card ends -->
            </div><!-- col ends -->
        </div><!-- main row ends -->
    </div><!-- content-wrapper ends -->

    <?php 
include("../includes/footer.php");
?>