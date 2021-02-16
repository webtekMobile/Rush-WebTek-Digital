<?php
session_start();
if($_SESSION['consultant']=="")
{
	session_destroy();
	header("Location:index.php");
}
include("connection.php");
$cons=$_SESSION['consultant'];
$ide=$_REQUEST['ide'];
$query="select * from tbl_consultant where email='$cons'";
$res_query=mysqli_query($conn,$query);
if($row_query=mysqli_fetch_assoc($res_query))
{
	$consult_id=$row_query['consult_id'];
}
if(isset($_POST['up_con']))
{
		$sub=isset($_POST['subject'])?$_POST['subject']:"";
		$content=isset($_POST['con'])?$_POST['con']:"";
		$editor=isset($_POST['editor'])?$_POST['editor']:"";
		$r12=mysqli_query($conn,"select * from tbl_content where content_id='$ide'");
if($ro12=mysqli_fetch_array($r12,MYSQLI_BOTH))
{
	$sub=$ro12['subject'];
}
mysqli_query($conn,"Update tbl_content set subject_id='$sub',topic='$content',topic_inner='$editor' where content_id='$ide'");
header("Location:viewcon.php?con='success'");
}
$r1=mysqli_query($conn,"select * from tbl_content where content_id='$ide'");
if($ro1=mysqli_fetch_array($r1,MYSQLI_BOTH))
{
?><!doctype html>

<html class="no-js" lang="en">
<!--<![endif]-->
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

	<link rel="stylesheet" href="ui/jquery-ui.css" type="text/css"/>
<link rel="stylesheet" href="ui/jquery-ui.theme.css" type="text/css"/>
<link rel="stylesheet" href="ui/jquery-ui.structure.css" type="text/css"/>
<script src="lib/ckeditor/ckeditor.js"></script>
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


    <!-- Left Panel -->
   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                
                <a class="navbar-brand" href="#">White Board</a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="adm_profile.php"> <i class="menu-icon fa fa-dashboard"></i>Dashboard </a>
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
                            <img class="user-avatar rounded-circle" src="upload/consult/<?php echo $_SESSION['photo'];   ?>" alt="User Avatar">
                        </a>
						<?php echo $_SESSION['consultant'];  ?>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-user"></i> My Profile</a>

							<a class="nav-link" href="change.php"><i class="fa fa-lock"></i> Change Password 

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
	<div class="col-lg-12" >
                                                    <div class="card">
													<form action="" method="post" >
                                                        <div class="card-header"><b><h3>Topic</h3></b><br/>											
														 <div class="form-group">
                                                                    <div class="input-group">
																
																	
																	
                                                               <select onchange="subj()" name="subject" id="sub" class="form-control">
															   	<?php
																	
print_r($branch_id=explode(",",$_SESSION['branch']));
														echo $bran=count($branch_id);
														
														for($n=0;$n<$bran;$n++)
														{
$sql1="select * from tbl_subject where branch='$branch_id[$n]' ";
$res_query=mysqli_query($conn,$sql1);
?>
															   <?php
while($row_query=mysqli_fetch_assoc($res_query))
{
?>
																	 <option value="<?php  echo $row_query['subject_id'];  ?>"><?php  echo $row_query['subject'];  ?></option>
																	 <?php
}
														}
																	 ?>
</select>																

                                                                    </div>
                                                                </div>
																<div class="form-group">
																<div class="input-group">
                                                                        <input type="text" id="content" name="con" class="form-control" placeholder="Enter Your Topic" value='<?php echo $ro1['topic'];  ?>' style="border:1px solid;" required>
												                                                                       <input type="hidden" name="consult" value="<?php echo $consult_id;  ?>"/>
																</div></div>
																																												
														
														
														</div>
                                                        <div class="card-body card-block">
                                                            
                                                                <div class="form-group">
																<h2>Content:-</h2><br/>
                                                                    <div class="input-group">
                                                                      
                                                                         <textarea name="editor" id="editor" rows="10" cols="80" placeholder="Write Something........"><?php echo $ro1['topic_inner'];  ?>
        
    </textarea>
                                                                      
                                                                    </div>
																	<br/>
																	<br/>
																	<input type="submit" name="up_con" value="Update"/>

                      
															
                                                        </div>
														
                                                    </div>
														</form>
                                                </div>
												

        </div>

        
    </div><!-- /#right-panel -->
	

    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
	<script src="jquery.js" type="text/javascript">
    </script>
    <script src="ui/jquery-ui.js" type="text/javascript"></script>

 <script type="text/javascript">
	 
		 CKEDITOR.replace('editor'); 
		
  </script>
  
</body>

</html>
<?PHP
}

?>