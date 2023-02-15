<?php
   include('include/config.php');
   $ip = $_SERVER['REMOTE_ADDR'];
   session_start();
   $referer = $_SERVER['HTTP_REFERER'];
   date_default_timezone_set('Asia/Kolkata');
   $date=date('Y-m-d');
   $datehrs=date('Y-m-d H:i');
   $rand = rand(10,10000000000);
   $otp = mt_rand(100000,999999);
   //trace($_GET);
   $utmSource = $_GET['utm_source'];
   $utmMedium = $_GET['utm_medium'];
   $utmCompaign = $_GET['utm_campaign'];
   $utmContent = $_GET['utm_content'];
   $utmTerm = $_GET['utm_term'];
   ?>
<!DOCTYPE html>
<html>
   <head>
      <title>Aviva Signature Guaranteed Income Plan  | Best Life Insurance Policy in India</title>
      <meta name="keywords" content="Life Insurance, life insurance policy, life insurance company, best life insurance plan" />
      <meta name="description" content="Aviva India, a leading life insurance company that offers a range of life insurance products, including term insurance, investments plans and more, to help you protect you and your family. Explore now! "/>
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
      <script src="https://use.fontawesome.com/96a51fde36.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

      <script data-obct type = "text/javascript">
  !function(_window, _document) {
    var OB_ADV_ID = '00b22b8ff1689703f5b8257e1040737cd8';
    if (_window.obApi) {
      var toArray = function(object) {
        return Object.prototype.toString.call(object) === '[object Array]' ? object : [object];
      };
      _window.obApi.marketerId = toArray(_window.obApi.marketerId).concat(toArray(OB_ADV_ID));
      return;
    }
    var api = _window.obApi = function() {
      api.dispatch ? api.dispatch.apply(api, arguments) : api.queue.push(arguments);
    };
    api.version = '1.1';
    api.loaded = true;
    api.marketerId = OB_ADV_ID;
    api.queue = [];
    var tag = _document.createElement('script');
    tag.async = true;
    tag.src = '//amplify.outbrain.com/cp/obtp.js';
    tag.type = 'text/javascript';
    var script = _document.getElementsByTagName('script')[0];
    script.parentNode.insertBefore(tag, script);
  }(window, document);

  obApi('track', 'PAGE_VIEW');
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
      <!--    Analytic code-->
      <!-- Google tag (gtag.js) -->
      <script async src="https://www.googletagmanager.com/gtag/js?id=UA-16449827-1"></script>
      <script>
         window.dataLayer = window.dataLayer || [];
         function gtag(){dataLayer.push(arguments);}
         gtag('js', new Date());

         gtag('config', 'UA-16449827-1');
      </script>
      <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1806111919635795');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1806111919635795&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
   </head>
   <body>
      <div class="first">
         <div class="social"> 
            <img src="img/download.png" class="aviva-logo1" alt="Aviva India" title="Aviva India" style="padding: 1%;">
            <ul class="links">
<!--            <img src="img/aviva-logo-transparent.png" class="aviva-logo" alt="Aviva India" title="Aviva India">-->
               <!-- <img src="img/download.png" class="aviva-logo1" alt="Aviva India" title="Aviva India"> -->
               <li><a href="https://www.facebook.com/AvivaIndia" target="_blank"><i class="fa fa-facebook"></i></a></li>
               <li><a href="https://twitter.com/AvivaIndia" target="_blank"><i class="fa fa-twitter"></i></a></li>
               <li><a href="https://www.youtube.com/user/aviva" target="_blank"><i class="fa fa-youtube"></i></a></li>
            </ul>
<!--
             <div class="below-head">
           <p>In this policy the investment risk in the investment portfolio is borne by the Policyholder. The linked Insurance Products do not offer any liquidity during the first five years of the contract. The policyholder will not be able to surrender/withdraw the monies invested in linked Insurance Products completely or partially till the end of the fifth year.</p>
            </div>
-->
            <div class="clear"></div>
         </div>
         <div class="inner_first">
            <div class="left">
               <!--                             <h1 class="desktop-bann">Aviva Protection Plus <br><span>(A Team Plan with Return of Premium)</span></h1>-->
             <div id="demo" class="carousel slide desktop-bann" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
   
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/Desktop-Banner.jpg" alt="Aviva India" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/Desktop-Banner.jpg" alt="Aviva India" width="1100" height="500">
    </div>
    
  </div>
  
  <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">-->
  <!--  <span class="carousel-control-prev-icon"></span>-->
  <!--</a>-->
  <!--<a class="carousel-control-next" href="#demo" data-slide="next">-->
  <!--  <span class="carousel-control-next-icon"></span>-->
  <!--</a>-->
</div>
 <div id="demo" class="carousel slide mobile-bann" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
   
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/mobile-banner.jpg" alt="Aviva India" width="1100" height="500">
    </div>
    <div class="carousel-item">
      <img src="img/mobile-banner.jpg" alt="Aviva India" width="1100" height="500">
    </div>
    
  </div>
  
  <!--<a class="carousel-control-prev" href="#demo" data-slide="prev">-->
  <!--  <span class="carousel-control-prev-icon"></span>-->
  <!--</a>-->
  <!--<a class="carousel-control-next" href="#demo" data-slide="next">-->
  <!--  <span class="carousel-control-next-icon"></span>-->
  <!--</a>-->
</div>
              
            </div>

            <div class="right first_form first_form">
<!--                    <img src="img/aviva-logo-transparent.png" class="logo" alt="Aviva India" title="Aviva India">-->
               <!-- <p class="formSubHead">Maximise Your Returns with Aviva Life Insurance</p> -->
               <form method="post" id="quick_enquiry1">
                  <h2>Request For A Call Back</h2>
                  <div id="form-status"></div>
                  <div class="box">
                     <input type="text" name="name" id="name" placeholder="Name" required>
                     <i class="fa fa-user-o" aria-hidden="true"></i>
                  </div>
                  <div class="box">
                     <!--                                               <img src="img/Flag_of_India.png" class="sma" alt="Inidan Flag">-->
                     <input type="text" value="+91" readonly class="phonecode">
                     <input type="text" name="mobile_number" id="mobile_number" placeholder="Number" style="padding: 4% 21%;" class="on_m" minlength="10" maxlength="10"  onkeypress="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" required>
                     <i class="fa fa-phone" aria-hidden="true"></i>
                  </div>
                  <div class="box">
                     <input type="email" name="email" id="email" placeholder="Email" required>
                     <i class="fa fa-envelope-o" aria-hidden="true"></i>
                  </div>
                  <div class="box">
                     <div class="annual">
                        <span>Annual Income</span>
                        <div class="align_radio">
                           <div class="check">
                              <input type="radio" id="annual_income" name="annual_income" value="5-7|500000">
                              <p class="radio-budget">5-7</p>
                           </div>

                           <div class="check">
                              <input type="radio" id="annual_income2" name="annual_income" value="7-10|700000">
                              <p class="radio-budget">7-10</p>
                           </div>
                           <div class="check" style="border: 0px">
                              <input type="radio" id="annual_income3" name="annual_income" value=">10|1000000">
                              <p class="radio-budget">> 10</p>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="box">
                     <select id="city" name="city" style="width: 100%;">
                        <option selected disabled>Select City</option>
                        <option value="Ahmedabad">Ahmedabad</option>
                        <option value="Bangalore">Bangalore</option>
                        <option value="TNCHT1">Chennai</option>
                        <option value="Chennai">Delhi</option>
                        <option value="Hyderabad">Hyderabad</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Mumbai">Mumbai</option>
                        <option value="Pune">Pune</option>
                        <option value="Bhubaneshwar">Bhubaneshwar</option>
                        <option value="Baroda">Baroda</option>
                        <option value="Others">Others</option>
                     </select>
                  </div>
                  <div class="box" id="other_field" style="display:none;">
                     <input type="text" name="other_loc" id="other_loc" value="" placeholder="Enter Other City Name*">
                  </div>
                  <div class="box">
                     <input type="hidden" name="token" id="token" value="<?php echo $rand;?>" placeholder="token" required readonly>
                     <input type="hidden" name="otp" id="otp" value="<?php echo $otp;?>" placeholder="otp" required readonly>
                     <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utmSource;?>" placeholder="Utm Source" readonly>
                     <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utmMedium;?>" placeholder="Utm Medium" readonly>
                     <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utmCompaign;?>" placeholder="Utm Compaign" readonly>
                     <input type="hidden" name="utm_content" id="utm_content" value="<?php echo $utmContent;?>" placeholder="Utm Content" readonly>
                     <input type="hidden" name="utm_term" id="utm_term" value="<?php echo $utmTerm;?>" placeholder="Utm Term" readonly>
                     <input type="submit" name="submitform1" value="Submit" id="submitform1" style="width: 100%;" class="submit">
                  </div>
                  <div class="clear"></div>
                  <p><input type="checkbox" name="mandatoryCheck" id="mandatoryCheck" checked> I agree to be contacted by Aviva for product related information through Phone/SMS/E-mail/WhatsApp*</p>
               </form>
            </div>
            <div class="right second_form" style="display:none;">
               <form method="post" id="quick_enquiry2">
                  <div id="form-status1"></div>
                  <img src="img/download.png" class="logo" alt="Aviva India" title="Aviva India">
                  <br/><br/>
                  <div class="form-group">
                     <label for="otp" style="font-weight: 600;">Enter OTP</label>
                     <input type="text" class="form-control" id="otp_usr" name="otp_usr" aria-describedby="emailHelp" placeholder="Please Enter OTP" onkeyup="if (/\D/g.test(this.value)) this.value = this.value.replace(/\D/g,'')" maxlength="6" minlength="6">

                     <input type="hidden" name="utm_source" id="utm_source" value="<?php echo $utmSource;?>" placeholder="Utm Source" readonly>
                     <input type="hidden" name="utm_medium" id="utm_medium" value="<?php echo $utmMedium;?>" placeholder="Utm Medium" readonly>
                     <input type="hidden" name="utm_campaign" id="utm_campaign" value="<?php echo $utmCompaign;?>" placeholder="Utm Compaign" readonly>
                     <input type="hidden" name="utm_content" id="utm_content" value="<?php echo $utmContent;?>" placeholder="Utm Content" readonly>
                     <input type="hidden" name="utm_term" id="utm_term" value="<?php echo $utmTerm;?>" placeholder="Utm Term" readonly>

                     <div class="timer_sec" id="timer"></div>
                     <!--         <div id="secondtimer"></div>-->
                     <!--    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
                  </div>
                  <!--                    <input type="submit" name="submitform1" value="Submit" id="submitform1" style="width: 100%;" class="submit">-->
                  <button type="submit" name="submit_otp" id="submit_otp" class="btn btn-success submit">Submit</button>
                  <button type="submit" name="resend_otp" class="btn btn-primary submit" id="resendotp_frm">Resend OTP</button>
                  <div class="clear"></div>
               </form>
            </div>

            <div class="clear"></div>
         </div>
         <!--<div class="text desktop-text">-->
         <!--   <p>The most trust-worthy brand with 98.39% claim settlement ratio. </p>-->
         <!--</div>-->
      </div>
      <!-- *******************2nd************************ -->
<!--
      <div class="container-fluid bannerAlert px-0"><p>Guaranteed benefits are available only if all due premiums are paid.<br>
</p></div>
-->
      <div class="container-fluid secondSection">
              <div class="row">
                <div class="col-md-7">
                        <div class="secLeft"><br>


                                <h3 style="padding: 20px 0; font-size: 2.4em;    margin-bottom: 2%;">Aviva Signature Guaranteed Income Plan </h3>
                    <p style="font-size: 1.2rem;    margin-top: -3%; "><i>Secure Your Family's Financial Goals with Guaranteed Income</i></p>
                                <p style="font-size: 1.2rem">Create a parallel income source with Aviva Signature Guaranteed Income Plan.
One plan that helps you grow your savings and generate guaranteed wealth in the long run through timely contributions for a period of your choice.
</p>
                                        </div>
                </div>
                <div class="col-md-5">
                        <div class="secRight">
                                <img src="img/side-img.jpg" class="w-100 img-responsive">
                        </div>
                </div>
              </div>
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
      <div class="third">
         <div class="inner_third">
            <div class="col-md-12 benefitsHead">  
               <h5>Benefits of</h5>
               <h3 style="font-size: 2.8em;">Aviva Signature Guaranteed Income Plan</h3>
            </div>
            <!-- <h3 class="key-benefit animate__animated animate__delay-3s animate__fadeInRightBig animate__repeat-2">Key Benefits of buying Aviva Protection Plus</h3> -->
            <div class="third_left">
               <img src="img/8.png" class="ab" alt="Key Benefits of buying Aviva Protection Plus" title="Key Benefits of buying Aviva Protection Plus">
               <div class="parent">
                     <div class="boxes">
                  <img src="img/AccidentalDeathBenefit-icon.png" title="Tax benefit" alt="Tax benefit ">
                  <h3 class="box-head">Greater Flexibility </h3>
                   <p>To opt your investment horizon </p>
                  <!-- <p>Save up to Rs. 1.5 lakhs under Sections 80C and 10 (10D).</p> -->
               </div>
               
               
               <div class="boxes">
                   <img src="img/FlexibiltyToSwitchFunds-icon.png" alt="Savings Booster" title="Savings Booster">

                  <h3 class="box-head">Guaranteed Returns</h3>
                  <p>Upto 300% of Guaranteed Returns on Total Premiums paid</p>
               </div>
               <div class="boxes">
                 <img src="img/LifeCoverage-icon.png" title="Enriched Protection" alt="Enriched Protection">
                  <h3 class="box-head">Guaranteed Income</h3>
                  <p>*Guaranteed Income Stream for 28 years</p>
               </div>
               <div class="boxes">
                  <img src="img/TaxBeneafits-icon.png" title="Return of Premium" alt="Return of Premium">
                  <h3 class="box-head">Tax Benefits</h3>
                  <p>*Tax benefits on Premiums Paid up to ₹ 1.5 Lacs</p>
               </div>
               <div class="clear"></div>
               </div>
            </div>
            <div class="third_right">
               <img src="img/benefit-tree.png" class="img1" alt="Family Plan" title="Family Plan">
            </div>

            </div>
      </div>
      <!-- <section style="background-color: #f0f5fb;">
        <div class="container-fluid">
                <div class="row benefitsRow" style="background-image: url('img/benefits-bg.png');background-repeat: no-repeat;background-position: right bottom;padding: 2em 10em 5em;">
                        <div class="col-md-12 benefitsHead">
                                <h5>Key Benefits of</h5>
                                <h3>ULIP SIP</h3>
                        </div>
                        <div class="col-md-8">
                  <div class="row benefitsSlider" id="benefitsSlider">
                                        <div class="col-md-4">
                                                <div class="benefitDiv">
                                                        <img src="img/benefits-1.jpg" class="w-100 img-responsive">
                                                        <div class="benefitContent">
                                                                <h4>Tax Exemption</h4>
                                                                <p>On the Annual Premium paid upto INR 2.5 Lacs</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="benefitDiv">
                                                        <img src="img/benefits-2.jpg" class="w-100 img-responsive">
                                                        <div class="benefitContent">
                                                                <h4>Guaranteed Accumulation</h4>
                                                                <p>in case of death</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="benefitDiv">
                                                        <img src="img/benefits-3.jpg" class="w-100 img-responsive">
                                                        <div class="benefitContent">
                                                                <h4>â€œZero costâ€</h4>
                                                                <p>Flexibility to Switch funds</p>
                                                        </div>
                                                </div>
                                        </div>
                                        <div class="col-md-4">
                                                <div class="benefitDiv">
                                                        <img src="img/benefits-2.jpg" class="w-100 img-responsive">
                                                        <div class="benefitContent">
                                                                <h4>Life + Accidental Coverage</h4>
                                                                <p>A Term insurance plan with Return of premium benefit</p>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                        <div class="col-md-4">

                        </div>
                </div>
        </div>
      </section> -->
      <section class="faqSection">
        <div class="container-fluid">
                <div class="row">
                        <div class="col-md-6">
                                <img src="img/Tips.jpg" class="img-responsive faqImage" style="margin: 0 auto;width:100%;">
                    <p style="font-size: 0.8em;">*Guaranteed benefits are available only if all due premiums are paid.</p>
                    <p style="font-size: 0.8em;">*Tax benefits are as per prevailing tax laws which are subject to change.</p>
                        </div>

                        <div class="col-md-6">
                                <div class="kind pt-3">
                     <h4 class="mb-3">FAQ's 
</h4>
                     <div class="accordion_container">
                        <div class="accordion-main">
                           <div class="accordion_head">What Is AVIVA Signature Guaranteed Income Plan?<span class="plusminus">+</span></div>
                           <div class="accordion_body" id="a1" style="display: none;">
                              <p>It is a life insurance cum savings plan. It provides financial protection to your loved ones in case of unfortunate death during the Policy Term and helps you grow your wealth over time.
</p>

                           </div>
                        </div>
                        <div class="accordion-main">
                           <div class="accordion_head">How Does The AVIVA Signature Guaranteed Income Plan Work? <span class="plusminus">+</span></div>
                           <div class="accordion_body" style="display: none;">
                                                         <p>Investing in AVIVA Signature Guaranteed Income plan is a smart decision as it bundles the benefits of guaranteed payouts and insurance cover.<br>
You can choose the plan option that best suits your needs:<br>
Plan Option 1: Signature Investor <br>
Plan Option 2: Signature Builder <br>
Plan Option 3: Signature Moneymaker<br> 
Plan Option 4: Signature Saver <br>
These plans offer multiple benefits and returns depending on the option chosen. In addition to this, tax benefits are applicable, which further increase your gains. You get guaranteed payouts and enjoy life cover. 
</p>
                           </div>
                        </div>
                        <div class="accordion-main">
                           <div class="accordion_head">What Are The Documents Required For This Plan? <span class="plusminus">+</span></div>
                           <div class="accordion_body" style="display: none;">
                             <p>Along with a complete Application form, you would need: 
</p><br/>
   
<p>1. A photo of any one identity proof (PAN Card/Passport/Driving License) </p>
<p>2. Income proof (a copy of the latest ITR or last three months' salary slips or Form 16) </p>


                           </div>
                        </div>
                        <div class="accordion-main">
                           <div class="accordion_head">Who Should Buy The AVIVA Signature Guaranteed Income Plan?<span class="plusminus">+</span></div>
                           <div class="accordion_body" style="display: none;">
                              <p>Anyone who wants to enjoy the benefits of a guaranteed income or wishes to create a lumpsum and financial stability for his/her family in case of any unforeseen circumstances can opt for this plan. It offers multiple benefits and the freedom to choose from 4 plan options depending on your needs, age and objectives. 
</p>
                           </div>
                        </div>

                     </div>
                  </div>

                        </div>

                </div>
        </div>
      </section>
      <!-- **********************footer********************* -->
      <div class="footer">
         <div class="disclaimer-footer">

            <span>AN Feb 41/23</span><br/>

         </div>
         <div class="accordion_container">
            <div class="accordion-main">
<!--               <div class="accordion_head">DISCLAIMERS<span class="plusminus">+</span></div>-->
               <div class="accordion_body1" id="a10" >
                  <p> The name of the Aviva Product/Plan does not in any way indicate the quality of the insurance contract, its future prospects or returns. For more details on risk factors, terms and conditions please read sales brochure carefully before concluding a sale. Riders are not mandatory and are available for a nominal extra cost. Please read respective rider brochure before taking a decision.</p>
                  <p>Unit Linked Life Insurance products are different from traditional insurance products and are subject to market risks. Please know the associated risks and the applicable charges from your sales representative or the intermediary or policy document issued by the insurance company. The premium paid in Unit Linked life insurance policies are subject to investment risks associated with capital markets and the NAVs of the units may go up or down based on the performance of the fund and factors influencing the capital market and the insured is responsible for his/ her decisions.</p>
                  <p>The various funds offered under Unit Linked Insurance contract are the names of the funds and do not in any way indicate the quality of these plans, their future prospects and returns. Unit Linked Funds are subject to market risks and there is no assurance or guarantee that the objective of the investment fund will be achieved. Past performance of the investment funds do not indicate the future performance of the same.</p>
                  <p class="aviva-footborser">BEWARE OF SPURIOUS/FRAUD. IRDAI in not Involved in activities like selling Insurance policies, announcing bonus or investment of premiums. Public receiving Such phone calls are requested to lodge a complaint.</p>
                  <p>Aviva Trade Logo displayed above belongs to Aviva Brands Limited and is used by Aviva Life Insurance Company India Limited under License.</p>
               </div>
            </div>
         </div>
         <p class="signature">© <?php echo Date('Y');?> Aviva India | <a href="www.avivaindia.com" style="color:white">www.avivaindia.com</a></p>
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
      <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
      <script>
         $('.benefitsSlider').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              autoplay: true,
              autoplaySpeed: 2000,
              arrows: true,
              responsive: [
                {
                  breakpoint: 768,
                  settings: {
                    arrows: false,
                    slidesToShow: 2
                  }
                },
                {
                  breakpoint: 480,
                  settings: {
                    arrows: false,
                    slidesToShow: 1
                  }
                }
               ]
            });
      </script>
<!--
      <div class="requestACall">
         <a href="#" data-toggle="modal" data-target="#myModal">
            <img src="/aviva-protection-plus/img/callMeBackIcon.png" alt="Aviva India Request A Call Background" title="Request A Call" class="w-100">
            <p>Enquire Now</p>
         </a>
      </div>
-->
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
          $('#resendotp_frm').click(function(e){
            e.preventDefault();

                  jQuery.ajax({
                  url: "<?=site_url;?>/ajaxresendotp.php",
                 data:$('#quick_enquiry2').serialize(),
                  type: "POST",
                  success:function(data){
                      if(data=='success'){

             $("#form-status1").html('<div class="alert alert-success alert-dismissible fade show">OTP has been sent to your Registered Mobile Number.<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                 }else{
                           $("#form-status1").html(data).css('color','red');
                      }
                  },
                  error:function (){}
                  });
            })
             })
      </script>
      <script>
         $(document).ready(function(){
          $('#submit_otp').click(function(e){
            e.preventDefault();
               if($("#otp_usr").val()!=''){
                  jQuery.ajax({
                  url: "<?=site_url;?>/ajaxleadotp.php",
                 data:$('#quick_enquiry2').serialize(),
                  type: "POST",
                  success:function(data){
                      if(data=='success'){

             $("#form-status1").html('<div class="alert alert-success alert-dismissible fade show">Enquiry has been sent successfully.  Our Team will contact you shortly!<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                 }else{
                           $("#form-status1").html(data).css('color','red');
                      }
                  },
                  error:function (){}
                  });
              }else{
                   $("#form-status1").html('<div class="alert alert-danger alert-dismissible fade show"><strong>All fields are mandatory!<button type="button" class="close" data-bs-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
              }

             })

               })
      </script>
      <script>
         $(document).ready(function(){
          $('#submitform1').click(function(e){
              let name = document.getElementById("name").value;
              let mobile_number = document.getElementById("mobile_number").value;
              let email = document.getElementById("email").value;
              let token = document.getElementById("token").value;
              let annual_income = document.getElementById("annual_income").value;
              let city = document.getElementById("city").value;

         e.preventDefault();
               if($("#name").val()!='' && $("#mobile_number").val()!='' && $("#email").val()!='' && $("#token").val()!='' &&  $("#annual_income").val()!='' && $("#city").val()!='' && $("#mandatoryCheck").prop('checked') == true){
                  jQuery.ajax({
                  url: "<?=site_url;?>/ajaxlead2.php",
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
      <script type="text/javascript">
         $(document).ready(function(){
         $( "#city" ).change(function () {
                if($( "option:selected", this ).text()=="Others"){
                   $("#other_field").show();
                   $("#other_loc").attr("required", true);
                }else{
                        $("#other_field").hide();
                   $("#other_loc").attr("required", false);

                }
         })})

      </script>
   </body>
</html>

