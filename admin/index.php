<?php
include_once("config.php");
$ip = $_SERVER['REMOTE_ADDR'];
if (isset($_POST['login'])){
    $user = !empty($_POST['user'])?$_POST['user']:'';
    $pass = !empty($_POST['password'])?$_POST['password']:'';
    if($user != '' && $pass != ''){
   
      $sql1 = "select id,username,companyName, password, login_by_ip, admin_type, status from admin_tbl where username='" . $user . "' and password='" . $pass . "' and admin_type='1'";
     $db = mysqli_query($conn, $sql1);
    $num = mysqli_num_rows($db);
    if ($num > 0) {
      $res = mysqli_fetch_object($db);
      //print_r($res);
      $_SESSION['MyCpanel'] = $res->login_by_ip;
      $_SESSION['MyAdminUserType'] = $res->admin_type;
      $_SESSION['MyAdminUserID'] = $res->username;
      $_SESSION['MyAdminUserSLNO'] = $res->id;
      $_SESSION['companyName'] = $res->companyName;
      header("location:welcome.php");
      exit;
    }else{
      $errMsg = "Invalid Username/Password!!";
     }
}  

 }
   else {
        $errMsg ='All the fields are Mandatory!';
    }

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Aviva Lead Generation Dashboard | Aviva India</title>
    <link rel="stylesheet" href="<?=site_admin;?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=site_admin;?>/assets/vendors/css/vendor.bundle.base.css">
     <link rel="stylesheet" href="<?=site_admin;?>/assets/css/style.css">
    <link rel="shortcut icon" href="https://www.avivaindia.com/sites/all/themes/heartcare/images/favicon.ico" />
  </head>
  <body>
      <div class="col-md-12 header">
      <div class="row">
         <div class="header-logo">
                  <img src="https://www.avivaindia.com/sites/all/themes/heartcare/css/images/avivaLogo.png" title="Aviva India" alt="Aviva India">
                </div>       

    </div>
      </div>
  <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="https://www.avivaindia.com/sites/all/themes/heartcare/css/images/avivaLogo.png" title="Aviva India" alt="Aviva India">
                </div>
                <h4>Hello! let's get started</h4>
                <h6 class="font-weight-light">Login in to continue.</h6>
                <form class="pt-3" method="post">
                     <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <?php if(!empty($errMsg)): ?><div class="alert alert-danger"><?php echo $errMsg; ?></div><?php endif; ?>
                                <?php if(!empty($succMsg)): ?><div class="alert alert-success"><?php echo $succMsg; ?></div><?php endif; ?>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="user" name="user" placeholder="Username" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <input type="password" class="form-control form-control-lg" id="password" name="password" placeholder="Password" autocomplete="off">
                  </div>
                    
                 
                    
                      <div class="my-2 d-flex justify-content-between align-items-center">
                    <div class="form-check">
                      <label class="form-check-label text-muted">
                        <input type="checkbox" class="form-check-input" checked> Keep me signed in </label>
                    </div>
<!--                    <a href="#" class="auth-link text-black">Forgot password?</a>-->
                  </div>
                  <div class="mt-3">
                    <button type="submit" name="login" class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" style="background:linear-gradient(to right, #ffd900, #004fb6)">SIGN IN</button>
                  </div>
                
<!--
                  <div class="mb-2">
                    <button type="button" class="btn btn-block btn-facebook auth-form-btn">
                      <i class="mdi mdi-facebook me-2"></i>Connect using facebook </button>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Don't have an account? <a href="register.html" class="text-primary">Create</a>
                  </div>
-->
                </form>
              </div>
            </div>
          </div>
        </div>
      
     
      
    
      <div class="col-md-12 footer-area">
      <p class="text-center foot">Aviva Trade logo displayed above belongs to Aviva Brands Limited and is used by Aviva Life Insurance Company India Limited Under License.</p>
          <p class="copyright">© <?php echo Date('Y');?> Aviva India | <a href="https://www.avivaindia.com" target="_blank" style="color: white;
    text-decoration: none;">www.avivaindia.com</a> </p>
      
      
      </div>
    <script src="<?=site_admin;?>/assets/vendors/js/vendor.bundle.base.js"></script>
   <script src="<?=site_admin;?>/assets/js/off-canvas.js"></script>
    <script src="<?=site_admin;?>/assets/js/hoverable-collapse.js"></script>
    <script src="<?=site_admin;?>/assets/js/misc.js"></script>
   
  </body>
</html>