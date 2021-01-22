<?php
#create cookie
setcookie('last_visit',date("G:i -m/d/y"),time()+60);
#check if cookie exists
if(isset($_COOKIE['last_visit'])){
$visit = $_COOKIE['last_visit'];
echo "Welcome back, Your last visit was: " .$visit;
}
else{
#no cookies
echo "Welcome, This is your first visit" ;
}
?>