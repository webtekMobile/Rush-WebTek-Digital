<?php
session_start();
if($_SESSION['admin']=="")
{
	header("Location:index.php");
}
session_destroy();
header("Location:index.php?msg=1");

?>