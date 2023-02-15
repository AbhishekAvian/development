<?php
include_once('include/config.php');
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i');
$referer = $_SERVER['HTTP_REFERER'];
$ip=$_SERVER['REMOTE_ADDR'];
//$otp = mt_rand(100000,999999);
@extract($_POST);
session_start();
// print_r($_POST);
//exit;
//print_r($_SESSION);
$annualIncome = !empty($_POST['annual_income'])?$_POST['annual_income']:'';
 $result_explode = explode('|', $annualIncome);
 $annual_income = $result_explode[0];
 $apiAnnual = $result_explode[1];
$utm_source = $_GET['utm_source'];
$utmMedium = $_GET['utm_medium'];
$utmCompaign = $_GET['utm_campaign'];
$utmContent = $_GET['utm_content'];
$utmTerm = $_GET['utm_term'];

$utm_source = ($utm_source) ? $utm_source : '0';
$utmMedium = ($utm_medium) ? $utm_medium : '0';
$utmCompaign = ($utm_campaign) ? $utm_campaign : '0';
$utmContent = ($utm_content) ? $utm_content : '0';
$utmTerm = ($utm_term) ? $utm_term : '0';
$phoneLength= strlen($mobile_number);
if($city == 'Others' && $other_loc=='' ){
echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Please Enter Other Location<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
exit;
   }
if($phoneLength == 10){
 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Invalid email format<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
} else {
if($name!='' &&  $mobile_number!='' && $email!='' && $annual_income!='' && $city!='' && $token!=''){
   $_SESSION['name'] = $name;
   $_SESSION['mobile_number'] = $mobile_number;
   $_SESSION['email'] = $email;
   $_SESSION['annual_income'] = $annual_income;
     $_SESSION['api_income'] = $apiAnnual;
   $_SESSION['token'] = $token;
   $_SESSION['city'] = $city;
    $_SESSION['otp']=$otp;
    $_SESSION['other_loc']=$other_loc;

  echo '<script>
      $(document).ready(function() {
       $(".first_form").css("display", "none");
       $(".second_form").css("display", "block");

   });
   </script>';

 $from='AVIVAc';

//   $message=rawurlencode("Dear Customer, $otp is the OTP for registering into Aviva Life Insurance Whatsapp Service. This is valid for 10 minutes. Please don’t share your OTP with anyone for security reasons. Team Aviva Life Insurance");
//echo $otp;
$message=rawurlencode("Dear Customer, $otp is the OTP to verify your mobile number for a call-back from our Insurance Expert. This is valid for 10 mins. Please do not share your OTP with anyone. -Team Aviva Life Insurance");
//    $message=rawurlencode("Dear Customer, $otp is the OTP to verify your mobile number for a call-back from our Insurance Expert. This is valid for 10 mins. Please do not share your OTP with anyone. -Team Aviva Life Insurance");
       $url='https://http.myvfirst.com/smpp/sendsms?username=Avivahtptrns&password=Qle4v987&to=91'.$_SESSION['mobile_number'].'&from='.$from.'&text='.$message.'&dlr-mask=19&dlr-url';
//echo $url;
   //$sql_ens = "insert into protection_plus_lead set name='$name', email='$email', phone='$mobile_number', location_code='$city', annual_income='$annual_income', posted_url='$referer', utm_source = '$utm_source', utm_medium='$utmMedium', utm_compaign='$utmCompaign', utm_term='$utmTerm', utm_content='$utmContent', posted_date='$date', posted_date_hrs='$date', posted_ip='$ip', token='$token', enquiry_type='1'";
   //echo $sql_ens;
   //exit;
   //$qry = mysqli_query($conn,$sql_ens);

       $ch = curl_init();
               curl_setopt($ch, CURLOPT_URL, $url);
               curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
               $output = curl_exec($ch);
               curl_close($ch);


 }
} } else {
    echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Incorrect mobile number /invalid Mobile format.<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}
 exit;
?>

