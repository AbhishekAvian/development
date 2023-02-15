<?php
include ('config.php');
$allLead = mysqli_query($conn, "select * from guranteed_income_plan_tbl order by id Desc");
$all_count_lead = mysqli_num_rows($allLead);
  if(isset($_POST['search_by_date'])) {
      $from = !empty($_POST['from'])?$_POST['from']:'';
      $to = !empty($_POST['to'])?$_POST['to']:'';
$allLead = mysqli_query($conn, "select * from guranteed_income_plan_tbl where posted_date between '$from' and '$to'");
$all_count_lead = mysqli_num_rows($allLead);
$fromMsg = getDateFormat($from,9);
$toMsg = getDateFormat($to,9);
      if($all_count_lead > 0){ 
      $succMsg = "Here is the Lead Result between $fromMsg to $toMsg";
      }
 }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>All Lead - Aviva Admin</title>
  <link rel="stylesheet" href="<?=site_admin;?>/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?=site_admin;?>/assets/vendors/css/vendor.bundle.base.css">
     <link rel="stylesheet" href="<?=site_admin;?>/assets/css/style.css">
    <link rel="shortcut icon" href="https://www.avivaindia.com/sites/all/themes/heartcare/images/favicon.ico" />
<!--      Datatable Cdn-->
          <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.3/css/buttons.dataTables.min.css">
      
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.0/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.2.3/js/buttons.print.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

     <script type="text/javascript">
$(document).ready(function() {
    $('#data').DataTable( {
        "scrollY": 600,
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'print'
        ]
    } );
} );

</script>
      <style>
          table.dataTable tbody th, table.dataTable tbody td{
                  padding: 14px 10px!important;
          }
      </style>
  </head>
  <body>
    <div class="container-scroller">
     <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="index.php"><img src="https://www.avivaindia.com/sites/all/themes/heartcare/css/images/avivaLogo.png" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="index.html"><img src="https://www.avivaindia.com/sites/all/themes/heartcare/images/favicon.ico" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <div class="search-field d-none d-md-block">

          </div>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?=site_admin;?>/assets/images/faces/avtar.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black"><?php echo $_SESSION['companyName'];?> </p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
<!--
                <a class="dropdown-item" href="#">
                  <i class="mdi mdi-cached me-2 text-success"></i> Activity Log </a>
-->
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="<?=site_admin;?>/logout.php">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>

            <li class="nav-item nav-logout d-none d-lg-block">
              <a class="nav-link" href="#">
                <i class="mdi mdi-power"></i>
              </a>
            </li>

          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include ('sidebar.php');?>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span>Leads
              </h3>
              <nav aria-label="breadcrumb">
                <ul class="breadcrumb">
                  <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                  </li>
                </ul>
              </nav>
            </div>
            
<!--           Main Content-->
 <div class="row">
            <div class="col-lg-12 stretch-card">
                <div class="card">
                  <div class="card-body">
<!--                    <h4 class="card-title">Weekly Lead</h4>-->
<!--
                    <p class="card-description"> Add class <code>.table-{color}</code>
                    </p>
-->
                      <form method="post">
                         <label for="exampleInputEmail3">Select Date Range<span class="reuired">*</span></label>
                          <div class="input-group">
                    <input type="date" name="from" class="form-control">
                    <input type="date" name="to" class="form-control">
                    <button type="submit" name="search_by_date" class="btn btn-gradient-primary me-2">Search By Date</button>
                          </div>
                      </form>
                      <div class="clearfix-space" style="padding: 20px;"></div>
                       <?php if(!empty($succMsg)): ?><div class="alert alert-success"><?php echo $succMsg; ?></div><?php endif; ?>
                      <div class="table-responsive-sm">
                          <?php if($all_count_lead > 0){ ?>
                    <table id="data" class="table table-bordered" width="100%">
                      <thead>
                        <tr>
                          <th> Sl No. </th>
                          <th>Unique ID </th>
                          <th> Aff. ID </th>
                          <th> Name </th>
                          <th> Email </th>
                          <th> Mobile </th>
                          <th> City </th>
                          <th> Annual Income </th>
                          <th> UTM Source </th>
                          <th> UTM Medium </th>
                          <th> UTM Compaign </th>
                          <th> UTM Term </th>
                          <th> UTM Content </th>
			  <th> Posted URL </th>
                          <th> Lead Genration Date </th>
                        </tr>
                      </thead>
                      <tbody>
                          <?php 
                          $i = 1;
                          while($result = mysqli_fetch_array($allLead)){ ?>
                        <tr class="table-hover table-striped">
                          <td> <?=$i++;?> </td>
                          <td> <?=$result['token'];?> </td>
                          <td> <?=$result['aff_id'];?> </td>
                          <td> <?=$result['name'];?> </td>
                          <td> <?=$result['email'];?> </td>
                          <td> <?=$result['phone'];?> </td>
                          <td> <?=$result['location_code'];?> </td>
                          <td> <?=$result['annual_income'];?> Lacs </td>
                          <td> <?=$result['utm_source'];?> </td>
                          <td> <?=$result['utm_medium'];?> </td>
                          <td> <?=$result['utm_compaign'];?> </td>
                          <td> <?=$result['utm_term'];?> </td>
                          <td> <?=$result['utm_content'];?> </td>
			  <td> <?=$result['posted_url'];?> </td>
                          <td> <?php echo getDateFormat($result['posted_date_hrs'], 8);?> </td>
                        </tr>
                          <?php } ?>
                          </tbody>
                    </table>
                          <?php } else { ?>
                <div class="alert alert-danger">Oops! No Leads Found </div>
                          <?php } ?>
                      </div>
                  </div>
                </div>
              </div>   
        </div>
</div>
         
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © Aviva India <?php echo Date('Y');?></span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Design and Developed by  <a href="https://www.avianwe.com/" target="_blank">Avian Media Pvt Ltd</a></span>
            </div>
          </footer>
         
        </div>
       </div>
      </div>

      
  </body>
</html>


