<?php
if(empty($_SESSION['admin']))
	header("location:index.php");
include("connect.php");
extract($_REQUEST);
mysqli_query($con,"delete from user_m where uid='$did'") or die(mysqli_error($con));
header("location:home.php");


?>