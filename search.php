<?php
include("connect.php");

if(empty($_SESSION['user']))
    header("location:login.php");

$uid=$_SESSION['uid'];
    if (isset($btnsearch)) {
        # code...
        extract($_REQUEST);
        $result=mysqli_query($con,"select * from house_and_pg_price where house_pg_name like '%$searchtxt%'") or die(mysqli_error($con));
        //header("location:search.php");
          
    }
          $result1=@mysqli_query($con,"select * from house_and_pg_price ") or die(mysql_error($con));
          $record=mysqli_fetch_array($result1);

          $st1=$record[2];
          $result2=@mysqli_query($con,"select * from state where sid='$st1'") or die(mysqli_error($con));
          $record1=mysqli_fetch_array($result2);

          $st2=$record[5];
          $result3=@mysqli_query($con,"select * from house_and_pg where h_a_p_id='$st2'") or die(mysqli_error($con));
          $record2=mysqli_fetch_array($result3);
  
    
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aler Template">
    <meta name="keywords" content="Aler, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online House And PG Price Prediction </title>

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
    

    <!--Table css-->
        
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="table/vendor/animate/animate.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="table/vendor/select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="table/vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="table/css/util.css">
    <link rel="stylesheet" type="text/css" href="table/css/main.css">
<!--===============================================================================================-->
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
                                <li class="active"><a href="search.php">Search</a></li>
                                <li ><a href="comparison1.php">Comparison</a></li>
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
                        <h4>Search Houese or PG</h4>
                        <div class="bt-option">
                            <a href="profile.php"><i class="fa fa-home"></i> Profile</a>
                            <span>Search</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Agent Section Begin -->
    <section class="agent-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="agent-search-form">
                        <form action="#">
                            <input type="text" name="searchtxt" placeholder="Find agent">
                            <button type="submit" name="btnsearch"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="limiter">
                <div class="container-table100">
                    <div class="wrap-table100">
      `                  <div class="table100">
                            <table>
                                <thead>
                                   <tr class="table100-head">
                                        <th class="column1">Property Image</th>
                                        <th class="column2">Property Name</th>
                                        <th class="column3">Property State</th>
                                        <th class="column4">Property City</th>
                                        <th class="column5">House Or Pg</th>
                                        <th class="column6">Property Room</th>
                                        <th class="column7">Property Type</th>
                                        <th class="column8">Property Price</th>
                                        <th class="column9">Book</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if(@$searchtxt==""){
                                            echo "<tr>";
                                            echo "<td class='column1'>Please Enter The Search</td>";
                                            echo "</tr>";
                                        }
                                        
                                        else
                                        {
                                            while (@$row=mysqli_fetch_array($result)) {
                                            # code...

                                             echo "<tr>";
                                             echo "<td class='column1'><img src='$row[10]' height='100px' width='100px' alt=''></td>";
                                             echo "<td class='column2'>$row[1]</td>";
                                             echo "<td class='column3'>$record1[1]</td>";
                                             echo "<td class='column4'>$row[3]</td>";
                                             echo "<td class='column5'>$record2[1]</td>";
                                             echo "<td class='column6'>$row[6]</td>";
                                             echo "<td class='column7'>$row[7]</td>";
                                             echo "<td class='column8'>$row[8]</td>";
                                             echo "<td class='column9'><a href=book.php?id=$row[0]>Book</a></td>";
                                             echo "</tr>";
                                            }
                                        }
                                    ?>                               
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Agent Section End -->

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

    <!--table js plugins-->
    <!--===============================================================================================-->  
    <script src="table/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="table/vendor/bootstrap/js/popper.js"></script>
<!--===============================================================================================-->
    <script src="table/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="table/js/main.js"></script>

</body>

</html>