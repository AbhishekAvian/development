<?php
include_once('include/config.php');
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i');
$referer = $_SERVER['HTTP_REFERER'];
$ip=$_SERVER['REMOTE_ADDR'];
@extract($_POST);

$phoneLength= strlen($Rmobile);
if($phoneLength == 10){
  
if($Rname!='' &&  $Rmobile!=''){
   $sql_ens = "insert into request_call_tbl set name='$Rname', mobile='$Rmobile', posted_url='$referer', posted_date='$date', posted_ip='$ip'";
   //echo $sql_ens;
   //exit;
   $qry = mysqli_query($conn,$sql_ens); 
    if($qry){

$curl = curl_init();
curl_setopt_array($curl, array(
CURLOPT_URL => 'https://gurivrss.avivaindia.com/IVR_ws/AVIVA.asmx/Click2Call?InputJson=%7B%22CustomerName%22:%22'.$Rname.'%22,%22MobileNo%22:%22'.$Rmobile.'%22,%22EmailId%22:%22%22%7D',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
));
$response = curl_exec($curl);
curl_close($curl);
//echo $response;

        
 echo '<div class="alert alert-success alert-dismissible fade show">Form has been Submitted Successfully<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
    
}
 }
 } else {
    echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Incorrect mobile number /invalid Mobile format.<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>'; 
}
 exit;
?>