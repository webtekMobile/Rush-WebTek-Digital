<?php
session_start();
include('../database/connect.php');
if($_SESSION['admin'] == '')
{
  header("location:adminlogin.php");
}
?>


<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/dashboard-one.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 15:01:47 GMT -->
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-90680653-2');
    </script>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

   
    <!-- Meta -->
    <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
    <meta name="author" content="BootstrapDash">

    <title>Rusk</title>

    <!-- vendor css -->
    <link href="lib/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/typicons.font/typicons.css" rel="stylesheet">
    <link href="lib/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">

    <!-- azia CSS -->
    <link rel="stylesheet" href="css/azia.css">

  </head>
  <body>

    <?php include('include/headernav.php');?>

    <div class="az-content az-content-profile">
      <div class="container mn-ht-100p">
        <div class="content-wrapper w-100">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                 
                  <div class="row grid-margin">
                    <div class="col-12">
                  <a href="merchant.php" class="btn btn-success">MERCHANT</a>

                      <a href="merchantprofile.php?id=<?php echo $vid;?>" class="btn btn-success">PROFILE</a>


                      <a href="addmerchantmenu.php" class="btn btn-success">All PRODUCT MENU</a>
                      <a href="merchantorder.php" class="btn btn-success">ORDERS</a>
                      <a href="viewmerchantpayment.php" class="btn btn-success">PAYMENTS</a>
                      <a href="addnewproduct.php" class="btn btn-success">ADD NEW PRODUCT</a>
                      
                      <hr>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                                        
                                       

                <div class="form-group">
                      <form action="../database/vendor_register.php" method="post" class="form-group">
                              <div class="row form-group pandeyform">

                               <div class="col-sm-6">
                               <input type="text" id="login" class="form-control" name="fname" placeholder="Enter First Name *" required="required" autocomplete="off">
                               <hr>
                             </div>
                                <div class="col-sm-6">
                                <input type="text" id="login" class="form-control" name="lname" placeholder="Enter Last Name *" required="required" autocomplete="off">
                                <hr>
                              </div>

                              <div class="col-sm-6">
                              <input type="text" id="login" class="form-control" name="mobile" placeholder="Enter Mobile Number *" required="required" autocomplete="off">
                              <hr>
                             </div>
                                <div class="col-sm-6">
                                <input type="email" id="login" class="form-control" name="Email" placeholder="Enter Email *" required="required" autocomplete="off">
                                <hr>
                              </div>
                              <div class="col-sm-12">
                               <input type="password" id="password" class="form-control" name="Password" placeholder="Enter Password *" required="required" autocomplete="off">
                               <hr>
                             </div>
                               
                                <input type="submit" class="btn btn-danger" value="ADD">

                              </div>   
                            </form>

                                       
                          </div>


                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- container -->
    </div><!-- az-content -->

   


    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/ionicons/ionicons.js"></script>
    <script src="lib/chart.js/Chart.bundle.min.js"></script>
    <script src="lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
    <script src="lib/select2/js/select2.min.js"></script>

    <script src="js/azia.js"></script>
 <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
  </body>


</html>
