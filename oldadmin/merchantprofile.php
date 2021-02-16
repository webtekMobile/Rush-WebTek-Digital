<?php

$vid=$_REQUEST['id'];
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


                      <a href="addmerchantmenu.php?id=<?php echo $vid;?>" class="btn btn-success">All PRODUCT MENU</a>
                      <a href="merchantorder.php?id=<?php echo $vid;?>" class="btn btn-success">ORDERS</a>
                      <a href="viewmerchantpayment.php?id=<?php echo $vid;?>" class="btn btn-success">PAYMENTS</a>
                      
                      <hr>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                        <div class="row">
                             <?php 
                             
                              $query="SELECT tbl_shop.*,tbl_shop_time.* FROM  tbl_shop JOIN tbl_shop_time ON 
                              tbl_shop.vendor_id = tbl_shop_time.vendor_id WHERE tbl_shop.vendor_id =$vid and tbl_shop.status='1' ";
                                     
                              $res=mysqli_query($con,$query);
                              $row=mysqli_fetch_assoc($res);
                              if ($row) 
                              {
                                
                      ?>
                                
                             <div class="col-sm-3 ">
                                <img style="border: 1px solid black" src="../admin/vendorlist/<?php echo $row['shop_banner'];?>" class="img img-fluid">
                              </div>

                              <div class="col-sm-9 text-center ">
                                <P ><strong><?php echo $row['shop_name'];?></strong></P>
                                  <P class="text-danger"><strong><?php echo $row['shop_name'];?></strong></P>
                                  
                                    
                                </div>

                                
                                <div class="col-sm-12 text-center ">
                                  <hr>
                                   <P class="paddingclass">
                                    <strong class="float-left">
                                      <i class="typcn icon typcn-map text-danger"></i>&nbsp;&nbsp;
                                      <?php echo $row['shop_address'];?>
                                    </strong>
                                    <a href="openmerchantonmap.php?id=<?php echo $vid;?>"><strong class="ml-5 text-danger">
                                                     View it on Google Maps
                                                </strong></a>
                                  </P>
                              <hr>
                                </div>


                                 <div class="col-sm-6 text-center border-right">
                                  <P><i class="typcn icon typcn-time"></i>&nbsp;&nbsp;<strong>Monday <?php echo $row['monday_opening'];?> - <?php echo $row['monday_closing'];?> ( Open Now ) </strong></P>
                                  <P><strong>Tuesday <?php echo $row['tuesday_opening'];?> - <?php echo $row['tuesday_closing'];?> ( Open Now ) </strong></P>
                                  <P><strong>Wednesday <?php echo $row['wednesday_opening'];?> - <?php echo $row['wednesday_closing'];?> ( Open Now ) </strong></P>
                                  <P><strong>Thursday <?php echo $row['thursday_opening'];?> - <?php echo $row['thursday_closing'];?> ( Open Now ) </strong></P>
                                 </div>
                                  <div class="col-sm-6 text-center">
                                    <P><strong>Friday <?php echo $row['friday_opening'];?> - <?php echo $row['friday_closing'];?> ( Open Now ) </strong></P>
                                  <P><strong>Saturday <?php echo $row['saturday_opening'];?> - <?php echo $row['saturday_closing'];?> ( Open Now ) </strong></P>
                                  <P><strong>Sunday <?php echo $row['sunday_opening'];?> - <?php echo $row['sunday_closing'];?> ( Open Now ) </strong></P>
                                  </div>

                                   <?php
                                    }
                                    else

                                    {

                                      echo "NO RECORD FOUND";
                                    }


                                  ?>
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
 
  </body>


</html>
