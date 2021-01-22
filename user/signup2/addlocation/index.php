<?php
include("connect.php");

if (isset($addl)) {
       
    $result=mysqli_query($con,"insert into city(cityname,sid) values('$city','$listcategory')") or die(mysqli_error($con));
        header("location:index.php");
}


?>
<script>
function loadsubcategory(str) {
 
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("subcategory").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "subcategory.php?id=" + str, true);
        xmlhttp.send();

  
}
</script>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    

    <!-- Title Page-->
    <title>Add Location</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">

     <!-- <<Attched Stylesheets>> -->
    <link rel="stylesheet" href="../nav/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="../nav/css/media.css" type="text/css" />
    <link rel="stylesheet" href="../nav/css/font-awesome.min.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,400italic,800,700' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
</head>

<body>
    <form method="POST">
<div class="DesignHolder">
    <!-- \\ Begin Frame \\ -->
    
    <div class="LayoutFrame">
        <!-- \\ Begin Header \\ -->
        <header>
            <div class="Center">
                <div class="site-logo">
                    <h1><a href='#'><span>Admin</span> </a></h1>
                </div>
               <div id="mobile_sec">
               <div class="mobile"><i class="fa fa-bars"></i><i class="fa fa-times"></i></div>
                <div class="menumobile">
                    <!-- \\ Begin Navigation \\ -->
                    <nav class="Navigation">
                        <ul>
                            <li class="active">                                
                                <a href="../index.php">Home</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="index.php">Add Location</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="../logout.php">Logout</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <!--<li>
                                <a href="#contact">Contact</a>
                                <span class="menu-item-bg"></span>
                            </li>
                             <li>
                                 <a href="user/login">Login</a>
                                <span class="menu-item-bg"></span>
                            </li>-->
                        </ul>
                    </nav>
                    <!-- // End Navigation // -->
                </div>
                </div>
                <div class="clear"></div>
            </div>
        </header>
       <br><br><br> <br><br><br>    



    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Add Location</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        
                        <div class="form-row">
                            <div class="name">State</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="listcategory" onchange="loadsubcategory(this.value)">
                                            <option disabled="disabled" selected="selected">Select State</option>

                                            <?php               
                                                $result=mysqli_query($con,"select * from state") or die(mysqli_error($con));
                                                while($row=mysqli_fetch_array($result)) 
                                                {               
                                                    echo "<option value=$row[0]>$row[1]</option>";
                                                }
                                            ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">City</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="city" id="city">
                                </div>
                            </div>
                        </div>
                        <div>
                            <center><button class="btn btn--radius-2 btn--red" type="submit" name="addl">Add Location   </button></center>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


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

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
   
    <!-- Main JS-->
    <script src="js/global.js"></script>
</form>
</body>

</html>
