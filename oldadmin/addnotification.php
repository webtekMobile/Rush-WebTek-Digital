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
                   <div class="form-group">
                       <form action="../database/adminaddnotification.php" method="post" class="form-group">
                          <div class="row form-group pandeyform">

                               <div class="col-sm-6">
                          <input type="text" id="login" class="form-control" name="notice" placeholder="Add Notification  *" required="required" autocomplete="off">
                                 <hr>
                              </div>
                                <div class="col-sm-6">
                                  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">+ SEND TO</a>



                                  <hr>

                                   <div class="collapse mg-t-5" id="collapseExample">
                                <div style="border: 2px solid red">
                                  
                               <?php
include('../database/connect.php');
$q="select * from tbl_role";
$qres=mysqli_query($con,$q);
while ($row=mysqli_fetch_assoc($qres))
 {
  $role_id=$row['role_id'];
 ?>

 
 <input type="checkbox" name="chk[]" value="<?php
 echo $role_id; ?>"/>

 
 <?php
 echo $row['role'];
 echo "<br/>";

 }



                               ?>
                                  
                                </div>
                              </div> 
                              </div>

                            <input type="submit" class="btn btn-danger" value="SEND">

                        </div>   
                     </form>

                                       
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
 
  </body>


</html>
