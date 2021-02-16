<?php
include("connection.php");
$id=$_REQUEST['id'];
//echo $id;
$query="delete from tbl_content where content_id='$id'";
mysqli_query($conn,$query);
header("location:show_content.php");
?>