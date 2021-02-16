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

<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-90680653-2"></script>
   

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
                      <a href="notification.php" class="btn btn-success">
                      Notification
                    </a>
                      <a href="addnotification.php" class="btn btn-danger">
                      Add Notification</a>
                      <hr>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                     
                     <?php 
                     $vid=3;
                         $query="SELECT tbl_review.*, tbl_users.* FROM tbl_review JOIN tbl_users ON tbl_review.user_id = tbl_users.user_id WHERE tbl_review.vendor_id = '$vid' and tbl_review.status='1' and tbl_users.status='1'";

                         $res=mysqli_query($con,$query);
                         $a=mysqli_num_rows($res);
                         if ($a > 0)
                          {
                          
                        while ($row=mysqli_fetch_assoc($res))
                         {
                         



                      ?>

                      <div class="row">
                      <div class="col-sm-3">
                        <img src="../img/faces/face1.jpg" alt="admin-image" class="rounded-circle img-fluid" style="border-radius:50%;">&nbsp;<strong><?php echo $row['user_name'];?></strong>
                      </div>
                      <div class="col-sm-4">
                        <p style="padding: 15px">
                       <strong>CHICKEN CHASER SALAD : 23.000 LBP</strong>
                    </p>
                      </div>
                      
                      <div class="col-sm-4">
                        <p style="padding: 15px">

                          <button class="btn btn-success rounded-circle">Accept</button>
                          <button class="btn btn-danger rounded-circle">Decline</button>
                          
                      
                       </p>
                      </div>
                      <div class="col-sm-1">
                       2 Min Ago
                      </div>
                    </div>
                    <hr>

                  <?php
                      }
                    }
                    else
                    {
                      echo "Data Not Found";
                    }
                  ?>
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
 
  </body>


</html>
