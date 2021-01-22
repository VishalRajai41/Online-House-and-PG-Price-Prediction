<?php
include("connect.php");
if (isset($btnsubmit)) {
   # code...
  
   $pass=password_hash($password, PASSWORD_DEFAULT);
   //echo $hash;
   
   $_SESSION['fname']=$fname;
   $_SESSION['lname']=$lname;
   $_SESSION['email']=$email;
   $_SESSION['password']=$pass;
   $_SESSION['con_password']=$cpassword;
   $_SESSION['username']=$username;
   

      $to= $email;
      $subject = 'OTP Verification';
     // $otp = rand(100000,999999);
      $otp_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));
     
      $message = $otp_code;
      $headers = 'From: rajaivishal41@gmail.com';
      $_SESSION['otp']=$otp_code;
      $result = @mail($to, $subject, $message,$headers);
      if( $result )
         echo "Otp Send";
      else
         echo "Please Enter Valid Email";
    header("location:otp/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Sign Up</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery-3.2.1.js"></script>
</head>
<body>
 <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
  <div class="wrapper wrapper--w790">
    <div class="card card-5">
      <div class="card-heading">
        <h2 class="title">SignUp</h2>
      </div>
      <div class="card-body">
        <form id="registration_form" name="frm">
          <div class="form-row m-b-55">
            <div class="name">Name</div>
            <div class="value">
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group-desc">
                    <input class="input--style-5" type="text" id="form_fname" name="fname" required="">
                    <span  id="fname_error_message"></span>
                    <label class="label--desc"> First Name</label>
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group-desc">
                    <input class="input--style-5" type="text" id="form_sname" name="lname" required="">
                    <span id="sname_error_message"></span>
                    <label class="label--desc">Last Name</label>
                  </div>
                </div>
                
              </div>
              
            </div>
          </div>
          <div class="form-row">
            <div class="name">Email</div>
            <div class="value">
              <div class="input-group">
                <input class="input--style-7" type="email" id="form_email" name="email" required="">
                <span  id="email_error_message"></span>
              </div>
            </div>
          </div>
          <!--<div class="form-row m-b-55">
            <div class="name">Password</div>
            <div class="value">
              <div class="row row-space">
                <div class="col-2">
              <div class="input-group-desc">
                <input class="input--style-8" type="password" id="form_password" name="password" required="">
                <span  id="password_error_message"></span>
                <label class="label--desc">Password</label> 
              </div>
                </div>
                <div class="col-2">
                  <div class="input-group-desc">
                    <input class="input--style-8" type="password" id="form_retype_password" name="cpassword" required="">
                    <span id="retype_password_error_message"></span>
                    <label class="label--desc">Confirm Password</label> 
                </div>
            </div>
              </div>
            </div>
          </div>-->
          <div class="form-row">
            <div class="name">Password</div>
            <div class="value">
              <div class="input-group"> 
                <input class="input--style-7" type="password" id="form_password" name="password" required="">
                <span  id="password_error_message"></span>
                
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">Confirm Password</div>
            <div class="value">
              <div class="input-group"> 
                <input class="input--style-7" type="password" id="form_retype_password" name="cpassword" required="">
                <span  id="password_error_message"></span>
                
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="name">User Name</div>
            <div class="value">
              <div class="input-group"> 
                <input class="input--style-5" type="text" id="form_username" name="username" required="">
                <span  id="password_error_message"></span>
                
              </div>
            </div>
          </div>
          <div>
           <center> <button class="btn btn--radius-2 btn--red" name="btnsubmit" type="submit">Sign Up</button>

            </center>
            <br></b><center><p>Have An Account? <a href="../Login">Login</a></p></center>
          </div>
        </form>
      </div>
  </div>
</div>
</div>
  <script type="text/javascript">
      $(function() {

         $("#fname_error_message").hide();
         $("#sname_error_message").hide();
         $("#email_error_message").hide();
         $("#password_error_message").hide();
         $("#retype_password_error_message").hide();
         $("#username_error_message").hide();

         var error_fname = false;
         var error_sname = false;
         var error_email = false;
         var error_password = false;
         var error_retype_password = false;
         var error_username=false;

         $("#form_fname").focusout(function(){
            check_fname();
         });
         $("#form_sname").focusout(function() {
            check_sname();
         });
         $("#form_email").focusout(function() {
            check_email();
         });
         $("#form_password").focusout(function() {
            check_password();
         });
         $("#form_retype_password").focusout(function() {
            check_retype_password();
         });
         $("#form_username").focusout(function(){
            check_username();
         })

         function check_fname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_fname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#fname_error_message").hide();
               $("#form_fname").css("border-bottom","2px solid #34F458");
            } else {
               $("#fname_error_message").html("Should contain only Characters");
               $("#fname_error_message").show();
               $("#form_fname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_sname() {
            var pattern = /^[a-zA-Z]*$/;
            var sname = $("#form_sname").val()
            if (pattern.test(sname) && sname !== '') {
               $("#sname_error_message").hide();
               $("#form_sname").css("border-bottom","2px solid #34F458");
            } else {
               $("#sname_error_message").html("Should contain only Characters");
               $("#sname_error_message").show();
               $("#form_sname").css("border-bottom","2px solid #F90A0A");
               error_fname = true;
            }
         }

         function check_password() {
            var password_length = $("#form_password").val().length;
            if (password_length < 8) {
               $("#password_error_message").html("Atleast 8 Characters");
               $("#password_error_message").show();
               $("#form_password").css("border-bottom","2px solid #F90A0A");
               error_password = true;
            } else {
               $("#password_error_message").hide();
               $("#form_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_retype_password() {
            var password = $("#form_password").val();
            var retype_password = $("#form_retype_password").val();
            if (password !== retype_password) {
               $("#retype_password_error_message").html("Passwords Did not Matched");
               $("#retype_password_error_message").show();
               $("#form_retype_password").css("border-bottom","2px solid #F90A0A");
               error_retype_password = true;
            } else {
               $("#retype_password_error_message").hide();
               $("#form_retype_password").css("border-bottom","2px solid #34F458");
            }
         }

         function check_email() {
            var pattern = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            var email = $("#form_email").val();
            if (pattern.test(email) && email !== '') {
               $("#email_error_message").hide();
               $("#form_email").css("border-bottom","2px solid #34F458");
            } else {
               $("#email_error_message").html("Invalid Email");
               $("#email_error_message").show();
               $("#form_email").css("border-bottom","2px solid #F90A0A");
               error_email = true;
            }
         }
         function check_username() {
            var pattern = /^[a-zA-Z0-9 ]*$/;
            var username = $("#form_username").val();
            if (pattern.test(username) && username !== '') {
               $("#username_error_message").hide();
               $("#username_error_message").css("border-bottom","2px solid #34F458");
            } else {
               $("#username_error_message").html("Should contain only Characters and numbers");
               $("#username_error_message").show();
               $("#form_username").css("border-bottom","2px solid #F90A0A");
               error_username = true;
            }
         }


         $("#registration_form").submit(function() {
            error_fname = false;
            error_sname = false;
            error_email = false;
            error_password = false;
            error_retype_password = false;
            error_username=false;

            check_fname();
            check_sname();
            check_email();
            check_password();
            check_retype_password();
            check_username();

            if (error_fname === false && error_sname === false && error_email === false && error_password === false && error_retype_password === false && error_username=== false) {
               alert("Registration Successfull");

               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>
</body>
</html>