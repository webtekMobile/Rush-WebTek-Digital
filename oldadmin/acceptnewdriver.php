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
                      <a href="driverindex.php" class="btn btn-success"> Driver List</a>
                      <a href="addnewdriver.php" class="btn btn-success">Add New Driver</a>
                      <a href="acceptnewdriver.php" class="btn btn-success">
                      Accept Driver</a>
                     
                      <hr>
                      </div>
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-sm-12">
                     
                     <?php 
                   
                      $query="SELECT * from tbl_driver WHERE driver_status='0' ";

                         $res=mysqli_query($con,$query);
                         $a=mysqli_num_rows($res);
                         if ($a > 0)
                          {
                          
                        while ($row=mysqli_fetch_assoc($res))
                         {
                
                      ?>

                      <div class="row">
                      <div class="col-sm-3">
                        <img src="../img/faces/face1.jpg" alt="admin-image" class="rounded-circle img-fluid" style="border-radius:50%;">&nbsp;<strong><?php echo $row['driver_name'];?></strong>
                      </div>
                      <div class="col-sm-3">
                        <p style="padding: 15px">
                       <strong><?php echo $row['driver_email'];?></strong>
                    </p>
                      </div>
                      
                      <div class="col-sm-4">
                        <p style="padding: 15px">

                          <a href="../database/acceptnewdriverlist.php?id=<?php echo $row['driver_id'];?>" class="btn btn-success rounded-circle">Accept</a>
                          <a href="../database/declinenewdriverlist.php?id=<?php echo $row['driver_id'];?>" class="btn btn-danger rounded-circle">Decline</a>
                          
                      
                       </p>
                      </div>
                      <div class="col-sm-2">
                       <?php echo $row['created_at'];?>
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
