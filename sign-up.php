<?php
require "pannel/connection.php";
if(isset($_POST['sub_btn']))
{
		@$enrollment=isset($_POST['enrollment'])?$_POST['enrollment']:"";
		//echo $enrollment;
		$name=isset($_POST['name'])?$_POST['name']:"";
		//echo $name;
		$mobile=isset($_POST['mobile'])?$_POST['mobile']:"";
		//echo $mobile;
		$email=isset($_POST['email'])?$_POST['email']:"";
		//echo $email;
		$training=isset($_POST['training'])?$_POST['training']:"";
		//echo $training;
		$technology=isset($_POST['technology'])?$_POST['technology']:"";
		//echo $technology;
		$password=isset($_POST['password'])?$_POST['password']:"";
		//echo $password;	
		
		$query="insert into tbl_student(enrollment,name,mobile,email,training,technology,password,date)values('$enrollment','$name','$mobile','$email','$training','$technology','$password',curdate())";
		mysqli_query($conn,$query);		
		
}


?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Sign Up | WhiteBoard</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

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

<body class="signup-page">
    <div class="signup-box">
        <div class="logo">
            <a href="javascript:void(0);">White<b>Board</b></a>
            <small>Softpro India</small>
        </div>
        <div class="card">
            <div class="body">
                <form id="" method="POST">
                    <div class="msg">Register a new student</div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="enrollment" placeholder="Enrollment Id" required autofocus>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">person</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="name" placeholder="Student Name" required autofocus>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">phone</i>
                        </span>
                        <div class="form-line">
                            <input type="text" class="form-control" name="mobile" placeholder="Mobile" required>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">email</i>
                        </span>
                        <div class="form-line">
                            <input type="email" class="form-control" name="email" placeholder="Email Address" required>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">query_builder	</i>
                        </span>
                        <div class="form-line">
                           <select class="form-control" name="training">
						   <option value="">--Select Training--</option>
						   <option>Vocational Training</option>
						   <option>Summer Training</option>
						   <option>Apprenticeship</option>
						   <option>Winter Training</option>
						   <option>Industrial Training</option>
						   
						   </select>
                        </div>
                    </div>
					<div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">android</i>
                        </span>
                        <div class="form-line">
                            <select class="form-control" name="technology">
							<option value="">--Select Technology--</option>
							<option>PHP</option>
							<option>JAVA</option>
							<option>ANDROID</option>
							<option>PYTHON</option>
							<option>MECHINE LEARNING</option>
							</select>
                        </div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="password" minlength="6" placeholder="Password" required>
          
							</div>
                    </div>
                    <div class="input-group">
                        <span class="input-group-addon">
                            <i class="material-icons">lock</i>
                        </span>
                        <div class="form-line">
                            <input type="password" class="form-control" name="confirm" minlength="6" placeholder="Confirm Password" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="checkbox" name="terms" id="terms" class="filled-in chk-col-pink">
                        <label for="terms">I read and agree to the <a href="javascript:void(0);">terms of usage</a>.</label>
                    </div>
                    <button class="btn btn-block btn-lg bg-pink waves-effect" name="sub_btn" type="submit">SIGN UP</button>
		
                    <div class="m-t-25 m-b--5 align-center">
                        <a href="index.php">You already have a membership?</a>
                    </div>
                </form>
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
    <script src=".js/admin.js"></script>
    <script src="js/pages/examples/sign-up.js"></script>
</body>

</html>