<?php
/**
 * Created by PhpStorm.
 * User: jan-imac
 * Date: 07/07/2016
 * Time: 15.19
 */

function get_json($api_url, $hash_code){
    $ch = curl_init('https://gcmcrm.azurewebsites.net/api/Orders/action.Confirm');
}

function get_invoice_data($hash_code){

}

function download_invoice(){
    $path = '/home/someuser/products/data.tar.gz'; // the file made available for download via this PHP file
    $mm_type="application/octet-stream"; // modify accordingly to the file type of $path, but in most cases no need to do so

    header("Pragma: public");
    header("Expires: 0");
    header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
    header("Cache-Control: public");
    header("Content-Description: File Transfer");
    header("Content-Type: " . $mm_type);
    header("Content-Length: " .(string)(filesize($path)) );
    header('Content-Disposition: attachment; filename="'.basename($path).'"');
    header("Content-Transfer-Encoding: binary\n");

    readfile($path); // outputs the content of the file

    exit();

}

function get_order_data($hashCode){
    global $api_url;

    $url = 'http://gcmcrm.azurewebsites.net/api/Publics(\''. $hashCode .'\')/action.InvoiceData';

        $invoice_info   = @file_get_contents($url);

        if($invoice_info === FALSE){
            return false;
            $error_stat 	= TRUE;
        }
        else{
           return  json_decode($invoice_info , true);
        }

}

function get_invoice_pdf($hash_code, $invoice_nr){
    return "dl.php?hashCode=".$hash_code."&id=". $invoice_nr ."";
}

function send_stat_mail($title, $msg){
  global $error_email;
  // the message
  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,170);

  // send email
  mail($error_email ,$title,$msg);
}

function send_error_mail($txt = ""){
  global $error_email;
  // the message
  $msg = "Fejl på confirm for følgende ordre: https://www.greenclickmedia.dk/gc/json-debug.php?id=" . $txt;

  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail($error_email ,"Fejl - Confirm CRM",$msg);
}

function send_paid_mail($invoice = ""){
  global $error_email;
  // the message
  $msg = "Følgende faktura er betalt " . $invoice;

  // use wordwrap() if lines are longer than 70 characters
  $msg = wordwrap($msg,70);

  // send email
  mail($error_email ,"Online Betaling af faktura", $invoice);
}

function is_google_bot($user_agent){
  if (strpos($user_agent, 'AdsBot-Google') !== false) {
    return TRUE;
  }
  else
    return FALSE;
}

function get_confirm_error($status_code){
  switch($status_code){
	case 400:
		return "Order not approved by admin";
	case 404:
		return "No order found";
	case 200:
		return "Order already approved";
  }//end switch
}//end fkt
 
?>