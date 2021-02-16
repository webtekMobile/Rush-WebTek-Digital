<?php
session_start();
if (@$_SESSION['admin_id']) 
{
   header("location:admindashboard.php");
}
require "../database/connection.php";
if(isset($_POST['btn']))
{
	$email=isset($_POST['email'])?$_POST['email']:"";
	//echo $enrollment;
	$psw=isset($_POST['psw'])?$_POST['psw']:"";
	//echo $password;
$query="SELECT * FROM tbl_admin where admin_email='$email' and admin_password='$psw' ";
$result=mysqli_query($con,$query);
$row=mysqli_fetch_assoc($result);
	if ($row)
	 {
	   if($row['admin_status']==1)
	   {
	     $_SESSION['admin_id']=$row['admin_id'];
	     header("location:admindashboard.php");
	  }
	  else
	  {
	  	session_destroy();
	  	echo ("<SCRIPT LANGUAGE='JavaScript'>window.alert('Invalid Email Or Password')
	  		window.location.href='index.php';</SCRIPT>");
	 	

	  }

	 }
	 else
	 {
	 	session_destroy();
	 	echo ("<SCRIPT LANGUAGE='JavaScript'>
    window.alert('Invalid Email Or Password')
    window.location.href='index.php';
    </SCRIPT>");
	 	
	 }
}

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Rush</title>
    <!-- Favicon-->
    <link rel="icon" href="../../favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Waves Effect Css -->
    <link href="plugins/node-waves/waves.css" rel="stylesheet" />

    <!-- Animation Css -->
    <link href="plugins/animate-css/animate.css" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="login-page">
    <div class="login-box">
        <div class="logo">
            <a href="javascript:void(0);">Rush<b>Admin</b></a>
            
        </div>
        <div class="card">
            <div class="body">
                <form id="sign_in" method="POST">
                    <div class="msg">Sign in to start your session</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
						
						<input type="hidden" id="coun"/>
                            <input type="text" id="enr" class="form-control" name="email" placeholder="Enrollment Id"  required autofocus>
                        </div>
                    </div>
                    <div class="input-group" >
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line" >
                            <input type="password"   class="form-control" name="psw" placeholder="Password" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-8 p-t-5">
                            <input type="checkbox" name="rememberme" id="rememberme" class="filled-in chk-col-pink">
                            <label for="rememberme">Remember Me</label>
                        </div>
                        <div class="col-xs-4">
				
                            <button class="btn btn-block bg-pink waves-effect"  id="net" name="btn" type="submit">Login</button>
                        </div>
                    </div>
                    <div class="row m-t-15 m-b--20">
                      
                        <div class="col-xs-6 align-right">
                            <a href="forgot-password.php">Forgot Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
<div class="modal" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
	  
      <div class="modal-header">
        <h3 class="modal-title">OTP Verification</h3>
        <button type="button" class="close" id="cls" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <div class="form-group" style="align:center;">
			                    		<label class="sr-only" for="form-Enrollment Id">OTP</label>
			                        	<input type="text" name="form-otp" placeholder="Enter Otp..." class="form-otp form-control cl_otp" id="form-otp" required>
										<input type="hidden" id="otp1"/>
			                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary"  id="verify" onclick="verify()">Verify</button>
        <button type="button" class="btn btn-primary" onclick="resend()" >Resend</button>
		<span id="otpmsg" style="color:red;font-weight:bold;"></span>
      </div>
    </div>
  </div>
</div>
    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Validation Plugin Js -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/examples/sign-in.js"></script>
	
	
	
</body>

</html>