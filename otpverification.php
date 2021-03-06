<?php
	include("connect.php");
	@$otp=$_SESSION['otp'];
	if (isset($btnverify)) {
		# code...
		if($otpverification==$otp)
		{
			header("location:signup1.php");
		}
		else
			echo "Please Enter Valid Otp";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Otp Verification</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="otp/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="otp/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="otp/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="otp/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="otp/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="otp/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="otp/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="otp/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="otp/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="otp/css/util.css">
	<link rel="stylesheet" type="text/css" href="otp/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-color: black">
			<div class="wrap-login100 p-l-110 p-r-110 p-t-62 p-b-33">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-53">
						Otp Verification
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Otp is required">
						<input class="input100" type="text" name="otpverification" placeholder="Enter Otp 6 Dgit" >
						<span class="focus-input100"></span>
					</div>
					
					<div class="container-login100-form-btn m-t-17">
						<button class="login100-form-btn" name="btnverify">
							Verify
						</button>
					</div>

					<div class="w-full text-center p-t-55">
						<span class="txt2"></span>						
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="otp/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="otp/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="otp/vendor/bootstrap/js/popper.js"></script>
	<script src="otp/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="otp/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="otp/vendor/daterangepicker/moment.min.js"></script>
	<script src="otp/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="otp/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="otp/js/main.js"></script>

</body>
</html>