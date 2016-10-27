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
$debug               = 0;
$user_agent		      = $_SERVER['HTTP_USER_AGENT'];;
$api_url            = "http://svn.crmtest.dk:8483/api/";
$api_confirm_url    = "http://svn.crmtest.dk:8483/api/Orders/action.Confirm";
$clientIp           = $_SERVER['REMOTE_ADDR'];
$id                 = "";

$result             = "";
$invoice_data       = "";
$invoice_info       = "";
$invoice_stat       = "Ikke betalt";
$error_email        = "jan@greenclickmedia.dk";

## Epay
$test_merchant_no   = "8012702";
$live_merchant_no   = "6218857";
$merchant_no		= $test_merchant_no;


## SERVER URL
$live_server_url	= 'https://gcmcrm.azurewebsites.net';
$test_server_url	= 'http://svn.crmtest.dk:8483';
$host				= $test_server_url;

## VARS
$order_hash_code	= FALSE;
$order_id		= FALSE;
$order_length	= strlen($_GET['id']);
$client_ip       = $_SERVER['REMOTE_ADDR'];

## Database Con
define('DB_NAME', 'greencli_order');
define('DB_USER', 'greencli_order');
define('DB_PASSWORD', 'Greenclick09');
define('DB_HOST', 'localhost');





?>

