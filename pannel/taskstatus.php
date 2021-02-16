<?php
$id=$_GET['id'];
include("connection.php");
$query="select * from tbl_task where task_id='$id'";
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
$up_query="update tbl_task set status='$upstatus' where task_id='$id'";
mysqli_query($conn,$up_query);
header("Location:viewtask.php?msg=$upstatus");

}

?>