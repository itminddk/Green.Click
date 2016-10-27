<?php
/**
 * Created by PhpStorm.
 * User: jan-imac
 * Date: 07/07/2016
 * Time: 15.22
 */

setlocale(LC_MONETARY, 'da_DK');
// Check if comming from CloudFlare
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"]; //real visitor ip address CF
    $clientCountry  = $_SERVER["HTTP_CF_IPCOUNTRY"];
    $clientCF       = $_SERVER["HTTP_CF_RAY"]; // CloufFare CF-RAY - https://support.cloudflare.com/hc/en-us/articles/200169746-What-is-the-CF-RAY-header-
}


## Vars
$debug               = 1;
$user_agent		      = $_SERVER['HTTP_USER_AGENT'];;
$api_url            = "http://svn.crmtest.dk:8483/api/";
$api_confirm_url    = "http://svn.crmtest.dk:8483/api/Orders/action.Confirm";
$clientIp           = $_SERVER['REMOTE_ADDR'];
$id                 = "";
$hashCode           = "";
$result             = "";
$invoice_data       = "";
$invoice_info       = "";
$invoice_stat       = "Ikke betalt";
$hash_txt		        = "";
$error_stat			    = FALSE;
$test_merchant_no   = "8012702";
$live_merchant_no   = "6218857";
$merchant_no		    = $live_merchant_no;
$error_email        = "jan@greenclickmedia.dk, mbj@greenclickmedia.dk";

if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot")){
    // what to do
}

?>

