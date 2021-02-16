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
                      <a href="driverindex.php" class="btn btn-success">Driver List</a>
                      <a href="addnewdriver.php" class="btn btn-success">Add New Driver</a>
                      <hr>
                      </div>
                    </div>
                  </div>
                  <div class="row overflow-auto">
                    <div class="col-sm-12">
                    <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                  <th>Order_Number</th>
                                    <th>From</th>
                                 
                                    <th>To</th>
                                   <th>Driver_Rating</th>
                                    <th>Review</th>
                                   
                                </tr>
                            </thead>
                          <tbody>
                                     <?php 
                                        $query="select * from tbl_vendor";
                                        $result=mysqli_query($con,$query);
                                        while ($row=mysqli_fetch_assoc($result)) 
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['vendor_id'];?></td>
                                            <td><?php echo $row['vendor_fname'];?></td>
                                            <td><?php echo $row['vendor_lname'];?></td>
                                           
                                            <td><i class="typcn icon typcn-star text-danger"></i>
                                            <i class="typcn icon typcn-star text-danger"></i>
                                          <i class="typcn icon typcn-star text-danger"></i>
                                        <i class="typcn icon typcn-star text-danger"></i>
                                      <i class="typcn icon typcn-star text-danger"></i>
                                    </td>
                                            <td>The place is so clean, we loved the food and felt like its fresh,
                                             itʼs an amazing experience not to be missed</td>

                                        </tr>
                                      


                                       <?php
                                        }

                                        ?>
           
            
        </tbody>
       
    </table>
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
