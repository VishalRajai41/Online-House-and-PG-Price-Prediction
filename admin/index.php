<?php
include("connect.php");
if(isset($btnlogin))
{
  $result=mysqli_query($con,"select * from admin where username='$uname' and password='$upass'") or die(mysqli_error($con));
  
  if(mysqli_num_rows($result)>0)
  {
    $_SESSION['admin']=$uname;
    header("location:../ownerdetail.php");
  }
  else
    $msg="Invalid Username or Password is entered..";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div id="login-button">
  <img src="img/icons/login-w-icon.png">
  </img>
</div>
<div id="container">
  <h1>Log In</h1>
  <span class="close-btn">
    <img src="img/icons/circle_close_delete_-128.webp"></img>
  </span>

  <form>
    <input type="text" name="uname" placeholder="Username">
    <input type="password" name="upass" placeholder="Password">
    <input type="submit" name="btnlogin" value="Login" class="input-btn" >
  <!--  <a href="#" >Log in</a>-->

    <!--  <div id="remember-container">
      <input type="checkbox" id="checkbox-2-1" class="checkbox" checked="checked"/>
    <span id="remember">Remember me</span>
      <span id="forgotten">Forgotten password</span>
    </div>-->
</form>
</div>

<!-- Forgotten Password Container -->
<!--<div id="forgotten-container">
   <h1>Forgotten</h1>
  <span class="close-btn">
    <img src="img/icons/circle_close_delete_-128.webp"></img>
  </span>

  <form>
    <input type="email" name="email" placeholder="E-mail">
    <a href="#" class="orange-btn">Get new password</a>-->
</form>
</div>

<script  src="ajax/TweenMax.min.js"></script>
<script  src="ajax/jquery.min.js"></script>
<script  src="js/main.js"></script>
</body>
</html>