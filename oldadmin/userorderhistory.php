<?php

$uid=$_REQUEST['id'];
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
                      <a href="client.php" class="btn btn-success">Client</a>
                      <hr>
                      </div>
                    </div>
                  </div>
                 
                     <div class="row overflow-auto">
                    <div class="col-sm-12">
                         <?php 
                              $query="select * from tbl_orderbooking where user_id=$uid and order_status='done' ";
                              
                                  $result=mysqli_query($con,$query);
                                  $a=mysqli_num_rows($result);
                                  if ($a > 0) 
                                  {
                                   
                         ?>
                     <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                  <th>Order Number</th>
                                    <th>General Price </th>
                                 
                                    <th>Rush Commission</th>
                                    <th>Final Price</th>
                                    
                                    
                                </tr>
                            </thead>
                          <tbody>
                                     <?php 
                                       
                                        while ($row=mysqli_fetch_assoc($result)) 
                                        {
                                        ?>
                                        <tr>
                                            <td><?php echo $row['booking_id'];?></td>
                                            <td><?php echo $row['product_price'];?></td>
                                            <td><?php echo $row['product_price'];?></td>
                                            <td><?php echo $row['product_price'];?></td>
                                          
                                        </tr>
                                      


                                       <?php
                                        }

                                        ?>
           
                                  
                              </tbody>
                             
                          </table>
                          <?php
                            }
                            else
                            {
                              echo "No Record Found";
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
  <script type="text/javascript">
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
  </body>


</html>
