﻿<?php

session_start();
require "../database/connection.php";
if (!@$_SESSION['admin_id']) 
{
   header("location:index.php");
}

$oid=$_REQUEST['id'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Welcome To | Rush</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />
    <link href="plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Morris Chart Css-->
    <link href="plugins/morrisjs/morris.css" rel="stylesheet" />
  <!-- JQuery DataTable Css -->
     <link href="plugins/jquery-datatable/skin/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-red">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="preloader">
                <div class="spinner-layer pl-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
            <p>Please wait...</p>
        </div>
    </div>
    <!-- #END# Page Loader -->
    <!-- Overlay For Sidebars -->
    <div class="overlay"></div>
    <!-- #END# Overlay For Sidebars -->
    <!-- Search Bar -->
    <div class="search-bar">
        <div class="search-icon">
            <i class="material-icons">search</i>
        </div>
        <input type="text" placeholder="START TYPING...">
        <div class="close-search">
            <i class="material-icons">close</i>
        </div>
    </div>
    <!-- #END# Search Bar -->
    <!-- Top Bar -->
     <nav class="navbar ">
        <div class="container-fluid ">
            <div class="navbar-header">
                <a href="javascript:void(0);" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false"></a>
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="../../index.html">RUSH ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse">
            
                <ul class="nav navbar-nav navbar-right">
                    <!-- Call Search -->
                    
                   <li class="nav-item">
              <a href="map.php" class="nav-link "> <b>MAP</b></a>
              <div class="az-menu-sub">
              
              </div><!-- az-menu-sub -->
            </li>
            <li class="nav-item">
              <a href="admindashboard.php" class="nav-link"><b>DASHBOARD</b></a>
              
            </li>
            <li class="nav-item">
              <a href="merchant.php" class="nav-link"><b>MERCHANT</b></a>
              
            </li>
            <li class="nav-item">
              <a href="driver.php" class="nav-link"><b>DRIVER</b></a>
              
            </li><li class="nav-item">
              <a href="client.php" class="nav-link"><b>CLIENT</b></a>
              
            </li>
           
            <li class="nav-item">
              <a href="notification.php" class="nav-link"><b>NOTIFICATION</b></a>
              
            </li>
            
                    <li><a href="javascript:void(0);" class="js-search" data-close="true"><i class="material-icons">search</i></a></li>
                    <!-- #END# Call Search -->
                    <!-- Notifications -->
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">notifications</i>
                            <span class="label-count">7</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">NOTIFICATIONS</li>
                            <li class="body">
                                <ul class="menu">
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">person_add</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>12 new members joined</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 14 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-cyan">
                                                <i class="material-icons">add_shopping_cart</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>4 sales made</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 22 mins ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-red">
                                                <i class="material-icons">delete_forever</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy Doe</b> deleted account</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-orange">
                                                <i class="material-icons">mode_edit</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>Nancy</b> changed name</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 2 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-blue-grey">
                                                <i class="material-icons">comment</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> commented your post</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 4 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-light-green">
                                                <i class="material-icons">cached</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4><b>John</b> updated status</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> 3 hours ago
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="javascript:void(0);">
                                            <div class="icon-circle bg-purple">
                                                <i class="material-icons">settings</i>
                                            </div>
                                            <div class="menu-info">
                                                <h4>Settings updated</h4>
                                                <p>
                                                    <i class="material-icons">access_time</i> Yesterday
                                                </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="footer">
                                <a href="javascript:void(0);">View All Notifications</a>
                            </li>
                        </ul>
                    </li>
                    <!-- #END# Notifications -->
                    <!-- Tasks -->
                   <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="material-icons">person_add</i>
                            
                        </a>
                        <ul class="dropdown-menu">
                            <li class="header">ACTION</li>
                            <li class="body">
                                <ul class="menu tasks">
                                    <li>
                                        <a href="../database/admin_logout.php">
                                             <i class="material-icons">person_add</i>
                                                Logout
                                                
                                            
                                           
                                        </a>
                                    </li>
                                   
                                </ul>
                            </li>
                           
                        </ul>
                    </li>
                    <!-- #END# Tasks -->
                    <li class="pull-right"><a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="material-icons">more_vert</i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- #Top Bar -->

        <div class="container-fluid" style="margin-top:100px;">
           
<div class="row clearfix" style="height:10%;"></div>
            <div class="block-header  mt-100">
                <h2>DASHBOARD</h2>
            </div>

            <!-- Widgets -->
        <div class="row ">
               <?php
                $q1="SELECT * FROM tbl_orderbooking ";
                $ab1=mysqli_query($con,$q1);
                $all=mysqli_num_rows($ab1);
                ////////////////////
               
            
               ?>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  <a href="client.php">
                    <div class="info-box bg-pink hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">playlist_add_check</i>
                        </div>
                        <div class="content">
                            <div class="text">ALL CLIENT</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $all;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
               </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                     
                        <a href="client.php">
                    <div class="info-box bg-cyan hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">help</i>
                        </div>
                        <div class="content">
                            <div class="text">CLIENT</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $all;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  
                    <div class="info-box bg-light-green hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">forum</i>
                        </div>
                        <div class="content">
                            <div class="text">NOTIFICATION MESSAGE</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $all;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                  
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                  
                    <div class="info-box bg-orange hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">person_add</i>
                        </div>
                        <div class="content">
                            <div class="text">ALL USERS</div>
                            <div class="number count-to" data-from="0" data-to="<?php echo $all;?>" data-speed="1000" data-fresh-interval="20"></div>
                        </div>
                    </div>
                
                </div>
            </div>
            <!--------------order body---->

  <section>
        <div class="container-fluid">
        <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Order Details 
                            </h2>
                            <ul class="header-dropdown m-r--5">
                                <li class="dropdown">
                                    <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                        <i class="material-icons">more_vert</i>
                                    </a>
                                    <ul class="dropdown-menu pull-right">
                                        <li><a href="javascript:void(0);">Action</a></li>
                                        <li><a href="javascript:void(0);">Another action</a></li>
                                        <li><a href="javascript:void(0);">Something else here</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                         <!------------------>
                         <div class="body">
                               <?php
                                $query="select * from tbl_orderbooking where order_id=$oid ";
                                $res=mysqli_query($con,$query);
                                $a=mysqli_num_rows($res);
                                if ($a > 0) 
                                {
                                   while ($row=mysqli_fetch_assoc($res)) 
                                   {
                                      
                                ?>
                            <div class="row clearfix jsdemo-notification-button">

                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="    border-right: 1px solid;">
                                    <h3><u>Order Details</u></h3>
                                    <br>
                                     
                                    <strong>Full Name *</strong><br>
                                    <br>
                                  <p  style="padding: 15px;background: coral">pppp</p>
                                  <br>
                                  <br>
                                  <strong>Email address *</strong><br><br>
                                 <p  style="padding: 15px;background: coral"> pppp</p>
                                  <br>
                                  <br>
                                  
                                </div>
                                  
                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                                    <h3><u>Special Instructions </u></h3>
                                    <br>
                                    <p  style="padding: 15px;background: coral">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.
                                    Ut enim ad minim veniam</p>

                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style=" border-left: 1px solid;">
                                    <h3><u>Gift Delivery</u></h3>
                                    <br>
                                     <strong>Name *</strong><br>
                                    <br>
                                  <p  style="padding: 15px;background: coral"><?php echo $row['user_name'];?></p>
                                  <br>
                                  <br>
                                   <strong> Message: *</strong><br>
                                    <br>
                                  <p  style="padding: 15px;background: coral">Lorem ipsum dolor sit amet,
                                    consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut
                                    labore et dolore magna aliqua.
                                    Ut enim ad minim veniam</p>
                                
                                </div>
                            
                               
                               
                            </div>
                            <hr>
                            <?php
                                 }
                                }
                                else
                                {
                                    echo "No Record found";
                                }
                            ?>
                         </div>
                         <!------------------>
                    </div>
                </div>
            </div>
             </div>
    </section>
            <!-------order body here--->        

        
 <!-------container end------------->
</div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Jquery CountTo Plugin Js -->
    <script src="plugins/jquery-countto/jquery.countTo.js"></script>

    <!-- Jquery DataTable Plugin Js -->
     <script src="js/pages/tables/jquery-datatable.js"></script>
    <script src="plugins/jquery-datatable/jquery.dataTables.js"></script>
    <script src="plugins/jquery-datatable/skin/bootstrap/js/dataTables.bootstrap.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/dataTables.buttons.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.flash.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/jszip.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/pdfmake.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/vfs_fonts.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.html5.min.js"></script>
    <script src="plugins/jquery-datatable/extensions/export/buttons.print.min.js"></script>
    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/index.js"></script>
   
    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>

</html>
