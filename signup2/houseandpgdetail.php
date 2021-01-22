<?php
include("connect.php");

if(empty($_SESSION['user']))
    header("location:../Login/index.php");

if (isset($btnsubmit)) {

   # code...
    $path="../Upload/".$_FILES['file']['name'];
    move_uploaded_file($_FILES['file']['tmp_name'],"Upload/".$_FILES['file']['name']);

          mysqli_query($con,"insert into house_and_pg_price(house_pg_name,house_pg_state,house_pg_city,house_pg_type,house_pg_room,house_pg_price,house_pg_detail,house_pg_photo) values('$hpname','$listcategory','$city','$house','$room','$hpprice','$hpdetail','$path')") or die(mysqli_error($con));
    
    header("location:profile.php");    
    //echo $room;
}
?>
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
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>House And Pg Detail</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="jquery-3.2.1.js"></script>
</head>
<body>
  
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
                <option disabled="disabled" selected="selected">Select House or Pg</option>
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
            <div class="name">Select Room</div>
            <div class="value">
              <select name="room" class="select-css" id="cat">
                <option disabled="disabled" selected="selected">Select Room Type</option>     
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
          <div class="form-row">
            <div class="name">Add House Or PG Details</div>
            <div class="value">
              <textarea rows="4" cols="15" name="hpdetail"></textarea><br><br>
            </div>
          </div>
         <div class="form-row m-b-55">
            <div class="name">Photo Upload</div>
            <div class="value">
              <div class="row row-space">
                <div class="col-2">
                  <div class="input-group-desc">
                    <input class="input--style" type="file" title="search image" id="file" name="file" onchange="show(this)" >
                    <!--<span  id="fname_error_message"></span>-->
                    <!--<label class="label--desc"> First Name</label>-->
                  </div>
                </div>
                <div class="col-2">
                  <div class="input-group-desc">
                    <!--<input class="input--style-5" type="text" id="form_sname" name="lname" required="">-->
                    <img id="user_img" height="80" width="100" style="border:solid" />
                    <!--<span id="sname_error_message"></span>
                    <label class="label--desc">Last Name</label>-->
                  </div>
                </div>
                
              </div>
              
            </div>
         </div>
         <div>
           
           <center><button class="btn btn--radius-2 btn--red" name="btnsubmit" type="submit">Add Detail</button></center>
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
</body>
</html>