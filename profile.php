<?php
  include("connect.php");
  $uid=@$_SESSION['uid'];
  $user=@$_SESSION['user'];
  $user_t=@$_SESSION['u_type'];

  if(empty($_SESSION['user']))
    header("location:login.php");
  /*fetch user data*/        
  $result=@mysqli_query($con,"select * from user_m where uid='$uid'") or die(mysqli_error($con));
  $record=mysqli_fetch_array($result);

  /*fetch state data*/
  $st=$record[7];
  $result1=@mysqli_query($con,"select * from state where sid='$st'") or die(mysqli_error($con));
  $record1=mysqli_fetch_array($result1);
  
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
                                <li class="active"><a href="profile.php">Profile</a></li>
                                <?php 
                                    if ($record[13]=="Owner") {
                                        # code...
                                        echo "<li><a href='houseandpgdetail.php'>Add Details</a></li>";
                                        echo "<li><a href='sale.php'>Your Sale</a></li>";
                                        echo "<li><a href='rent.php'>Your Rent</a></li>";
                                        echo "<li><a href='clientrequest.php'>Client Request</a></li>";
                                    }
                                    else
                                    {
                                        echo "<li><a href='search.php''>Search</a></li>";
                                        echo "<li><a href='comparison1.php''>Comparison</a></li>";
                                        echo "<li><a href='yourbooking.php'>Your Booking</a></li>";
                                    }
                                ?>
                                
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
                        <h4>Profile</h4>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Profile Section Begin -->
    <section class="profile-section spad">
        <div class="container">
            <div class="profile-agent-content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="profile-agent-info">
                            <div class="pi-pic">
                                <?php echo "<img src='$record[12]' alt=''>"?>
                                <div class="rating-point">
                                    4.5
                                </div>
                            </div>
                            <div class="pi-text">
                               <?php 
                                echo "<h5>$record[1].$record[2]</h5>";
                                echo "<span>$record[8],$record1[1]</span>";
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="profile-agent-widget">
                            <ul>
                                <?php
                                    if ($record[13]=="Owner")
                                    {
                                        echo "<h5>Account Details</h5>";
                                        echo "<li>Property <span>215</span></li>";
                                        echo "<li>First Name <span>$record[1]</span></li>";
                                       echo "<li>Last Name <span>$record[2]</span></li>";
                                       
                                    }
                                    else{
                                       echo "<h5>Account Details</h5>";
                                       echo "<li>First Name <span>$record[1]</span></li>";
                                       echo "<li>Last Name <span>$record[2]</span></li>";
                                       echo "<li>Phone <span>$record[11]</span></li>";
                                       
                                       

                                       
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="profile-agent-widget">
                            <ul>
                                <?php
                                    if ($record[13]=="Owner")
                                    {
                                       echo "<li>Email <span>$record[3]</span></li>";
                                       echo "<li>Address <span>$record[9]</span></li>";
                                       echo "<li>User Type <span>$record[13]</span></li>";
                                       echo "<li>Phone <span>$record[11]</span></li>";
                                       
                                    }
                                    else{
                                        echo "<li>Email <span>$record[3]</span></li>";
                                       echo "<li>Address <span>$record[9]</span></li>";
                                       echo "<li>User Type <span>$record[13]</span></li>";
                                       echo "<li>Phone <span>$record[11]</span></li>";
                                       
                                    }
                                ?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Profile Section End -->

    

    

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