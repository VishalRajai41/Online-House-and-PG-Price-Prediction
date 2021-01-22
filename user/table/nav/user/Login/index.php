<?php  
  include("connect.php");
  @ session_start();
  if(isset($btnlogin))
  {
    $approval=0;
      $result=@mysqli_query($con,"select * from user_m where uname='$username' and password='$password' ") or die(mysqli_error($con));  
      $record=mysqli_fetch_array($result);
      
      if(mysqli_num_rows($result)>0)
      {   
        $_SESSION['uid']=$record[0];
        $_SESSION['user']=$username;
        //if(!empty($_SESSION['itemid']))
        //{
          header("location:../table/index.php");
        //}
        //else {
          //  header("location:../table/participate.php");
          //}
          $_SESSION['itemid'];  
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

<div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel"  method="post">
  <h1 id="litheader">Login</h1>
  <div class="inset">
    <p>
      <input type="text" name="username" id="email" placeholder="Email address">
    </p>
    <p>
      <input type="password" name="password" id="password" placeholder="Access code">
    </p>
   <!-- <div style="text-align: center;">
      <div class="checkboxouter">
        <input type="checkbox" name="rememberme" id="remember" value="Remember">
        <label class="checkbox"></label>
      </div>
      <label for="remember">Remember me </label>
    </div>
    <input class="loginLoginValue" type="hidden" name="service" value="login" />
  </div>-->
  <p class="p-container">
    <input type="submit" name="btnlogin" id="go" value="Login">
<!--    <a href="../signup1/index.php">Sign Up</a>-->

  </p>
<p class="text--center">Not a member? <a href="../signup1">Sign up now</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>

</form>

<!--<script src="js/jquery.min.js"></script>-->

<script src="js/index.js"></script>
</body>
</html>