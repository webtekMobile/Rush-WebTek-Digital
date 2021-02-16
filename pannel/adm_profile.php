<?php
session_start();
$email=$_SESSION['consultant'];
require "connection.php";
if($_SESSION['consultant']=="")
{
	header("Location:index.php");
}
if(isset($_POST['update_pro']))
{
	$cname=isset($_POST['con_name'])?$_POST['con_name']:"";
	$con_email=isset($_POST['con_email'])?$_POST['con_email']:"";
	$file=isset($_FILES['img']['name'])?$_FILES['img']['name']:"";
	$tmp_name=isset($_FILES['img']['tmp_name'])?$_FILES['img']['tmp_name']:"";
	$location="upload/consult/";
	if($file=="")
	{
		$qw="select * from tbl_consultant where email='$email'";
		$rd=mysqli_query($conn,$qw);
		if($roer=mysqli_fetch_array($rd,MYSQLI_BOTH))
		{
			$file=$roer['photo'];
		}
	}
	
$up_query="update tbl_consultant set cname='$cname',email='$con_email',photo='$file' where email='$email'";
	mysqli_query($conn,$up_query);
	move_uploaded_file($tmp_name,$location.$file);
	//$_SESSION['photo']=$file;
}
$query_con="select * from tbl_consultant where email='$email'";
$res_con=mysqli_query($conn,$query_con);
if($row_con=mysqli_fetch_array($res_con,MYSQLI_BOTH))
{
	$branch=$row_con['branch_id'];
//print_r (explode(' ',$branch));
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Softpro Admin - White Board</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
	<style>
	/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}
</style>
</head>
<body>
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
                <a class="navbar-brand" href="./">White Board</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
                    </li>
                      <h3 class="menu-title">Add <?php echo @$subject;  ?></h3><!-- /.menu-title -->
                    <!-----<li class="menu-item-has-children dropdown">
					 <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Add test</a>
                        <ul class="sub-menu children dropdown-menu">
                          
                            <li><i class="fa fa-id-badge"></i><a href="topic.php">Add Topic</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Choice</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Add question</a></li>
                        </ul>
                    </li>
					<!--->
					<li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Add Content</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li id=""><i class="fa fa-puzzle-piece"></i><a href="content.php">Add Content</a></li>
                        </ul>
                    </li>
					<li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Add Task</a>
                     <ul class="sub-menu children dropdown-menu">
                            <li id=""><i class="fa fa-puzzle-piece"></i><a href="task.php">Add Task</a></li>
                           
                     </ul>
                     </li>
					 <li class="menu-item-has-children dropdown">
                        <a href="" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Add Interviewquestion</a>
                     <ul class="sub-menu children dropdown-menu">
                            <li id=""><i class="fa fa-puzzle-piece"></i><a href="interview.php">Add Interviewquestion</a></li>
                           
                     </ul>
                     </li>
                     <h3 class="menu-title">View </h3><!-- /.menu-title -->
					 <li>
                        <a href="viewcon.php"> <i class="menu-icon ti-email"></i>View Content</a>
                     </li>
					 <li>
                        <a href="viewtask.php"> <i class="menu-icon ti-email"></i>View Task</a>
                     </li>
					 <li>
                        <a href="viewstask.php"> <i class="menu-icon ti-email"></i>View StudentTask</a>
                    </li>
					<li>
                        <a href="viewinterview.php"> <i class="menu-icon ti-email"></i>View Interviewquestion</a>
                    </li>
                    </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="header-menu">
                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                       
                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="upload/consult/<?php echo $row_con['photo'];  ?>" alt="User Avatar">
                        </a>
							<a style="line-height:2;"><?php echo $email;   ?></a>
                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

                         
							<a class="nav-link" href="change.php"><i class="fa fa-lock"></i> Change Password <span class="count"></span></a>

                            

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-in"></i>
                        </a>
                    </div>

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li class="active">Powered by :- Softpro India</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
<div class="col-xl-3 col-lg-6">
                <section class="card">
                    <div class="twt-feed blue-bg">
                        <div class="corner-ribon black-ribon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="fa fa-twitter wtt-mark"></div>

                        <div class="media">
                            <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="upload/consult/<?php echo $row_con['photo'];  ?>">
                            </a>
                            <div class="media-body">
                                <h2 class="text-white display-6"><?php  echo $row_con['cname'];  ?></h2>
                                <p class="text-light">Consultant  </p>
                            </div>
                        </div>
                    </div>
                    <div class="weather-category twt-category">
                        <ul>
                            <li class="active">
                                <h5>750</h5>
                                Tweets
                            </li>
                            <li>
                                <h5>865</h5>
                                Following
                            </li>
                            <li>
                                <h5>3645</h5>
                                Followers
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12">
                     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
 Update
</button>
                    </div>
                    <footer class="twt-footer">
                        <a href="" data><i class="fa fa-camera"></i></a>
                        <a href="#"><i class="fa fa-map-marker"></i></a>
                        New Castle, UK
                        <span class="pull-right">
                            32
                        </span>
                    </footer>
                </section>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-money text-success border-success"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total Student</div>
                                <div class="stat-digit"><?php
$branch=$_SESSION['branch'];								
								$stu_query="select count(enrollment) from tbl_student where branch='$branch'";
								$stu_res=mysqli_query($conn,$stu_query);
								if($stu_row=mysqli_fetch_array($stu_res,MYSQLI_BOTH))
								{
									echo $stu_row['0'];
								}
								
								?>
								</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-user text-primary border-primary"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total task</div>
                                <div class="stat-digit"><?php 
								$tas_query="select count(task_id) from tbl_task";
								$tas_res=mysqli_query($conn,$tas_query);
								if($tas_row=mysqli_fetch_array($tas_res,MYSQLI_BOTH))
								{
									echo $tas_row['0'];
								}
								
								?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-one">
                            <div class="stat-icon dib"><i class="ti-layout-grid2 text-warning border-warning"></i></div>
                            <div class="stat-content dib">
                                <div class="stat-text">Total subject</div>
                                <div class="stat-digit"><?php
								
									$branch_query="select count(subject_id) from tbl_subject where branch='$branch'";
								$branch_res=mysqli_query($conn,$branch_query);
								while($branch_row=mysqli_fetch_array($branch_res,MYSQLI_BOTH))
								{
									echo $branch_row['0'];
								}
								
								
								?></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            


        </div> <!-- .content -->
    </div><!-- /#right-panel -->
	<div class="modal" id="myModal">
  <div class="modal-dialog">
  <form action="" method="post" enctype="multipart/form-data">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Update Profile</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
	   <div class="form-group">
	   <input type="text" class="form-control" name="con_name" value="<?php echo $row_con['cname'];  ?>">
	   </div>
	    <div class="form-group">
	   <input type="email" class="form-control" name="con_email" value="<?php echo $row_con['email'];  ?>">
	   </div>
       <div class="form-group">
	   <input type="file"  name="img" accept="image/*" onchange="loadFile(event)">

<script>
  var loadFile = function(event) {
    var reader = new FileReader();
    reader.onload = function(){
      var output = document.getElementById('output');
      output.src = reader.result;
	  output.style="height:50px;width:50px;";
    };
    reader.readAsDataURL(event.target.files[0]);
  };
</script>

	   </div>
	   <img id="output" />
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
       
        <button type="submit" name="update_pro" class="btn btn-primary" >Submit</button>
		 <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
	</form>
  </div>
</div>

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>
	

  <!-- Modal -->
 

</body>

</html>
<?php
}
?>