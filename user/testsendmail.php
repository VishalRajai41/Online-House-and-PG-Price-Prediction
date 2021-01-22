<?php

$to      = 'rajaivishal1998@gmail.com';
$subject = 'Otp Verification';
$otp = rand(100000,999999);
$message = $otp;
$headers = 'From: rajaivishal41@gmail.com';

$result = @mail($to, $subject, $message,$headers);
if( $result )
   echo 'Success';
else
   echo 'Fail';
﻿?>