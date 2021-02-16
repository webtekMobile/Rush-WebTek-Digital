<?php
include("connection.php");
$files=$_FILES['file']['name'];
$filestype=$_FILES['file']['type'];
$tmpname=$_FILES['file']['tmp_name'];
$filesize=$_FILES['file']['size'];
$location="upload/question/";
	$query="insert into tbl_upload(file,date) values('$files',now())";
	mysqli_query($conn,$query);
	move_uploaded_file('$location','$tmpname.$files');
	echo "insert successfully";


?>