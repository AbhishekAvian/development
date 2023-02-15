<?php
include('include/config.php');
$ip = $_SERVER['REMOTE_ADDR'];
$referer = $_SERVER['HTTP_REFERER'];
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$datehrs=date('Y-m-d H:i');
$rand = rand(10,10000000000);
//trace($_GET);
session_start();

//print_r($_SESSION);
if(isset($_POST['otp_usr'])){
   $otp = (!empty($_POST['otp_usr']))?$_POST['otp_usr']:'';
 if($otp == $_SESSION['otp']){
  $SuccMsgotp = "OTP Successfully Verified";
     echo '<script>
     alert("Form Submitted Successfully");
      document.ready(window.setTimeout(location.href = "index1.php",5000));
   </script>';
     $sql_ens = "insert into protection_plus_lead set name='$_SESSION[name]', email='$_SESSION[email]', phone='$_SESSION[mobile]', location_code='$_SESSION[city]', annual_income='$_SESSION[annual_income]', posted_url='$referer', utm_source = '$_SESSION[utm_source]', utm_medium='$_SESSION[utm_medium]', utm_compaign='$_SESSION[utm_compaign]', utm_term='$_SESSION[utm_term]', utm_content='$_SESSION[utm_content]', posted_date='$date', posted_date_hrs='$date', posted_ip='$ip', token='$_SESSION[token]', enquiry_type='1'";
   //echo $sql_ens;
   //exit;
   $qry = mysqli_query($conn,$sql_ens); 
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
    "campaign_code": "'.$_SESSION[utm_compaign].'",
    "name": "'.$_SESSION[name].'",
    "mobile": "'.$_SESSION[mobile].'",
    "email": "'.$_SESSION[email].'",
   "source": "'.$_SESSION[utm_source].'",
    "sub_source": "0",
    "lead_category": "'.$_SESSION[utm_compaign].'",
    "lead_posted_date": "'.$date.'",
    "unique_id": "'.$_SESSION[token].'",
   "Posted_url": "'.$referer.'",
    "Utm_campaign": "'.$_SESSION[utm_compaign].'",
   "utm_source": "'.$_SESSION[utm_source].'",
    "utm_medium": "'.$_SESSION[utm_medium].'",
    "income": "'.$_SESSION[annual_income].'"
  }
]
',
  CURLOPT_HTTPHEADER => array(
    'Content-Type: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);

  }else{
      $errMsgotp = "Please Enter a Valid OTP";
       }
}

if(isset($_POST['resend_otp'])){
    $from = "AVIVAi";
    $message= rawurlencode("Dear Customer, $_SESSION[otp] is the OTP. This is valid for 10 minutes. Please don’t share your OTP with anyone for security reasons. Team Aviva Life Insurance");
    $url='https://http.myvfirst.com/smpp/sendsms?username=Avivahtptrns&password=Qle4v987&to=91'.$_SESSION['mobile'].'&from='.$from.'&text='.$message.'&dlr-mask=19&dlr-url';
    $resendSuccess = "OTP Sent on Registered Mobile Number.Will be Valid for 10 minutes Only";
     $errMsgotp = "";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Aviva Protection Plus Life Insurance Plans Online | Best Life Insurance Policy in India</title>
	<meta name="keywords" content="Life Insurance, life insurance policy, life insurance company, best life insurance plan" />
      <meta name="description" content="Aviva India, a leading life insurance company that offers a range of life insurance products, including term insurance, investments plans and more, to help you protect you and your family. Explore now! "/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
      <meta name="document-type" content="Public" />
      <meta name="document-rating" content="Safe for Kids" />
      <meta name="Expires" content="never" />
      <meta name="HandheldFriendly" content="True" />
      <meta name="YahooSeeker" content="Index,Follow" />
      <meta name="geo.region" content="IN" />
      <meta name="address" content="401-A, 4th Floor,Block A, DLF Cyber Park,Sector-20, NH-8, Gurugram,Haryana-122 016, India"/>
      <meta name="copyright" content="Copyright 2022 Aviva India" /> 
      <meta name="distribution" content="global" />
      <meta name="language" content="english" /> 
      <meta name="rating" content="general" />
      <meta name="subject" content="Best Life Insurance Policy in India" /> 
      <meta name="robots" content="ALL" /> 
      <meta name="revisit-after" content="2 days" />
      <meta name="generator" content="Aviva India" />
      <meta itemprop="title" content="Aviva Protection Plus Life Insurance Plans Online | Best Life Insurance Policy in India" />
      <meta itemprop="description" content="Aviva India, a leading life insurance company that offers a range of life insurance products, including term insurance, investments plans and more, to help you protect you and your family. Explore now!"/>
      <meta name="author" content="Aviva India" />
      <meta name="publisher" content="Aviva India"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="og:type" content="article" />
      <meta name="og:title" content="Aviva Protection Plus Life Insurance Plans Online" />
      <meta name="og:description" content="Aviva India, a leading life insurance company that offers a range of life insurance products, including term insurance, investments plans and more, to help you protect you and your family. Explore now!">
      <meta property="og:image:width" content="250"/>
      <meta property="og:image:height" content="250"/>
      <meta name="og:site_name" content="Aviva India"/>
      <meta property="og:url" content="https://www.avivaindia.com/">
      <meta name="og:image" content="https://www.avivaindia.com/sites/all/themes/heartcare/css/images/avivaLogo.png" />
      <meta property="og:image:url" content="https://www.avivaindia.com/sites/all/themes/heartcare/css/images/avivaLogo.png" />
      <meta name="twitter:card" content="summary"/>
      <meta name="twitter:desc" content="Aviva India, a leading life insurance company that offers a range of life insurance products, including term insurance, investments plans and more, to help you protect you and your family. Explore now!"/>
      <meta name="twitter:title" content="Aviva Protection Plus Life Insurance Plans Online"/>
      <meta name="twitter:image" content="https://www.avivaindia.com/sites/all/themes/heartcare/css/images/avivaLogo.png">
      <meta property="twitter:url" content="https://www.avivaindia.com/">
      <link rel="shortcut icon" href="https://www.avivaindia.com/sites/all/themes/heartcare/images/favicon.ico" type="image/vnd.microsoft.icon" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
 <script src='//cdnt.netcoresmartech.com/smartechclient.js'></script>  
    <script>
        smartech('create', 'ADGMOT35CHFLVDHBJNIG50K968QKS27DD5CH7U4IATV5NA9OVQH0' , "tin");
        smartech('register', 'd286598915eb6ad18dc1f2a079d2e1ed');
        smartech('identify', '');      
    </script> 
    <style>
    #otp_usr{
   width:50%!important;
   }
        .timer_sec{
      margin-top: 14px;
    color: #3777c8;
    font-size: 1.2em;
            font-weight: 600;
        }
    </style>
</head>
<body>
	<div class="first">
	    	
		<div class="social">
		    
			<ul class="links">
			    <img src="img/download.png" class="aviva-logo" alt="Aviva India" title="Aviva India">
				<a href="https://www.facebook.com/AvivaIndia" class="social" target="blank"><i class="fa fa-facebook-f"></i></a>
					<a href="https://twitter.com/AvivaIndia" class="social" target="blank"><i class="fa fa-twitter"></i></a>
					<a href="" class="social"><i class="fa fa-linkedin"></i></a>
					<a href="https://www.youtube.com/user/aviva" class="social" target="blank"><i class="fa fa-youtube"></i></a>
					</ul>
					<div class="clear"></div>
		</div>
		<div class="inner_first">
			<div class="left">
			  
				<h1 class="desktop-bann">Aviva Protection Plus <br><span>(A Team Plan with Return of Premium)</span></h1>
			    <img src="img/1.png" alt="Aviva Life Insurance" title="Aviva Life Insurance" class="desktop-bann">
			    <img src="img/aviva-mobile1.jpg" alt="Aviva Life Insurance" title="Aviva Life Insurance" class="mobile-bann">
			    
			</div>
				<div class="text mobile-text">
			<p>Introducing a Term plan that gives you more than you expected. Get  <strong>#TermSeZyaada</strong> </p>
		</div>
            
			
            <div class="right second_form">
				<form method="post" id="quick_enquiry2">
        <?php if ( !empty( $SuccMsgotp ) ): ?><div class = "alert alert-success"><?php echo $SuccMsgotp;
    ?></div><?php endif; ?>             
  <?php if ( !empty( $errMsgotp ) ): ?><div class = "alert alert-danger"><?php echo $errMsgotp;
    ?></div><?php endif; ?>
   <?php if ( !empty( $resendSuccess ) ): ?><div class = "alert alert-success"><?php echo $resendSuccess;
    ?></div><?php endif; ?>
                    
    
					<img src="img/download.png" class="logo" alt="Aviva India" title="Aviva India">
					<br/><br/>
					 <div class="form-group">
    <label for="otp" style="font-weight: 600;">Enter OTP</label>
    <input type="text" class="form-control" id="otp_usr" name="otp_usr" aria-describedby="emailHelp" placeholder="Please Enter OTP" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="6" minlength="6">
                         <div class="timer_sec" id="timer"></div>
<!--         <div id="secondtimer"></div>-->
<!--    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
  </div>
<!--                    <input type="submit" name="submitform1" value="Submit" id="submitform1" style="width: 100%;" class="submit">-->
			<button type="submit" name="submit_otp" class="btn btn-success submit">Submit</button>		
			<button type="submit" name="resend_otp" class="btn btn-primary submit" id="resendotp_frm">Resend OTP</button>		
					<div class="clear"></div>
				
				</form>
			</div>
			<div class="clear"></div>
		</div>
		<div class="text desktop-text">
			<p>The most trust-worthy brand with 98.39% claim settlement ratio. </p>
		</div>
	</div>

	<!-- *******************2nd************************ -->

	<div class="second">
		<div class="se_left">
			<img src="img/Vector-Smart-Object-copy.png" alt="Aviva Protection Plus" title="Aviva Protection Plus">
			<div class="text_a">
				<h3>About Aviva Protection Plus</h3>
				<span>(A Term Plan with Return of Premium)</span>
				<p>Aviva Protection Plus is the simplest form of life insurance plan which is flexible and affordable.   It not only provides financial protection to your loved ones in case of any unforeseen circumstances, but also the maturity sum assured on surviving the policy term depending on the option chosen. </p>
			</div>
		</div>
		<div class="se_right">
			<div class="video_se">
			<img src="img/3.png" id="open_v" alt="Aviva Promotion Video" title="Aviva Promotion Video">
			</div>
		</div>
		<div class="clear"></div>
	</div>

<script type="text/javascript">
$(document).ready(function(){
  $("#open_v").click(function(){
  	$('.overlay_m').show();
  	$('.modal_a').show();
   // alert('hi');
  });
  $(".close").click(function(){
  	$('.overlay_m').hide();
  	$('.modal_a').hide()
   // alert('hi');
  });
});
</script>
	<!-- ***********************3rd************************************ -->
	<div class="third">
		<div class="inner_third">
			<h3 class="key-benefit">Key Benefits of buying Aviva Protection Plus</h3>
			<div class="third_left">
				<img src="img/8.png" class="ab" alt="Key Benefits of buying Aviva Protection Plus" title="Key Benefits of buying Aviva Protection Plus">
				<div class="parent">
				<div class="boxes">
					<img src="img/4.png" title="Return of Premium" alt="Return of Premium">
					<h3 class="box-head">Return of Premium</h3>
					<p>A  Term insurance plan with Return of premium benefit</p>
<!--					<span class="bedge">New Feature</span>-->
				</div>
				<div class="boxes">
					<img src="img/5.png" title="Enriched Protection" alt="Enriched Protection">
					<h3 class="box-head">Enriched Protection</h3>
					<p>Choose your plan basis your needs with flexible Term + Return of premium proportion</p>
                    <span class="bedge">Unique Feature</span>
				</div>
				<div class="boxes">
					<img src="img/6.png" alt="Savings Booster" title="Savings Booster">
					<h3 class="box-head">Savings Booster</h3>
					<p>Flexibility to choose Return of Premiums @ 110%, 120%, and 125% on maturity</p>
				</div>
				<div class="boxes">
					<img src="img/7.png" title="Tax benefit" alt="Tax benefit ">
					<h3 class="box-head">Tax benefit  </h3>
					<p>Save up to Rs. 1.5 lakhs under Sections 80C and 10 (10D).</p>
				</div>
				<div class="clear"></div>
				</div>
			</div>
			<div class="third_right">
				<img src="img/9.png" class="img1" alt="Family Plan" title="Family Plan">
			</div>

			</div>
	</div>

	<!-- ****************************four***************** -->
	<div class="four">
		<div class="inner_four">
			<div class="acc-main">
				<div class="container">
					<div class="kind">
						<h4>Got question? We'd love to answer</h4>
						<div class="accordion_container">
							<div class="accordion-main">
								<div class="accordion_head">What are the features Of The Best Term Life Insurance With Return Of Premium?<span class="plusminus">+</span></div>
								<div class="accordion_body" id="a1" style="display: none;">
							
<p><strong>1.</strong> Cost-friendly - Though TROP may be a little more expensive as compared to a regular term plan. But the overall benefits, retuns of premiums paid, and tax benefits make it very affordable.</p>
  <p><strong>2.</strong>  Options for paying the premium - As an insurer, you can select the suitable sum assured under a term plan with ROP. Moreover, you can also choose the premium payment option, such as</p>
<ul class="faq-ul">
<li>One-Time Payment</li>
<li>Regular Pay</li>
<li>A fixed number of instalments under the limited pay option</li>
</ul>

<p><strong>3.</strong>  Surrender Value</p>
<p>After buying the TROP, if a policyholder stops premium payments or surrenders the plan, the policyholder will get a surrender value depending on the option of premium payment chosen.</p>
								</div>
							</div>
							<div class="accordion-main">
								<div class="accordion_head">Why Choose Aviva Term Life Insurance With Return Of Premium?<span class="plusminus">+</span></div>
								<div class="accordion_body" style="display: none;">
									<ul class="faq-ul">
<li>One of the most trustworthy brands</li>
<li>Impressive claim settlement ratio</li>
<li>Fast claim approval</li>
<li>Flexibility to choose the nature and level of protection</li>
</ul>
								</div>
							</div>
							<div class="accordion-main">
								<div class="accordion_head">How can I Buy Aviva Protection Plus?<span class="plusminus">+</span></div>
								<div class="accordion_body" style="display: none;">
									<p><strong>1</strong> Select the nature of protection required -</p>
<ul class="faq-ul">
<li>Enriched Protection Option</li>
<li>Savings Booster Option</li>
</ul>
<p><strong>2.</strong> Select the level of protection you want</p>
<p><strong>3.</strong> Choose the period for which you want protection</p>
<p><strong>4.</strong> Pick the Premium frequency</p>
<p><strong>5.</strong> Work out the premium payable along with our Financial Planning Advisor</p>
								</div>
							</div>
							<div class="accordion-main">
								<div class="accordion_head">How to choose the best Savings Plans for your needs? <span class="plusminus">+</span></div>
								<div class="accordion_body" style="display: none;">
									<p>The following points will help you select the best suited Savings Plans for your specific goals.<p>

<ul class="faq-ul"><li>A plan that helps you save for your specific need.</li>
<li>A plan should offer investment options basis your risk appetite i.e. from guaranteed returns to investments in equity markets.</li>
<li>Offer tax exempt returns and offer tax benefits on premiums paid.</li></ul>
								</div>
							</div>
							<div class="accordion-main">
								<div class="accordion_head">What is a protection and saving plan? <span class="plusminus">+</span></div>
								<div class="accordion_body" style="display: none;">
									<p>A protection and savings plan is specifically made for those who wish to have the benefits of regular payouts along with extending financial security to your loved ones whenever you are not around.</p>
								<p>Investing in these plans help you ensure your family's financial security in case of your untimely demise, while the regular payouts through these plans enable you fulfill your life's other goals such as buying a car, travelling the world, starting or expanding your business, your child's education, or your retirement.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="four_right">
				<img src="img/10.png" title="Aviva Protection Plus" alt="Aviva Protection Plus">
			</div>
			<div class="clear"></div>
		</div>
	</div>

	<!-- **********************footer********************* -->
	<div class="footer">
		<p> The name of the Aviva Product/Plan does not in any way indicate the quality of the insurance contract, its future prospects or returns. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. Riders are not mandatory and are available for a nominal extra cost. Please read respective rider brochure before taking a decision.</p>
		<p> Unit Linked Life Insurance products are different from traditional insurance products and are subject to market risks. Please know the associated risks and the applicable charges from your sales representative or the intermediary or policy document issued by the insurance company. The premium paid in Unit Linked life insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of the fund and factors influencing the capital market and the insured is responsible for his/ her decisions.</p>
		<p>The various funds offered under Unit Linked Insurance contract are the names of the funds and do not in any way indicate the quality of these plans, their future prospects and returns. Unit Linked Funds are subject to market risks and there is no assurance or guarantee that the objective of the investment fund will be achieved. Past performance of the investment funds do not indicate the future performance of the same.</p>
		<p class="aviva-footborser">BEWARE OF SPURIOUS/FRAUD. IRDAI in not Involved in activities like selling Insurance policies, announcing bonus or investment of premiums. Public receiving Such phone calls are requested to lodge a complaint.</p>
	<p>Aviva Trade Logo displayed above belongs to Aviva Brands Limited and is used by Aviva Life Insurance Company India Limited under License.</p>
	<p class="signature">© 2022 Aviva India | <a href="www.avivaindia.com" style="color:white">www.avivaindia.com</a></p>
	</div>
	<div class="call"></div>
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
    //toggle the component with class accordion_body
    $(".accordion_head").click(function() {
      $(this).removeClass('coll-back');
      if ($('.accordion_body').is(':visible')) {
        $(".accordion_body").slideUp(300);
        $(".plusminus").text('+');
        $(this).removeClass('coll-back');
        $('.rmv-cls').removeClass('coll-back');
      }

      if($(this).next(".accordion_body").is(':visible')) {
        $(this).next(".accordion_body").slideUp(300);
        $(this).children(".plusminus").text('+');
        $(this).removeClass('coll-back');
      }else {
        $(this).next(".accordion_body").slideDown(300);
        $(this).children(".plusminus").text('');
        $(this).children(".plusminus").append('<hr class="hr-clc">');
        $(this).toggleClass('coll-back');
        $(this).addClass('rmv-cls');
      }
    });
  });
		  $(function() {
           $('.check').on('click', function() {
                $(this).siblings().removeClass('selected_in').end().toggleClass('selected_in');
            });
        });
	</script>

    <div class="requestACall">
		<a href="#" data-toggle="modal" data-target="#myModal">
			<img src="/aviva-protection-plus/img/callMeBackIcon.png" alt="Aviva India Request A Call Background" title="Request A Call" class="w-100">
			<p>Request<br>a call back</p>
		</a>
	</div>
    
    <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
           
<!--
      <div class="modal-header">
         
         
        </div>
-->
        
        
        <!-- Modal body -->
        <div class="modal-body" style="background: #004fb6;border-radius: 6px;
    border: 2px solid #eee;">
           <button type="button" class="close" data-dismiss="modal" style="float: right;
    margin-left: 270px;color: white;">&times;</button>
        <form method="post" id="callback">
            <div id="request_status"></div>
  <div class="form-group">
    <label for="email" style="color: whitesmoke;">Name:</label>
    <input type="text" class="form-control" placeholder="Enter Name" id="Rname" name="Rname" required>
  </div>
  <div class="form-group">
    <label for="pwd" style="color: whitesmoke;">Mobile Number:</label>
    <input type="text" class="form-control" placeholder="Enter Mobile Number" id="Rmobile" name="Rmobile" required onkeypress="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')">
  </div>
 
  <button type="submit" class="btn btn-primary" id="request_call" name="request_call" style="text-align: center;
    width: 259px;
    background: #feda02;
    color: blue;">Submit</button>
</form>
        </div>

        
      </div>
    </div>
  </div>
    <div class="overlay_m">
<div class="modal_a">
	<i class="fa fa-times close" aria-hidden="true"></i>
	<video autoplay="" loop="" controls="" width="640" height="480">
<source type="video/mp4" src="https://endtest-videos.s3-us-west-2.amazonaws.com/documentation/endtest_data_driven_testing_csv.mp4">
</video>

</div>
</div>
    
 
    <script>
   $(document).ready(function(){
    $('#submitform1').click(function(e){
        let name = document.getElementById("name").value;
        let mobile_number = document.getElementById("mobile_number").value;
        let email = document.getElementById("email").value;
        let token = document.getElementById("token").value;
        let annual_income = document.getElementById("annual_income").value;
        let city = document.getElementById("city").value;

    smartech('contact', '78', {
    'pk^mobile': mobile_number,
    'email': email,
    'FIRST_NAME': name
    });
   
smartech('identify', mobile_number);

smartech('dispatch', 'lead_submit', {
    'email': email ,
    'first_name': name,
    'annual_income': annual_income,
    'city': city
    });

      

  e.preventDefault();
         if($("#name").val()!='' && $("#mobile_number").val()!='' && $("#email").val()!='' && $("#token").val()!='' &&  $("#annual_income").val()!='' && $("#city").val()!='' && $("#mandatoryCheck").prop('checked') == true){
            jQuery.ajax({
            url: "<?=site_url;?>/ajaxlead.php",
           data:$('#quick_enquiry1').serialize(),
            type: "POST",
            success:function(data){
                if(data=='success'){
      	
       $("#form-status").html('<div class="alert alert-success alert-dismissible fade show">Enquiry has been sent successfully.  Our Team will contact you shortly!<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
           }else{
                     $("#form-status").html(data).css('color','red');
                }
            },
            error:function (){}
            });
        }else{
             $("#form-status").html('<div class="alert alert-danger alert-dismissible fade show"><strong>All fields are mandatory!<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        }
     
       })    
       
         }) 
</script>
<!--    Request a call script-->
     <script>
   $(document).ready(function(){
    $('#request_call').click(function(e){
       e.preventDefault();
         if($("#Rname").val()!='' && $("#Rmobile").val()!='' ){
            jQuery.ajax({
            url: "<?=site_url;?>/ajaxRequestlead.php",
           data:$('#callback').serialize(),
            type: "POST",
            success:function(data){
                if(data=='success'){
      	
       $("#request_statuss").html('<div class="alert alert-success alert-dismissible fade show">Enquiry has been sent successfully.  Our Team will contact you shortly!<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
           }else{
                     $("#request_status").html(data).css('color','red');
                }
            },
            error:function (){}
            });
        }else{
             $("#request_status").html('<div class="alert alert-danger alert-dismissible fade show"><strong>All fields are mandatory!<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        }
     
       })    
       
         }) 
</script>
    <script>
   var time_limit = 30;
   
   var time_out = setInterval(() => {
   
     if(time_limit == 0) {
       
       $('#timer').html('');
   $("#timer").css("background", "white");
   $('#secondtimer').html('');
    $('#resendotp_frm').prop('disabled', false);
   $('#resendotp_frm').css('background', "#007bff");
    
        
     } else {
       
       if(time_limit < 10) {
         time_limit = 0 + '' + time_limit;
       }
       
       $('#timer').html('' + time_limit + ' Seconds');
       $('#secondtimer').html(' Seconds');
         $('#resendotp_frm').prop('disabled', true);
         $('#resendotp_frm').css('background', "#0080003b");
       
       time_limit -= 1;
       
     }
   
   }, 1000);
       
       
       $(document).ready(function() {
     $(".set1 > span").on("click", function() {
       if ($(this).hasClass("active")) {
         $(this).removeClass("active");
         $(this)
           .siblings(".content1")
           .slideUp(200);
         $(".set1 > span i")
           .removeClass("fa-minus")
           .addClass("fa-plus");
       } else {
         $(".set1 > span i")
           .removeClass("fa-minus")
           .addClass("fa-plus");
         $(this)
           .find("i")
           .removeClass("fa-plus")
           .addClass("fa-minus");
         $(".set1 > span").removeClass("active");
         $(this).addClass("active");
         $(".content1").slideUp(200);
         $(this)
           .siblings(".content1")
           .slideDown(200);
       }
     });
   });
   
</script>
    
</body>
</html>