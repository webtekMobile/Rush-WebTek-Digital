<?php
$id=$_GET['id'];
include("connection.php");
require "../encrypt.php";
$query="select * from tbl_interview where interview_id='$id'";
$res=mysqli_query($conn,$query);
if($row=mysqli_fetch_array($res,MYSQLI_BOTH))
{
$status=$row['status'];
if($status=='true')
{
	$upstatus='false';
}	
else
{
	$upstatus='true';
}
$up_query="update tbl_interview set status='$upstatus' where interview_id='$id'";
mysqli_query($conn,$up_query);
$up=encrypString($upstatus);
header("Location:viewinterview.php?msg=$up");

}

?>