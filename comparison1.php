<?php
include("connect.php");

if(empty($_SESSION['user']))
    header("location:login.php");

if (isset($btncompare)) {
  $_SESSION['hpname']=$hpname;
  $_SESSION['listcategory']=$listcategory;
  $_SESSION['city']=$city;
  $_SESSION['house_pg_type']=$house_pg_type;
  $_SESSION['house_pg_room']=$house_pg_room;
  $_SESSION['saleorrent']=$saleorrent;
  $_SESSION['hpprice']=$hpprice;

   # code...
    /*$uid=$_SESSION['uid'];
    $path="Upload/".$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"Upload/".$_FILES['file']['name']);

          mysqli_query($con,"insert into house_and_pg_price(house_pg_name,house_pg_state,house_pg_city,post_code,house_pg_type,house_pg_room,sale_rent,house_pg_price,house_pg_detail,house_pg_photo,uid) values('$hpname','$listcategory','$city','$postalcode','$house','$room','$saleorrent','$hpprice','$hpdetail','$path','$uid')") or die(mysqli_error($con));*/
    
    header("location:comparison.php");    
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
    <link rel="icon" type="image/png" href="img/f-logo.png">

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
                                <li><a href="profile.php">Profile</a></li>
                                <li ><a href="search.php">Search</a></li>
                                <li class="active" ><a href="comparison1.php">Comparison</a></li>
                                <li ><a href="yourbooking.php">Your Participate</a></li>
                                <li><a href="logout.php">Logout</a></li>
                                
                            </ul>
                        </nav>
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
                        <h4>Add Details</h4>
                        <div class="bt-option">
                            <a href="profile.php"><i class="fa fa-home"></i> Profile</a>
                            <span>Add Details</span>
                            
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
        <h2 class="title">Add House or Pg Detail</h2>
      </div><br>
      <div class="card-body">
        <form id="registration_form" name="frm" method="post" enctype="multipart/form-data">
          <div class="form-row">
            <div class="name"> House or Pg Name</div> 
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" type="text" id="form_hpname" name="hpname" required="">
                <span class="error_form" id="hpname_error_message"></span>
              </div>
            </div>
          </div>
           
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
            <div class="name">Select City</div>
            <div class="value">
              <select name="city" class="select-css" id="subcategory">
                <option disabled="disabled" selected="selected">Select City</option>     
              </select>
            </div>
          </div>
          <div class="form-row">
            <div class="name">House Or PG</div>
            <div class="value">
              <select name="house" class="select-css" onchange="loadhouse(this.value)">
                <option disabled="disabled" selected="selected">Property Type</option>
                  <?php               
                    $result=mysqli_query($con,"select * from house_and_pg") or die(mysqli_error($con));
                      while($row=mysqli_fetch_array($result)) 
                      {               
                        echo "<option value=$row[0]>$row[1]</option>";
                      }
                    ?>
              </select>
            </div>
          </div>

          <div class="form-row">
            <div class="name">Room Type</div>
            <div class="value">
              <select name="room" class="select-css" id="cat">
                <option disabled="disabled" selected="selected">Select Room Type</option>     
              </select>
            </div>
          </div>
          <div class="form-row"> 
            <div class="name">Contract Type</div>
            <div class="value">
                <select name="saleorrent" class="select-css" id="sale">
                    <option disabled="disabled" selected="selected">Select Sale or Rent</option>
                    <option>Sale</option>
                    <option>Rent</option>
                </select>
            </div>
              
          </div>
          
          <div class="form-row">
            <div class="name"> House or Pg Price</div> 
            <div class="value">
              <div class="input-group">
                <input class="input--style-5" type="text" id="form_hpprice" name="hpprice" required="">
                <span class="error_form" id="hpprice_error_message"></span>
              </div>
            </div>
         </div>
          
        
         <div>
           
           <center><button class="btn btn--radius-2 btn--red" name="btncompare" type="submit">Compare</button></center>
         </div>
      
    </form>
  </div>
  </div>
</div>
</div>
  
  <script src="jquery.min.js"></script>
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
        else
        {
        if (input.files && input.files[0]) {
            var filerdr = new FileReader();
            filerdr.onload = function (e) {
                $('#user_img').attr('src', e.target.result);
            }
            filerdr.readAsDataURL(input.files[0]);
        }
        }
    }
      $(function() {

        
         $("#hpname_error_message").hide();
         $("#hpprice_error_message").hide();
         

         var error_hpname=false;
         var error_hpprice=false;
         
         
         

         $("#form_hpname").focusout(function(){
            check_hpname();
         });
         $("#form_hpprice").focusout(function(){
            check_hpprice();
         });
         

         
         
    
         function check_hpname() {
            var pattern = /^[a-zA-Z]*$/;
            var fname = $("#form_hpname").val();
            if (pattern.test(fname) && fname !== '') {
               $("#hpname_error_message").hide();
               $("#form_hpname").css("border-bottom","2px solid #34F458");
            } else {
               $("#hpname_error_message").html("Should contain only Characters");
               $("#hpname_error_message").show();
               $("#form_hpname").css("border-bottom","2px solid #F90A0A");
               error_hpname = true;
            }
         }

         function check_hpprice() {
            
            var pattern=/^[0-9]+$/;
            var postalcode = $("#form_hpprice").val();
            if (pattern.test(postalcode) && postalcode !== '') {
               $("#hpprice_error_message").hide();
               $("#form_hpprice").css("border-bottom","2px solid #34F458");
            } else {
               $("#hpprice_error_message").html("Should contain only Digit");
               $("#hpprice_error_message").show();
               $("#form_hpprice").css("border-bottom","2px solid #F90A0A");
               error_hpprice = true;
            }
         }
          function check_phone() {
            var pattern=/[0-9]{10}(\s*,*,\s*[0-9]{10})*/;
            var phone = $("#form_phone").val();
            if (pattern.test(phone) && phone !== '') {
               $("#phone_error_message").hide();
               $("#form_phone").css("border-bottom","2px solid #34F458");
            } else {
               $("#phone_error_message").html("Should contain only 10 Digit");
               $("#phone_error_message").show();
               $("#form_phone").css("border-bottom","2px solid #F90A0A");
               error_phone = true;
            }
         }
         
         $("#registration_form").submit(function() {
            error_hpname=false;
            error_hpprice=false;
            

            
            check_hpname();
            check_hpprice();
            

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


    <script type="text/javascript">
   function loadsubcategory(str) {
 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4
             && this.status == 200) {
                document.getElementById("subcategory").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "subcategorys.php?id=" + str, true);
        xmlhttp.send();
     }
     function loadhouse(str1) {
 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4
             && this.status == 200) {
                document.getElementById("cat").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "subcategoryhp.php?id=" + str1, true);
        xmlhttp.send();
     }
  
</script>

    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <!--<script src="js/jquery.nice-select.min.js"></script>-->
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.richtext.min.js"></script>
    <script src="js/image-uploader.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>