<?php
  
  $institution_data = $_SESSION['data'];

  foreach ($institution_data as $value) {
    # code...
  }

?>

    <div class="sidebar" data-color="brown" data-active-color="danger">
      <!--
        Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
    -->
      <div class="logo">
        
        <a href="#" class="simple-text logo-normal" style="font-family: cursive; font-size: 25px;">
          CERT VERIFY
          <!-- <div class="logo-image-big">
            <img src="../assets/img/logo-big.png">
          </div> -->
        </a>
      </div>
      <div class="sidebar-wrapper">
        <div class="user">
          <div class="">
          <?php
                                
           print_r("  <img src='institution_logo/".$_SESSION['data'][10]."' class='img-responsive' title='' width='204'/> ");
                                
        ?>
        
          </div>
          <div class="info">
            <!-- <a data-toggle="collapse" href="#collapseExample" class="collapsed" style="font-size: 30px;">
              <span style="padding-left: 10px;">
               
              
                <b class="caret"></b>
              </span>
            </a> -->
            <div class="clearfix"></div>
            <div class="collapse" id="collapseExample">
              <ul class="nav">
                <li>

                  <a href="institution_profile.php">
                    <span class="sidebar-mini-icon">MP</span>
                    <span class="sidebar-normal">My Profile</span>

                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">EP</span>
                    <span class="sidebar-normal">Edit Profile</span>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <span class="sidebar-mini-icon">S</span>
                    <span class="sidebar-normal">Settings</span>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <ul class="nav">
          <li class="active">
            <a href="dashboard.php">
              <i class="fa fa-dashboard"></i>
              <p>Dashboard</p>
            </a>
          </li>
         <li>
            <a data-toggle="collapse" href="#pagesF">
              <i class="fa fa-institution"></i>
              <p>
                Faculty
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesF">
              <ul class="nav">
                <li>
                  <a href="all_faculty.php">
                    <span class="sidebar-mini-icon">AF</span>
                    <span class="sidebar-normal"> All Faculty </span>
                  </a>
                </li>
                <li>
                  <a href="add_faculty.php">
                    <span class="sidebar-mini-icon">AF</span>
                    <span class="sidebar-normal"> Add Faculty </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
            <li>
            <a data-toggle="collapse" href="#pagesD">
              <i class="fa fa-graduation-cap"></i>
              <p>
                Department
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesD">
              <ul class="nav">
                <li>
                  <a href="all_department.php">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> All Department </span>
                  </a>
                </li>
                <li>
                  <a href="add_department.php">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Add Department </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
           <li>
            <a href="verification_method.php">
              <i class="fa fa-key"></i>
              <p>Verification Method</p>
            </a>
          </li>
            <li>
            <a href="student_info.php">
              <i class="fa fa-user-plus"></i>
              <p>Add Student Certificate</p>
            </a>
          </li>
            <<!-- li>
            <a data-toggle="collapse" href="#pagesA">
              <i class="fa fa-user"></i>
              <p>
                Admin
                <b class="caret"></b>
              </p>
            </a>
            <div class="collapse " id="pagesA">
              <ul class="nav">
                <li>
                  <a href="all_institutions.php">
                    <span class="sidebar-mini-icon">T</span>
                    <span class="sidebar-normal"> All Department </span>
                  </a>
                </li>
                <li>
                  <a href="add_institution.php">
                    <span class="sidebar-mini-icon">L</span>
                    <span class="sidebar-normal"> Add Department </span>
                  </a>
                </li>
              </ul>
            </div>
          </li>
 -->        </ul>
      </div>
    </div>

