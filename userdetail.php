<?php
include("connect.php");

if(empty($_SESSION['admin']))
    header("location:index.php");
@session_start(); 
extract($_REQUEST);
extract($_REQUEST);
$result=mysqli_query($con,"select * from user_m where u_type='Generaluser'") or die(mysql_error($con));
?>

<!DOCTYPE html>
<html>
<head>
	
	 <!-- Title Tag -->
   	<title>User Page</title>
	<link rel="stylesheet" type="text/css" href="admin/table1/css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	
	 <!-- <<Attched Stylesheets>> -->
    <link rel="stylesheet" href="admin/table1/nav/css/theme.css" type="text/css" />
    <link rel="stylesheet" href="admin/table1/nav/css/media.css" type="text/css" />
    <link rel="stylesheet" href="admin/table1/nav/css/font-awesome.min.css" type="text/css" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic,400italic,800,700' rel='stylesheet' type='text/css'>    
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
</head>
<body>

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
                                <a href="ownerdetail.php">Owner<br>Detail</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li class="active">
                                 <a href="userdetail.php">User<br>Details</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="admin/addlocation.php">Add<br>Location</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            <li>
                                <a href="admin/addhouseandpg.php">Manage<br> House Or Pg</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            
                            <li>
                                <a href="admin/table1/logout.php">Logout</a>
                                <span class="menu-item-bg"></span>
                            </li>
                            
                            
                        </ul>
                    </nav>
                    <!-- // End Navigation // -->
                </div>
                </div>
                <div class="clear"></div>
            </div>
        </header><!-- // End Header // -->
        <br><br><br><br><br><br><br><br>
<h1><span class="blue">User's</span><span class="yellow">Details</pan></h1>


<table class="container">
    <form method="post" enctype="multipart/form-data">
    <thead>
        <tr>
            <th><h1>Owner Name</h1></th>
            <th><h1>Email</h1></th>
            <th><h1>Owner Image</h1></th>
            <th><h1>City</h1></th>
            <th><h1>Mobile No</h1></th>
            <!--<th><h1>Approve/Disapprove</h1></th>-->
            <th><h1>Remove</h1></th>
            
        </tr>
    </thead>
    <tbody>
        <?php
            while($row=mysqli_fetch_array($result))
            {
                echo "<tr>";
                echo "<td>$row[1] $row[2]</td>";
                echo "<td>$row[3]</td>";
                echo "<td><img src='$row[12]'  width=40px></td>";
                echo "<td>$row[8]</td>";
                echo "<td>$row[11]</td>";
                /*echo "<td><a href=approve.php?id=$row[0]&&flag=Approve>Approve/</a><a href=approve.php?id=$row[0]&&flag=Disapprove> Disapprove </a></td>";*/
                echo " <td><a href=delete.php?did=$row[0]&&flag=Delete> Delete </a></td>";
                echo "</tr>";
            }
        ?>
       
    </tbody>
</table>
</form>
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
    <!-- <<Attched Javascripts>> -->
<script type="text/javascript" src="admin/table1/nav/js/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="admin/table1/nav/js/jquery.sudoSlider.min.js"></script>
<script type="text/javascript" src="admin/table1/nav/js/global.js"></script>
<script type="text/javascript" src="admin/table1/nav/js/modernizr.js"></script>

</body>
</html>