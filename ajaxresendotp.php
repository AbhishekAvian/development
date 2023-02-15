<?php
include_once('include/config.php');
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i');
$referer = $_SERVER['HTTP_REFERER'];
$ip=$_SERVER['REMOTE_ADDR'];
@extract($_POST);
session_start();
// print_r($_POST);
//print_r($_SESSION);
//exit;
$utm_source = ($utm_source) ? $utm_source : '0';
$utmMedium = ($utm_medium) ? $utm_medium : '0';
$utmCompaign = ($utm_campaign) ? $utm_campaign : '0'; 
$utmContent = ($utm_content) ? $utm_content : '0'; 
$utmTerm = ($utm_term) ? $utm_term : '0'; 
$from = "AVIVAi";
$message=rawurlencode("Dear Customer, $_SESSION[otp] is the OTP. This is valid for 10 minutes. Please don’t share your OTP with anyone for security reasons. Team Aviva Life Insurance");
       $url='https://http.myvfirst.com/smpp/sendsms?username=Avivahtptrns&password=Qle4v987&to=91'.$_SESSION['mobile_number'].'&from='.$from.'&text='.$message.'&dlr-mask=19&dlr-url';
echo '<div class="alert alert-success alert-dismissible fade show"><strong>OTP Sent to your Registered Number<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';

?>