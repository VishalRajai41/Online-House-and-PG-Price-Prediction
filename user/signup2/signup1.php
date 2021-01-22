<?php
include("connect.php");
/*echo $_SESSION['fname'];
echo $_SESSION['lname'];
echo $_SESSION['email'];
echo $_SESSION['password'];
echo $_SESSION['con_password'];
echo $_SESSION['username'];*/
$firstname=@$_SESSION['fname'];
$lastname=@$_SESSION['lname'];
$uemail=@$_SESSION['email'];
$upassword=@$_SESSION['password'];
$c_password=@$_SESSION['con_password'];
$user_name=@$_SESSION['username'];
if (isset($btnsubmit)) {

   # code...
   $path="../Upload/".$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"Upload/".$_FILES['file']['name']);

          mysqli_query($con,"insert into user_m(fname,lname,email,password,cpassword,uname,state,city,address,postalcode,phone,photo,u_type,approval) values('$firstname','$lastname','$uemail','$upassword','$c_password','$user_name','$listcategory','$city','$address','$postalcode','$phone','$path','$u_type','')") or die(mysqli_error($con));
    unset($_SESSION['fname']);
    unset($_SESSION['lname']);
    unset($_SESSION['email']);
    unset($_SESSION['password']);
    unset($_SESSION['con_password']);
    unset($_SESSION['username']);
    header("location:../Login");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Sign Up</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="jquery-3.2.1.js"></script>
</head>
<body>
	
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
		
    <div class="card card-5">
      <div class="card-heading">
        <h2 class="title">Personal Information</h2>
      </div><br>
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
            <div class="name"> Postal Code</div> 
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
         <div>
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
         </div>
         <div>
           <!--<input type="submit" value="Submit" name="btnsubmit"><br><br>-->
           <center><button class="btn btn--radius-2 btn--red" name="btnsubmit" type="submit">Submit</button></center>
         </div>
			
		</form>
  </div>
	</div>
</div>
</div>

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
</body>
</html>