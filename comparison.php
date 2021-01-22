<?php
include("connect.php");

if(empty($_SESSION['user']))
    header("location:login.php");

$uid=$_SESSION['uid'];
  

        
          
          
        

   # code...
    /*$uid=$_SESSION['uid'];
    $path="Upload/".$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"Upload/".$_FILES['file']['name']);

          mysqli_query($con,"insert into house_and_pg_price(house_pg_name,house_pg_state,house_pg_city,post_code,house_pg_type,house_pg_room,sale_rent,house_pg_price,house_pg_detail,house_pg_photo,uid) values('$hpname','$listcategory','$city','$postalcode','$house','$room','$saleorrent','$hpprice','$hpdetail','$path','$uid')") or die(mysqli_error($con));*/
    

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online House And PG Price Prediction</title>

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
                                <li ><a href="search.php">Saerch</a></li>
                                <li class="active"><a href="comparison1.php">Comparison</a></li>
                                <li><a href="about.php">Your Booking</a></li>
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
                        <h4>Property comparison</h4>
                        <div class="bt-option">
                            <a href="profile.php"><i class="fa fa-home"></i> Profile</a>
                            <span>Property</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Property Comparison Section Begin -->
    <div class="property-comparison-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 p-0">
                    <div class="pc-table">
                        <table>
                            
                               <?php 

                                    $hpname=$_SESSION['hpname'];
                                    $state=$_SESSION['listcategory'];
                                    $city= $_SESSION['city'];
                                    $housepgtype=$_SESSION['house_pg_type'];
                                    $housepgroom=$_SESSION['house_pg_room'];
                                    $sale=$_SESSION['saleorrent'];
                                    $houseprice=$_SESSION['hpprice'];

                                    $result=mysqli_query($con,"select a.house_pg_name,a.house_pg_city,a.house_pg_room,a.sale_rent,a.house_pg_price,b.statename,c.type  from house_and_pg_price a,state b,house_and_pg c where a.house_pg_state='$state' and b.sid=a.house_pg_state") or die(mysqli_error($con));  
    

                                    $row=mysqli_fetch_array($result); 
                                        # code...

                                        echo "<thead>";
                                            echo "<tr>";
                                                echo "<th class='type'>Type</th>";
                                                echo "<th class='compare-item middle-item'>";
                                                echo "<div class='title'>House</div>";
                                                echo "<div>$row[0]</div>";
                                                echo "<p><span class='icon_pin_alt'></span>$row[5],$row[1]</p>";
                                                echo "</th>";
                                                echo "<th class='compare-item right-item'>";
                                                echo "<div class='title'>PG</div>";
                                                echo "<div>$hpname</div>";
                                                echo "<p><span class='icon_pin_alt'></span>$row[5],$city</p>";
                                                echo "</th>";
                                            echo "</tr>";
                                
                                        echo "</thead>";
                                        echo "<tbody>";
                                            echo "<tr>";
                                                echo "<td class=;p-type'>Status</td>";
                                                echo "<td>$row[3]</td>";
                                                echo "<td>$sale</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<td class='p-type'>House or Pg</td>";
                                                echo "<td>$row[6]</td>";
                                                echo "<td>PG</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<td class='p-type'>Property Room</td>";
                                                echo "<td>$row[2]</td>";
                                                echo "<td>$row[2]</td>";
                                            echo "</tr>";
                                            echo "<tr>";
                                                echo "<td class='p-type'>Property Price</td>";
                                                echo "<td>$row[4]</td>";
                                                echo "<td>$houseprice</td>";
                                            echo "</tr>";
                                            echo "<tr><td class='p-type'><a href='profile.php'>Back</a></td></tr>";
                            echo "</tbody>";
                                    
                             ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Property Comparison Section End -->

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
                        <p>Housing and PG price trends are not only the concern of buyers and sellers, but it also indicates the current economic situation</p>
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