<?php
session_start();
include('../database/connect.php');
if(@$_SESSION['admin'])
{
  header("location:admindashboard.php");
}
?>
<link rel="stylesheet" href="../css/ad_logincss.css">
<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		
	</style>
</head>
<body>




<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <h1>RUSH LOGO</h1>
      <!-- <img src="https://www.b-cube.in/wp-content/uploads/2014/05/aditya-300x177.jpg" id="icon" alt="User Icon" /> -->
      <h1>Admin Login</h1>
    </div>

    <!-- Login Form -->
    <form action="../database/admin_login.php" method="post">
      <input type="email" id="login" class="fadeIn second" name="Email" placeholder="Enter Email *" required="required" autocomplete="off">
      <input type="password" id="password" class="fadeIn third" name="Password" placeholder="Enter Password *" required="required" autocomplete="off">
      
      <input type="submit" class="fadeIn fourth" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Rush Online Project</a>
    </div>

  </div>
</div>
</body>
</html>

