<?php
include("connect.php");

if(empty($_SESSION['admin']))
	header("location:index.php");

mysqli_query($con,"update user_m set approval='$flag' where uid=$id") or die(mysqli_error($con));

header("location:home.php");

?>


