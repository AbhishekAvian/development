<?php
include_once('include/config.php');
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d H:i');
$referer = $_SERVER['HTTP_REFERER'];
$referer1='https://www.avivaindia.com/aviva-ulip-sip-plan/';
$ip=$_SERVER['REMOTE_ADDR'];
@extract($_POST);
session_start();
//print_r($_POST);
//print_r($_SESSION);
// exit;
$utm_source = ($utm_source) ? $utm_source : '0';
$utmMedium = ($utm_medium) ? $utm_medium : '0';
$utmCompaign = ($utm_campaign) ? $utm_campaign : '0'; 
$utmContent = ($utm_content) ? $utm_content : '0'; 
$utmTerm = ($utm_term) ? $utm_term : '0'; 
$anualapiIncome = (int)$_SESSION['api_income'];
$phoneLength= strlen($mobile_number);
if($otp_usr == $_SESSION['otp']) {
 $curl = curl_init();
            curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://api-in21.leadsquared.com/v2/OpportunityManagement.svc/Capture?accessKey=u$re10bc9410be4a93de89863a622ca8b9a&secretKey=03d3e0aebc7dc533aee2729ffbd7890fafe52e4c',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'POST',
            CURLOPT_POSTFIELDS =>'{
            "LeadDetails": [
            {
            "Attribute": "EmailAddress",
            "Value": "'.$_SESSION['email'].'"
            },
            {
                "Attribute": "Phone",
                "Value": "'.$_SESSION['mobile_number'].'"
            },
            {
                "Attribute": "FirstName",
                "Value": "'.$_SESSION['name'].'"
            },
            {
                "Attribute": "mx_City",
                "Value": "'.$_SESSION['city'].'"
            },
            {
                "Attribute": "mx_Annual_Income",
                "Value": "'.$anualapiIncome.'"
            },
            {
                "Attribute": "mx_UTM_TERM",
                "Value": "'.$utmTerm.'"
            },
            {
                "Attribute": "mx_UTM_Source",
                "Value": "'.$utm_source.'"
            },
            {
                "Attribute": "SourceMedium",
                "Value": "'.$utmMedium.'"
            },
            {
                "Attribute": "SourceCampaign",
                "Value": "'.$utmCompaign.'"
            },
            {
                "Attribute": "SourceContent",
                "Value": "'.$utmContent.'"
            },
            {
                "Attribute": "mx_Landing_Page_URL",
                "Value": "https://www.avivaindia.com/aviva-ulip-sip-plan/"
            },
            {
                "Attribute": "Source",
                "Value": "Landing Page"
            },
            {
                "Attribute": "mx_Sub_Source",
                "Value": "API"
            },
            {
            "Attribute": "SearchBy",
            "Value": "ProspectId"
            }
            ],
            "Opportunity": {
            "OpportunityEventCode": 12004,
            "OpportunityNote": "Opportunity capture api overwrite",
            "UpdateEmptyFields": true,
            "DoNotPostDuplicateActivity": true,
            "DoNotChangeOwner": true,
            "Fields": [
            {
            "SchemaName": "mx_Custom_1",
            "Value": "Opportunity-Test"
            },
            {
            "SchemaName": "mx_Custom_2",
            "Value": "Prospecting"
            },
            {
            "SchemaName": "mx_Custom_5",
            "Value": "Prospecting"
            },
            {
            "SchemaName": "Status",
            "Value": "Open"
            }
            ]
            }
            }',
            CURLOPT_HTTPHEADER => array(
            'Content-Type: application/json'
            ),
            ));
    
            $response = curl_exec($curl);
            curl_close($curl);
            
    $sql_ens = "insert into guranteed_income_plan_tbl set name='$_SESSION[name]',  email='$_SESSION[email]', phone='$_SESSION[mobile_number]', location_code='$_SESSION[city]',location='$_SESSION[other_loc]', annual_income='$_SESSION[annual_income]', posted_url='$referer', utm_source = '$utm_source', utm_medium='$utmMedium', utm_compaign='$utmCompaign', utm_term='$utmTerm', utm_content='$utmContent', posted_date='$date', posted_date_hrs='$date', posted_ip='$ip', token='$_SESSION[token]', enquiry_type='1'";
  
   $qry = mysqli_query($conn,$sql_ens); 
  $new_url='thank-you.php'; 
 echo '<script>
    window.location = "'.$new_url.'";
        </script>'; 
 } else {
    echo '<div class="alert alert-danger alert-dismissible fade show"><strong>Invalid OTP.<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>';
}
 exit;
?>
