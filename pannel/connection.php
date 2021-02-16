<?php
$host="localhost";
$username="root";
$password="";
$database="rush_aaratech";
$con=mysqli_connect($host,$username,$password,$database);
if($con)
{
		$check_db_status="connection is created";
		//echo $check_db_status;
}
else
{
	die("connection error".mysqli_connect_error());
}
?>