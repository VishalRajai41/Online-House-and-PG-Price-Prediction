<?php
  include("connect.php");
  $uid=@$_SESSION['uid'];
  $user=@$_SESSION['user'];
  $user_t=@$_SESSION['u_type'];

  if(empty($_SESSION['user']))
    header("location:../Login/index.php");
  /*fetch user data*/        
  $result=@mysqli_query($con,"select * from user_m where uid='$uid'") or die(mysqli_error($con));
  $record=mysqli_fetch_array($result);

  /*fetch state data*/
  $st=$record[7];
  $result1=@mysqli_query($con,"select * from state where sid='$st'") or die(mysqli_error($con));
  $record1=mysqli_fetch_array($result1);
  
?>
<!DOCTYPE html>
<html>
<head>
  <title>Profile</title>

  <meta charset="utf-8" />
    <!-- <<Mobile Viewport Code>> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!--Main Profile Css-->
  <link rel="stylesheet" type="text/css" href="profile/main.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link rel="stylesheet" href="profile/all.min.css">
  <link rel="stylesheet" href="profile/bootstrap.min.css">


   <!-- <<Attched Stylesheets>> -->
    <link rel="stylesheet" href="nav/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="nav/css/media.css" type="text/css" />
    <link rel="stylesheet" href="nav/css/font-awesome.min.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,400italic,800,700' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>


</head>
<body>
  <!-- \\ Begin Holder \\ -->
<div class="DesignHolder">
  <!-- \\ Begin Frame \\ -->
  <div class="LayoutFrame">
        <!-- \\ Begin Header \\ -->
        <header>
            <div class="Center">
                <!--<div class="site-logo">
                  <h1><a href="#">Admin<span></span> </a></h1>
                </div>-->
               <div id="mobile_sec">
               <div class="mobile"><i class="fa fa-bars"></i><i class="fa fa-times"></i></div>
                <div class="menumobile">
                    <!-- \\ Begin Navigation \\ -->
                    <nav class="Navigation">
                        <ul>
                            <li class="active">                                
                                <a href="#">Profile</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <?php
                                if ($record[13]=="Owner") {
                                  # code...
                                  echo "<a href='houseandpgdetail.php'>Add Detail</a>";
                                  echo "<span class='menu-item-bg'></span>";
                                }
                                ?>
                            </li>
                            <li>
                                <?php
                                if ($record[13]=="Generaluser") {
                                  # code...
                                  echo "<a href='#search'>Search</a>";
                                  echo "<span class='menu-item-bg'></span>";
                                }
                                ?>
                            </li>
                            <li>
                                <a href="#contact">Contact</a>
                                <span class="menu-item-bg"></span>
                            </li>
                             <li>
                                 <a href="../Login/logout.php">Logout</a>
                                <span class="menu-item-bg"></span>
                            </li>
                        </ul>
                    </nav>
                    <!-- // End Navigation // -->
        </div>
        </div>
                <div class="clear"></div>
            </div>
        </header>
        <!-- // End Header // -->

  <div class="main-content">
      <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px;  background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Welcome <?php echo $record[1].$record[2];?></h1>
            <!--<p class="text-white mt-0 mb-5"></p>-->
            <!--<a href="#!" class="btn btn-info">Edit profile</a>-->
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <form method="post" enctype="multipart/form-data">
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                    
                   <?php echo "<img src='$record[12]' class='rounded-circle'>";?>
                  
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
              <div class="d-flex justify-content-between">
                <!--<a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                <a href="#" class="btn btn-sm btn-default float-right">Message</a>-->
              </div>
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                    <div>
                      <!--<span class="heading">22</span>
                      <span class="description">Friends</span>-->
                    </div>
                    <div>
                      <!--<span class="heading">10</span>
                      <span class="description">Photos</span>-->
                    </div>
                    <div>
                     <!-- <span class="heading">89</span>
                      <span class="description">Comments</span>-->
                    </div>
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3><?php echo $record[1].$record[2];?><span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i><?php echo $record[8].",".$record1[1];?>                </div>
                <div class="h5 mt-4">
                  <!--<i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Creative Tim Officer-->
                </div>
                <div>
                  <!--<i class="ni education_hat mr-2"></i>University of Computer Science-->
                </div>
                <hr class="my-4">
                <!--<p>Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music.</p>
                <a href="#">Show more</a>-->
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                <div class="col-4 text-right">
                  <a href="#!" class="btn btn-sm btn-primary">Edit Profile</a>
                </div>
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-username">User name</label>
                        <!--<input type="text" id="input-username" class="form-control form-control-alternative" placeholder="Username" value="lucky.jesse">-->
                        <h3><?php echo $record[6];?>
                </h3>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <!--<input type="email" id="input-email" class="form-control form-control-alternative" placeholder="jesse@example.com">-->
                        <h4 class="mb-0"><?php echo $record[3];?></h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <!--<input type="text" id="input-first-name" class="form-control form-control-alternative" placeholder="First name" value="Lucky">-->
                        <h4 class="mb-0"><?php echo $record[1];?></h4>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <!--<input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">-->
                        <h4 class="mb-0"><?php echo $record[2];?></h4>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">User Type</label>
                        <!--<input type="text" id="input-last-name" class="form-control form-control-alternative" placeholder="Last name" value="Jesse">-->
                        <h4 class="mb-0"><?php echo $record[13];?></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <!--<input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09" type="text">-->
                        <h4 class="mb-0"><?php echo $record[9];?></h4>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">State</label>
                        <!--<input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="New York">-->
                        <h4 class="mb-0"><?php echo $record1[1];?></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">City</label>
                        <!--<input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="United States">-->
                        <h4 class="mb-0"><?php echo $record[8];?></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <!--<input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">-->
                        <h4 class="mb-0"><?php echo $record[10];?></h4>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Phone No</label>
                        <!--<input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code">-->
                        <h4 class="mb-0"><?php echo $record[11];?></h4>
                      </div>
                    </div>
                  </div>
                </div>
                <hr class="my-4">
                <!-- Description -->
                <!--<h6 class="heading-small text-muted mb-4">About me</h6>
                <div class="pl-lg-4">
                  <div class="form-group focused">
                    <label>About Me</label>
                    <textarea rows="4" class="form-control form-control-alternative" placeholder="A few words about you ...">A beautiful Dashboard for Bootstrap 4. It is Free and Open Source.</textarea>
                  </div>
                </div>-->
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <br><br><br><br>
 <!-- \\ Begin Get Section \\ -->
                <div class="Get_sec">
                    
                    <!-- \\ Begin Footer \\-->
                    <footer>
                        <div class="Cntr">                
                           <p>COPYRIGHT © 2020  ABHISHEK NISHAD And  RAJAI VISHAL DESIGN: <a rel="nofollow" href="#home" target="_parent">Online House And Pg Prediction</a></p>
                        </div>
                    </footer>
                    <!-- // End Footer // -->
                </div>
                <!-- // End Get Section // -->

  </div>
        <!-- // End Container // -->
    </div>
    <!-- // End Layout Frame // -->
</div>
</div>

<!-- <<Attched Javascripts>> -->
<!--<script type="text/javascript" src="nav/js/jquery-1.11.0.min.js"></script>-->
<script type="text/javascript" src="nav/js/jquery.sudoSlider.min.js"></script>
<script type="text/javascript" src="nav/js/global.js"></script>
<script type="text/javascript" src="nav/js/modernizr.js"></script>
  

<script src="profile/jquery-3.3.1.slim.min.js"></script>
<script src="profile/bootstrap.min.js"></script>
<script src="profile/bootstrap-datepicker.js"></script>
</body>
</html>