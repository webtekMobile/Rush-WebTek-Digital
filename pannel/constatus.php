<?php
$id=$_GET['id'];
include("connection.php");
echo $query="select * from tbl_content where content_id='$id'";
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
$up_query="update tbl_content set status='$upstatus' where content_id='$id'";
mysqli_query($conn,$up_query);
header("Location:viewcon.php?msg=$upstatus");

}

?>