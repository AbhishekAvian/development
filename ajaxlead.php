<?php
include_once('include/config.php');
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i');
$referer = $_SERVER['HTTP_REFERER'];
$ip=$_SERVER['REMOTE_ADDR'];
@extract($_POST);
// print_r($_POST);
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
   $sql_ens = "insert into protection_plus_lead set name='$name', email='$email', phone='$mobile_number', location_code='$city',location='$other_loc', annual_income='$annual_income', posted_url='$referer', utm_source = '$utm_source', utm_medium='$utmMedium', utm_compaign='$utmCompaign', utm_term='$utmTerm', utm_content='$utmContent', posted_date='$date', posted_date_hrs='$date', posted_ip='$ip', token='$token', enquiry_type='1'";
   //echo $sql_ens;
   //exit;
   $qry = mysqli_query($conn,$sql_ens); 
    if($qry){
        
// echo '<div class="alert alert-success alert-dismissible fade show">Form has been Submitted Successfully<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
       $new_url='thank-you.php'; 
 echo '<script>
    window.location = "'.$new_url.'";
        </script>'; 
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://rsplwebserver.com/AVIVA_API_UAT/api/MAM/',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'[
  {
    "campaign_code": "'.$utmCompaign.'",
    "name": "'.$name.'",
    "mobile": "'.$mobile_number.'",
    "email": "'.$email.'",
   "source": "'.$utm_source.'",
    "sub_source": "0",
    "lead_category": "'.$utmCompaign.'",
    "lead_posted_date": "'.$date.'",
    "unique_id": "'.$token.'",
   "Posted_url": "'.$referer.'",
    "Utm_campaign": "'.$utmCompaign.'",
   "utm_source": "'.$utm_source.'",
    "utm_medium": "'.$utmMedium.'",
    "income": "'.$annual_income.'"
  }
]
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;        
 

}
 }
} } else {
    echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Incorrect mobile number /invalid Mobile format.<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; 
}
 exit;
?>