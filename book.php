<?php
include("connect.php");

if(empty($_SESSION['user']))
	header("location:login.php");

if(empty($_SESSION['h_p_id']))
	$_SESSION['h_p_id']=$id;

			
	 $result1=@mysqli_query($con,"select * from house_and_pg_price where h_p_id=$id ") or die(mysql_error($con));
	 $record=mysqli_fetch_array($result1);
     $_SESSION['price']=$record[8];

          $st1=$record[2];
          $result2=@mysqli_query($con,"select * from state where sid='$st1'") or die(mysqli_error($con));
          $record1=mysqli_fetch_array($result2);


          $st2=$record[5];
          $result3=@mysqli_query($con,"select * from house_and_pg where h_a_p_id='$st2'") or die(mysqli_error($con));
          $record2=mysqli_fetch_array($result3);

 
 	$uid=$_SESSION['uid'];
 	$h_p_id=$record[0];
 	$h_price=$_SESSION['price'];
 	mysqli_query($con,"insert into booking(h_p_id,h_p_price,u_id) values($h_p_id,$h_price,$uid)") or die(mysqli_error($con));

     mysqli_query($con,"update house_and_pg_price set uid='$uid',book='Book' where h_p_id=$h_p_id") or die(mysqli_error($con));

 	header("location:profile.php");
?>

