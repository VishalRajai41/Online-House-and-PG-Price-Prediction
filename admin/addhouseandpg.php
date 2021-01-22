<?php
include("connect.php");
if(empty($_SESSION['admin']))
    header("location:../index.php");

if (isset($addl)) {
       
    $result=mysqli_query($con,"insert into house_room(house_pg_type,h_a_p_id) values('$addroom','$listcategory')") or die(mysqli_error($con));
        header("location:addhouseandpg.php");
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
        xmlhttp.open("GET", "house_cat.php?id=" + str, true);
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
    <link href="addlocation/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="addlocation/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="addlocation/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="addlocation/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="addlocation/css/main.css" rel="stylesheet" media="all">

     <!-- <<Attched Stylesheets>> -->
    <link rel="stylesheet" href="table1/nav/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="table1/nav/css/media.css" type="text/css" />
    <link rel="stylesheet" href="table1/nav/css/font-awesome.min.css" type="text/css" />
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
                            <li>                                
                                <a href="../ownerdetail.php">Owner<br> Details</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                 <a href="../userdetail.php">User<br> Details</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="addlocation.php">Add<br> Location</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li  class="active">
                                <a href="addhouseandpg.php">Manage <br>House Or Pg</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="table1/logout.php">Logout</a>
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
       <br><br><br> <br><br><br>    



    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Add House And Pg detail</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        
                        <div class="form-row">
                            <div class="name">House Or Pg</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="listcategory" onchange="loadsubcategory(this.value)">
                                            <option disabled="disabled" selected="selected">Select House Or PG</option>

                                            <?php               
                                                $result=mysqli_query($con,"select * from house_and_pg") or die(mysqli_error($con));
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
                            <div class="name">House Or Pg</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="listcategory" id="subcategory">
                                            <option disabled="disabled" selected="selected">Select Property Type</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Add Room<br>(like 1BHK, 1Sharing)</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="addroom" id="addroom">
                                </div>
                            </div>
                        </div>
                        <div>
                            <center><button class="btn btn--radius-2 btn--red" type="submit" name="addl">Add Detail   </button></center>
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
    <script src="addlocation/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="addlocation/vendor/select2/select2.min.js"></script>
   
    <!-- Main JS-->
    <script src="addlocation/js/global.js"></script>
</form>
</body>

</html>
