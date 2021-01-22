<?php
session_start();
extract($_REQUEST);
$con=mysqli_connect("localhost","root","") or die("Connection failed...");
mysqli_select_db($con,"house_pg") or die("Database not found..");

?>