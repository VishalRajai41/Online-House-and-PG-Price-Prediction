<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <script language="Javascript" src="jquery.js"></script>
    <!--<script type="text/JavaScript" src='state.js'></script>-->
    <script type="text/javascript">
        
      /*  var citiesByState = {
        Odisha: ["Bhubaneswar","Puri","Cuttack"],
        Maharashtra: ["Mumbai","Pune","Nagpur"],
        Kerala: ["kochi","Kanpur"]
        }
        function makeSubmenu(value){
            if (value.length==0) {
                document.getElementById("city").innerHTML="<option></option>";
            }
            else
            {
                var citiesoption="";
                for(cityId in citiesByState[value])
                {
                    citiesoption +="<option>"+citiesByState[value][cityId]+"<option>";
                }
                document.getElementById("city").innerHTML = citiesoption;
            }

        }                    
        function resetSelection() {
            document.getElementById("country").selectedIndex = 0;
            document.getElementById("city").selectedIndex = 0;
}*/
    </script>


    <title>Sign Up Form </title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="vendor/jquery-ui/jquery-ui.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body onload="resetSelection()">

    <div class="main">

        <section class="signup">
            <!-- <img src="images/signup-bg.jpg" alt=""> -->
            <div class="container">

                <div class="signup-content">

                    <form method="POST" id="signup-form" class="signup-form">
                        
                        <div class="form-row">

                            <div class="form-group">
                                <label for="first_name">First name</label>
                                <input type="text" class="form-input" name="first_name" id="first_name" />
                            </div>
                            <div class="form-group">
                                <label for="last_name">Last name</label>
                                <input type="text" class="form-input" name="last_name" id="last_name" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group form-icon">
                                <label for="birth_date">Birth date</label>
                                <input type="text" class="form-input" name="birth_date" id="birth_date" placeholder="MM-DD-YYYY" />
                            </div>
                            <div class="form-radio">
                                <label for="gender">Gender</label>
                                <div class="form-flex">
                                    <input type="radio" name="gender" value="male" id="male" checked="checked" />
                                    <label for="male">Male</label>
    
                                    <input type="radio" name="gender" value="female" id="female" />
                                    <label for="female">Female</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Phone number</label>
                            <input type="number" class="form-input" name="phone_number" id="phone_number" />
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-input" name="password" id="password"/>
                            </div>
                            <div class="form-group">
                                <label for="re_password">Repeat your password</label>
                                <input type="password" class="form-input" name="re_password" id="re_password"/>
                            </div>
                        </div>
                        <div class="form-text">
                            <a href="#" class="add-info-link"><i class="zmdi zmdi-chevron-right"></i>Additional info</a>
                            <div class="add_info">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-input" name="email" id="email"/>
                                </div>
                                <div class="form-group">
                                    <label for="country">State</label>
                                    <div class="select-list">
                                        <select name="country" id="country" onchange='selct_district(this.value)'>
                                            <!--<option value="" disabled="selected">Choose State</option>
                                            <option>Odisha</option>
                                            <option>Maharashtra</option>
                                            <option>Kerala</option>-->
                                            <!--<option value="UK">English</option>
                                            <option value="VN">Viet Nam</option>-->
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="city">City</label>
                                    <div class="select-list">
                                        <select name="city" id="city">
                                            <!--<option value="" disabled="selected">Choose City</option>
                                            <option></option>
                                            <option value="IC">IceLand</option>
                                            <option value="canada">Canada</option>-->
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" class="form-submit" value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </section>

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/jquery-ui/jquery-ui.min.js"></script>
    <script src="vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>