<?php
include("connect.php");
$firstname=@$_SESSION['fname'];
$lastname=@$_SESSION['lname'];
$uemail=@$_SESSION['email'];
$upassword=@$_SESSION['password'];
$c_password=@$_SESSION['con_password'];
$user_name=@$_SESSION['username'];
if (isset($btnsubmit)) {

   # code...
   $path="Upload/".$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"Upload/".$_FILES['file']['name']);

          mysqli_query($con,"insert into user_m(fname,lname,email,password,cpassword,uname,state,city,address,postalcode,phone,photo,u_type,approval) values('$firstname','$lastname','$uemail','$upassword','$c_password','$user_name','$listcategory','$city','$address','$postalcode','$phone','$path','$u_type','')") or die(mysqli_error($con));
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['con_password']);
    unset($_SESSION['username']);
    header("location:login.php");
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
    <!--<link rel="stylesheet" href="css/nice-select.css" type="text/css">-->
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
                                
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="blog.php">Login</a></li>
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
                            <a href="index.php"><i class="fa fa-home"></i> Signup</a>
                            <span>Personal Infomation</span>
                            
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
                    <form id="registration_form" name="frm" method="post" enctype="multipart/form-data">
                        <div class="form-row">
                            <div class="name">State</div>
                            <div class="value">
                                <select name="listcategory" id="form_state" class="select-css" onchange="loadsubcategory(this.value)">
                                    <option disabled="disabled" selected="selected">Select State</option>
                                    <?php               
                                        $result=mysqli_query($con,"select * from state") or die(mysqli_error($con));
                                        while($row=mysqli_fetch_array($result)) 
                                        {               
                                            echo "<option value=$row[0]>$row[1]</option>";
                                        }
                                    ?>
                                    <span class="error_form" id="state_error_message"></span>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <select name="city" class="select-css" id="subcategory">
                                    <option disabled="disabled" selected="selected">Select Type</option>     
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Address</div>
                            <div class="value">
                                <textarea rows="4" cols="15" name="address"></textarea><br><br>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Postal Code</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="form_postalcode" name="postalcode" required="">
                                    <span class="error_form" id="postcode_error_message"></span>
                                </div>
                            </div>  
                        </div>
                        <div class="form-row">
                            <div class="name">Phone No</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" id="form_phone" name="phone" required="">
                                    <span class="error_form" id="phone_error_message"></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Upload Photo</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-6" type="file" title="search image" id="file" name="file" onchange="show(this)" >
                                </div>
                            </div>
                        </div>        
                        <div class="form-row">
                            <div class="name">T ype</div>
                            <div class="value">
                                <select name="u_type" class="select-css" id="u_type">
                                <option disabled="disabled" selected="selected">Select Type</option>             
                                <option value="Owner">Owner</option>
                                <option value="Generaluser">General User</option>
                            </select>
                        </div>
                        </div>
                        <div>
                            <center> <button class="btn btn--radius-2 btn--red" name="btnsubmit" type="submit">Signup</button>
                            </center>
                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--signup section End-->

   

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
    
    <!-- signup validation start-->
   <script type="text/javascript">

        function show(input) {
        debugger;
        var validExtensions = ['jpg','png','jpeg']; //array of valid extensions
        var fileName = input.files[0].name;
        var fileNameExt = fileName.substr(fileName.lastIndexOf('.') + 1);
        var filesize=input.files[0].size /1024/1024;
        if (filesize>2) {
          alert('File size exceeds 2 MB');
        }
        else if ($.inArray(fileNameExt, validExtensions) == -1) {
            input.type = ''
            input.type = 'file'
            $('#user_img').attr('src',"");
            alert("Only these file types are accepted : "+validExtensions.join(', '));
        }
    }
    function loadsubcategory(str) {
 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4
             && this.status == 200) {
                document.getElementById("subcategory").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "subcategory.php?id=" + str, true);
        xmlhttp.send();
     }
      $(function() {

         $("#postcode_error_message").hide();
         $("#phone_error_message").hide();
         
         var error_postcode=false;
         var error_phone=false;

         $("#form_postalcode").focusout(function(){
            check_postcode();
         });
         $("#form_phone").focusout(function(){
            check_phone();
         });
         
         function check_postcode() {
            var pattern = /^[1-9][0-9]{5}$/;
            var fname = $("#form_postalcode").val();
            if (pattern.test(fname) && fname !== '') {
               $("#postcode_error_message").hide();
               $("#form_postalcode").css("border-bottom","2px solid #34F458");
            } else {
               $("#postcode_error_message").html("Should contain 6 Digit");
               $("#postcode_error_message").show();
               $("#form_postalcode").css("border-bottom","2px solid #F90A0A");
               error_postcode = true;
            }
         }
         function check_phone() {
            var pattern = /^[6-9]\d{9}$/;
            var fname = $("#form_phone").val();
            if (pattern.test(fname) && fname !== '') {
               $("#phone_error_message").hide();
               $("#form_phone").css("border-bottom","2px solid #34F458");
            } else {
               $("#phone_error_message").html("Should contain 10 Digit");
               $("#phone_error_message").show();
               $("#form_phone").css("border-bottom","2px solid #F90A0A");
               error_phone = true;
            }
         }
         
         $("#registration_form").submit(function() {
            error_postcode=false;
            error_phone=false;
            error_state=false;
            
            check_postcode();
            check_phone();
            check_state();

            if (error_postcode === false && error_phone=== false) {
               alert("SignUp Successfull");

               return true;
            } else {
               alert("Please Fill the form Correctly");
               return false;
            }


         });
      });
   </script>
    <!--signup validation End-->
    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
   <!-- <script src="js/jquery.nice-select.min.js"></script>-->
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>