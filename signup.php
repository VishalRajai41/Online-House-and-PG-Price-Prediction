<?php
include("connect.php");
if (isset($btnsubmit)) {
   # code...
  
   $pass=password_hash($password, PASSWORD_DEFAULT);
   
   $_SESSION['fname']=$fname;
   $_SESSION['lname']=$lname;
   $_SESSION['email']=$email;
   $_SESSION['password']=$pass;
   $_SESSION['con_password']=$cpassword;
   $_SESSION['username']=$username;
   

      $to= $email;
      $subject = 'OTP Verification';
      $otp_code = strtoupper(bin2hex(openssl_random_pseudo_bytes(3)));
     
      $message = $otp_code;
      $headers = 'From: rajaivishal41@gmail.com';
      $_SESSION['otp']=$otp_code;
      $result = @mail($to, $subject, $message,$headers);
      if( $result )
         echo "Otp Send";
      else
         echo "Please Enter Valid Email";
    header("location:otpverification.php");
}
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online House and PG Price Prediction</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">

    <link rel="stylesheet" type="text/css" href="signup2/style.css">
  <script src="signup2/jquery-3.2.1.js"></script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Wrapper Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="canvas-close">
            <span class="icon_close"></span>
        </div>
        <div class="logo">
            <a href="index.php">
                <img src="img/f-logo.png" alt="">
            </a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="om-widget">
            <ul>
                <li><i class="icon_mail_alt"></i> houseandpg@gmail.com</li>
                <li><i class="fa fa-mobile-phone"></i> 8141912584<span>8050666801</span></li>
            </ul>
            
        </div>
        <div class="om-social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-youtube-play"></i></a>
            <a href="#"><i class="fa fa-instagram"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu Wrapper End -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="hs-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo">
                            <a href="index.php"><img src="img/f-logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="ht-widget">
                            <ul>
                                <li><i class="icon_mail_alt"></i> houseandpg@gmail.com</li>
                                <li><i class="fa fa-mobile-phone"></i> 8141912584<span>8050666801</span></li>
                            </ul>
                            
                        </div>
                    </div>
                </div>
                <div class="canvas-open">
                    <span class="icon_menu"></span>
                </div>
            </div>
        </div>
        <div class="hs-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9">
                        <nav class="nav-menu">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="#">Properties</a>
                                    <ul class="dropdown">
                                        <li><a href="property.php">Property Grid</a></li>
                                        <li><a href="profile.php">Property List</a></li>
                                        <li><a href="property-details.php">Property Detail</a></li>
                                        <li><a href="property-comparison.php">Property Comperison</a></li>
                                    </ul>
                                </li>
                                <li><a href="agents.php">Owners</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                                <li><a href="login.php">Login</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-lg-3">
                        <div class="hn-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section spad set-bg" data-setbg="img/breadcrumb-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h4>Signup</h4>
                        <div class="bt-option">
                            <a href="index.php"><i class="fa fa-home"></i> Home</a>
                            <span>Signup</span>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    
    
    <!--signup section start-->
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">SignUp</h2>
                </div>
                <div class="card-body">
                    <form id="registration_form" name="frm">
                        <div class="form-row m-b-55">
                        <div class="name">First Name</div>
                        <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="form_fname" name="fname" required="">
                                <span  id="fname_error_message"></span>
                            </div>
                        </div>
                        </div>
                        <div class="form-row">
                        <div class="name">Last Name</div>
                            <div class="value">
                            <div class="input-group">
                                <input class="input--style-5" type="text" id="form_sname" name="lname" required="">
                                <span  id="sname_error_message"></span>
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
                            <center> <button class="btn btn--radius-2 btn--red" name="btnsubmit" type="submit">Next</button>
                            </center>
                            <br></b><center><h4>Have An Account? <a href="login.php">Login</a></h4></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--signup section End-->

    <!-- signup validation start-->
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
    <!--signup validation End-->

    <!-- Footer Section Begin -->
    <br><footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="fs-about">
                        <div class="fs-logo">
                            <a href="index.php">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                        <p>Housing and PG price trends are not only the concern of buyers and sellers, but it also indicates the current economic situation.</p>
                        <div class="fs-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Links</h5>
                        <ul>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                            <li><a href="signup.php">Register</a></li>
                            <li><a href="login.php">Login</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6">
                    <div class="fs-widget">
                        <h5>Help</h5>
                        <ul>
                            <li><a href="contact.php">Contact Support</a></li>                            
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="fs-widget">
                        <h5>Contact</h5>
                        
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Email">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="copyright-text">
                <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="index.php" target="_blank">ABHISHEK NISHAD AND RAJAI VISHAL</a>
  </p>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>