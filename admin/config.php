<?php
date_default_timezone_set('Asia/Kolkata');
$date=date('Y-m-d');
$datehrs=date('Y-m-d H:i');
session_start();
$ARR_CFGS["db_host"] = '10.72.1.69';
$ARR_CFGS["db_name"] = 'avivadb';
$ARR_CFGS["db_user"] = '45avivauser';
$ARR_CFGS["db_pass"] = 'utEia8STo3XrDnxqetcr346799c3';

$ARR_CFGS["db_host"] = 'localhost';
$ARR_CFGS["db_name"] = 'webdjjxe_avivadb';
$ARR_CFGS["db_user"] = 'webdjjxe_avivanew';
$ARR_CFGS["db_pass"] = '+rpICm9zfw8j';

 $conn = new mysqli($ARR_CFGS["db_host"], $ARR_CFGS["db_user"], $ARR_CFGS["db_pass"],$ARR_CFGS["db_name"]);
    $GLOBALS['conn']=$conn;
    if($conn->connect_error) {
        die("Could not connect to database. Please check configuration and ensure MySQL is running.");
    }


define('site_url', 'https://www.avivaindia.com/aviva-ulip-sip-plan');
define('theme_url', 'https://www.avivaindia.com/aviva-ulip-sip-plan/asset/designers');
define('site_admin',site_url."/admin");
//phpinfo();

//Function
function updateTable($tableName, $cond = "") {
  db_query($conn, "update $tableName set $cond");
}

function trace() {
  list($callee) = debug_backtrace();
  $arguments = func_get_args();
  $total_arguments = count($arguments);
  echo '<fieldset style="background: #fefefe !important; border:3px red solid; padding:5px; font-family:Courier New,Courier, monospace;font-size:12px">';
  echo '<legend style="background:lightgrey; padding:6px;">' . $callee['file'] . ' @ line: ' . $callee['line'] . '</legend><pre>';
  $i = 0;
  foreach ($arguments as $argument) {
    echo '<br/><strong>Debug #' . ( ++$i) . ' of ' . $total_arguments . '</strong>: ';
    if ((is_array($argument) || is_object($argument)) && count($argument)) {
      print_r($argument);
    } else {
      var_dump($argument);
    }
  }
  echo '</pre>' . PHP_EOL;
  echo '</fieldset>' . PHP_EOL;
}
function db_query($sql) {
	$dbcon	= $conn;
	$result	= mysqli_query($dbcon,$sql);
	return $result;
}

if (!function_exists('getDateFormat')) {

  function getDateFormat($date, $format, $seperator1 = ",") {
    switch ($format) {
      case 1: // (Ymd)->(dmY) 06 Dec, 2010 
        $arr_date = explode($seperator1, $date);
        $arr_date = strtotime($arr_date[0]);
        $ret_date = date("d M" . $seperator1 . " Y", $arr_date);
        break;

      case 2: // (Ymd)->(dmY) 06 December, 2010
        $arr_date = explode($seperator1, $date);
        $arr_date = strtotime($arr_date[0]);
        $ret_date = date("d F" . $seperator1 . " Y", $arr_date);
        break;

      case 3: // (Ymd)->(dmY) Mon Dec 06, 2010 
        $arr_date = explode($seperator1, $date);
        $arr_date = strtotime($arr_date[0]);
        $ret_date = date("D M d" . $seperator1 . " Y", $arr_date);
        break;

      case 4: // (Ymd)->(dmY) Monday December 06, 2010 
        $arr_date = explode($seperator1, $date);
        $arr_date = strtotime($arr_date[0]);
        $ret_date = date("l F d" . $seperator1 . " Y", $arr_date);
        break;

      case 5: // (Ymd)->(dmY) Monday December 06, 2010, 03:04:00 
        $arr_time1 = explode(" ", $date);
        $arr_date = strtotime($date);
        $ret_date = date("l F d" . $seperator1 . " Y" . $seperator1 . " h:i:s", $arr_date);
        break;

      case 6: // (Ymd)->(dmY) Monday December 06, 2010, 15:03:PM 
        $arr_time1 = explode(" ", $date);
        $arr_date = strtotime($date);
        $ret_date = date("l F d" . $seperator1 . " Y" . $seperator1 . " H:i:A", $arr_date);
        break;

      case 7: // (Ymd)->(dmY) Monday December 06, 2010, 15:03:PM 
        $arr_time1 = explode(" ", $date);
        $arr_date = strtotime($date);
        $ret_date = date("d M" . $seperator1 . " Y" . $seperator1 . " H:i:A", $arr_date);
        break;

      case 8: // (Ymd)->(dmY) Monday December 06, 2010, 03:04:00 
        $arr_time1 = explode(" ", $date);
        $arr_date = strtotime($date);
        $ret_date = date("d M" . $seperator1 . " Y" . $seperator1 . " h:i", $arr_date);
        break;
      case 9: // (Ymd)->(dmY) Monday December 06, 2010 
        $arr_date = explode($seperator1, $date);
        $arr_date = strtotime($arr_date[0]);
        $ret_date = date("M d" . $seperator1 . " Y", $arr_date);
        break;
      case 10: // (Ymd)->(dmY) Monday December 06, 2010 
        $arr_date = explode($seperator1, $date);
        $arr_date = strtotime($arr_date[0]);
        $ret_date = date("M d" . $seperator1 . " Y [l]", $arr_date);
        break;
      case 11: // (Ymd)->(dmY) Monday December 06, 2010 
        $arr_date = explode($seperator1, $date);
        $arr_date = strtotime($arr_date[0]);
        $ret_date = date("d-M-Y", $arr_date);
        break;
    }
    return $ret_date;
  }

}

?>
