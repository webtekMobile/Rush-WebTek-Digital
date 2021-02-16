<?php
include("connection.php");
$ques=$_POST['editor'];
$edit=mysqli_real_escape_string($conn,$ques);
//echo $ques;
//echo $edit;
$op=$_POST['radio'];
//echo $op;
@$op1=$_POST['op1'];
@$op2=$_POST['op2'];
@$op3=$_POST['op3'];
@$op4=$_POST['op4'];
$query_ques="insert into question_upload(question,op1,op2,op3,op4,answer,date) values('edit','$op1','$op2','$op3','$op4','$op',curdate())";
mysqli_query($conn,$query_ques);
header("Location:level.php?msg=1");

?>