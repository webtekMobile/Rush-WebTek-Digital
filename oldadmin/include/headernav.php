<div class="az-header">
      <div class="container">
        <div class="az-header-left">
          <a href="admindashboard.php" class="az-logo"><span></span>RUSH</a>
          <a href="#" id="azMenuShow" class="az-header-menu-icon d-lg-none"><span></span></a>
        </div><!-- az-header-left -->
        <div class="az-header-menu">
          <div class="az-header-menu-header">
            <a href="admindashboard.php" class="az-logo"><span></span>RUSH</a>
            <a href="#" class="close">&times;</a>
          </div><!-- az-header-menu-header -->
          <ul class="nav">

            <li class="nav-item" style="border-bottom: 2px solid blue;padding: 0 20px;">
              <a href="map.php" class="nav-link "> <b>MAP </b></a>
             
            </li>
            <li class="nav-item">
              <a href="merchant.php" class="nav-link "><b>MERCHANT </b></a>
              
            </li>
            <li class="nav-item">
              <a href="driverindex.php" class="nav-link "><b>DRIVERS</b></a>
              
            </li>
            <li class="nav-item">
              <a href="client.php" class="nav-link "><b>CLIENT</b></a>
              
            </li>
            
            <li class="nav-item">
              <a href="notification.php" class="nav-link"><b><sub>NOTIFICATION</sub><i style="color: white;">
              <?php
                include('../database/connect.php');
                  $q="select * from tbl_notification";
                  $qres=mysqli_query($con,$q);
                    $a=mysqli_num_rows($qres);
                  echo $a;
              ?>
            </i></b></a>
              
            </li>

           <!--  <li class="nav-item">
              <a href="allstore.php" class="nav-link"><b>STORE</b></a>
              
            </li>
             -->
           
          </ul>
        </div>
        <div class="az-header-right">
          
         
          <div class="dropdown az-header-notification">
            <a href="#" class="new"><i class="typcn typcn-bell"></i></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header mg-b-20 d-sm-none">
                <a href="#" class="az-header-arrow"><i class="typcn icon typcn-arrow-left"></i></a>
              </div>
              <h6 class="az-notification-title">Notifications</h6>
              <p class="az-notification-text">You have 2 unread notification</p>
              <div class="az-notification-list">
                <div class="media new">
                  <div class="az-img-user"><img src="img/faces/face2.jpg" alt=""></div>
                  <div class="media-body">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media new">
                  <div class="az-img-user online"><img src="img/faces/face3.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Joyce Chua</strong> just created a new blog post</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="img/faces/face4.jpg" alt=""></div> 
                  <div class="media-body">
                    <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
                <div class="media">
                  <div class="az-img-user"><img src="img/faces/face5.jpg" alt=""></div>
                  <div class="media-body">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </div><!-- az-notification-list -->
              <div class="dropdown-footer"><a href="#">View All Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- az-header-notification -->
          <div class="dropdown az-profile-menu">
            <a href="#" class="az-img-user"><img src="img/faces/face1.jpg" alt=""></a>
            <div class="dropdown-menu">
              <div class="az-dropdown-header d-sm-none">
                <a href="#" class="az-header-arrow"><i class="typcn icon typcn-arrow-left"></i></a>
              </div>
              <div class="az-header-profile">
                <div class="az-img-user">
                  <img src="../img/faces/face1.jpg" alt="">
                </div><!-- az-img-user -->
                <h6>Krishan</h6>
                <span>Pandey</span>
              </div><!-- az-header-profile -->

             <!--  <a href="#" class="dropdown-item"><i class="typcn typcn-user-outline"></i> My Profile</a>
              <a href="#" class="dropdown-item"><i class="typcn typcn-edit"></i> Edit Profile</a> -->
              <a href="allvendor.php" class="dropdown-item"><i class="typcn typcn-time"></i>All vendor</a>
              <a href="addvendor.php" class="dropdown-item"><i class="typcn typcn-cog-outline"></i> Add vendor  </a>
              <a href="../database/admin_logout.php" class="dropdown-item"><i class="typcn typcn-power-outline"></i> Logout Out</a>
            </div><!-- dropdown-menu -->
          </div>
        </div><!-- az-header-right -->
      </div><!-- container -->
    </div><!-- az-header -->