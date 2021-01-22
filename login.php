<?php  
  include("connect.php");
  @ session_start();
       

       
  if(isset($btnlogin))
  {
        /*if ($username=="" && $password=="") {
          # code...
          echo "Please enter Username and password";
        }*/
       $result1=@mysqli_query($con,"select * from user_m where uname='$username' ") or die(mysqli_error($con));
       $record1=mysqli_fetch_array($result1);
        $ps=password_verify("$pass1", $record1[4]);        
        echo $ps;
        if($ps)
          {
            if(mysqli_num_rows($result1)>0)
            {   

                $_SESSION['uid']=$record1[0];
                $_SESSION['user']=$record1[6];
                $_SESSION['u_type']=$record1[13];
                header("location:profile.php");    
            }
            else
            $msg="Invalid Username or Password is entered..";
          }
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="Login/css/style.css">
</head>
<body>

<div class="background-wrap">
  <div class="background"></div>
</div>

<form id="accesspanel"  method="post">
  <h1 id="litheader">Login</h1>
  <div class="inset">
    <p>
      <input type="text" name="username" id="email" placeholder="Username">
    </p>
    <p>
      <input type="password" name="pass1" id="password" placeholder="Access code">
    </p>

  <p class="p-container">
    <input type="submit" name="btnlogin" id="go" value="Login">
  </p>
<p class="text--center">Don't Have an Account? <a href="signup.php">Sign up</a> <svg class="icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="assets/images/icons.svg#arrow-right"></use></svg></p>

</form>
<script src="Login/js/index.js"></script>

</script>
</body>
</html>