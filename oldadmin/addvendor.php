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
                      <button class="btn btn-danger">Add Vendor</button>
                      <hr>
                    </div>
                  </div>
                  <div class="row overflow-auto">
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
    <script>
      $(function(){
        'use strict'

        $('#order-listing').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      }
    });
    $('#order-listing').each(function() {
      var datatable = $(this);
      // SEARCH - Add the placeholder for Search and Turn this into in-line form control
      var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
      search_input.attr('placeholder', 'Search');
      search_input.removeClass('form-control-sm');
      // LENGTH - Inline-Form control
      var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
      length_sel.removeClass('form-control-sm');
    });

        // Select2
        $('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

      });
    </script>
  </body>

<!-- Mirrored from www.bootstrapdash.com/demo/azia/v1.0.0/template/page-order.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Feb 2021 15:03:51 GMT -->
</html>
