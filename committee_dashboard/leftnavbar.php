  <!-- partial -->
  <?php 
  include('../includes/topbar.php'); 
  ?>
  <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
              <li class="nav-item nav-profile">
                  <a href="#" class="nav-link">
                      <div class="nav-profile-image">
                          <img src="<?php echo $_SESSION['user_image']; ?>" alt="profile">
                          <span class="login-status online"></span>
                          <!--change to offline or busy as needed-->
                      </div>
                      <div class="nav-profile-text d-flex flex-column">
                          <span class="font-weight-bold mb-2"><?php echo $faculty_name;?></span>
						  <?php 
						  if($hod==1){
                          echo '<span class="text-secondary text-small">HOD</span>';}
						  if($committee==1){
						  echo '<span class="text-secondary text-small">COMMITTEE</span>';}
						  
						  
						  if($admin==1){
						  echo '<span class="text-secondary text-small">ADMIN</span>';}
						  ?>
							  
                      </div>
                      <i class="mdi mdi-bookmark-check text-success nav-profile-badge"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index.php">
                      <span class="menu-title">Dashboard</span>
                      <i class="mdi mdi-home menu-icon"></i>
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="forms.php">
                      <span class="menu-title">Form</span>
                      <i class="mdi mdi-contacts menu-icon"></i>
                  </a>
              </li>

              <li class="nav-item">
                  <a class="nav-link" href="summary.php">
                      <span class="menu-title">My Summary</span>
                      <i class="mdi mdi-chart-bar menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="selfapprasial.php?id=<?php echo $_SESSION['id'];?>">
                      <span class="menu-title">Self Appraisals</span>
                      <i class="mdi mdi-table-large menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="guidelines.php">
                      <span class="menu-title">CAS Guidelines</span>
                      <i class="mdi mdi-table-large menu-icon"></i>
                  </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="viewprofiles.php">
                      <span class="menu-title">View Profiles of All Faculty</span>
                      <i class="mdi mdi-table-large menu-icon"></i>
                  </a>
              </li>
             
              <li class="nav-item">
                  <a class="nav-link" href="feedback.php">
                      <span class="menu-title">Feedback / Contact us </span>
                      <i class="mdi mdi-table-large menu-icon"></i>
                  </a>
              </li>


          </ul>
      </nav>