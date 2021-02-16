<?php
include("connection.php");
@$subject=$_POST['subject'];
@$consult=$_POST['consult'];
@$head=$_POST['con'];
@$filename=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$location="upload/";
$head_con=$_POST['editor'];
$status='false';
$query="insert into tbl_content(subject_id,consult_id,topic,topic_inner,file,status,date) values('$subject','$consult','$head','$head_con','$filename','$status',now())";
mysqli_query($conn,$query);
move_uploaded_file($tmp_name,$location.$filename);
header("Location:content.php");
?>