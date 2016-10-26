<!DOCTYPE html>
<html lang="en">
<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">

    <?php
    /**
     * Created by PhpStorm.
     * User: jan-imac
     * Date: 10/02/2016
     * Time: 15.08
     *
     * eks:
     * http://gcmcrm.azurewebsites.net/api/Publics('fbd141602a42146b848fd8ffd0a4f256')/action.InvoiceData
     * http://gcmcrm.azurewebsites.net/api/Publics('fbd141602a42146b848fd8ffd0a4f256')
     */

    // Check if comming from CloudFlare
    $debug = 1;

    if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
        $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"]; //real visitor ip address CF
        $clientCountry  = $_SERVER["HTTP_CF_IPCOUNTRY"];
        $clientCF       = $_SERVER["HTTP_CF_RAY"]; // CloufFare CF-RAY - https://support.cloudflare.com/hc/en-us/articles/200169746-What-is-the-CF-RAY-header-
    }

    $epay_hash      = "";
    $clientIp       = $_SERVER['REMOTE_ADDR'];
    $clientIpTest   = "172.0.0.1";
    ## CloudFlare.com vars!
    $api_url        = "http://gcmcrm.azurewebsites.net/api/";
    $id             = "";
    $hashCode       = "";
    $result         = "";
    $invoice_data   = "";
    $invoice_info   = "";

    if(isset($_GET['hash']))
        $epay_hash = $_GET['hash'];


    if(isset($_GET["id"]))
        $hashCode = $_GET["id"];
    else
        $hashCode = "NO ID";


    if(isset($_GET["id"])){

        $hash_code = $_GET['id'];
    }
    
    if(isset($_GET['hash']))
        $Transaction_Id = $_GET['txnid'];
    ?>
    <?php
    //api/Publics('4041f991db8561b9ad8a172f3f7a02e6')/action.Paid

    if(isset($_GET['id']) && isset($_GET['hash'])){

        $url = "https://gcmcrm.azurewebsites.net/api/Publics/action.Paid";
        $data = array("Hashcode" => $_GET['id'], "Transaction_Id" => $_GET['txnid']);
      
        $data_string = json_encode($data);

        $ch = curl_init('https://gcmcrm.azurewebsites.net/api/Publics/action.Paid');
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );

        //execute post
        $result = curl_exec($ch);
      
      
        // Check if any error occurred
      if (!curl_errno($ch)) {
        $info = curl_getinfo($ch);
        echo '<pre>Took ', $info['total_time'], ' seconds to send a request to ', $info['url'], "</pre> \n";
      }
      // Check HTTP status code
      if (!curl_errno($ch)) {
        switch ($http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE)) {
          case 200:  # OK
            break;
          default:
            echo '<pre>Unexpected HTTP code: ', $http_code, "</pre>\n";
        }
      }


      print "<pre>";
       print_r($data_string);
      print "<br /><br /> Result: " . print_r($result);
      //print "<br /> Response Code: " . var_dump(http_response_code());
      print "</pre>";
       // mail('jan@greenclickmeida.dk','modtaget',$result);

        //close connection
        curl_close($ch);
    }
    ?>

	<?php
      /*
	echo "<pre>";
	 ### json debug
    if(json_last_error()){
        switch (json_last_error()) {
        case JSON_ERROR_NONE:
        echo ' - No errors';
        break;
        case JSON_ERROR_DEPTH:
        echo ' - Maximum stack depth exceeded';
        break;
        case JSON_ERROR_STATE_MISMATCH:
        echo ' - Underflow or the modes mismatch';
        break;
        case JSON_ERROR_CTRL_CHAR:
        echo ' - Unexpected control character found';
        break;
        case JSON_ERROR_SYNTAX:
        echo ' - Syntax error, malformed JSON';
        break;
        case JSON_ERROR_UTF8:
        echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
        break;
        default:
        echo ' - Unknown error';
        break;
        }
    }
    if(json_last_error_msg()){
        echo json_last_error_msg(); // unexpected character
    }
	echo "</pre>";
  */
?>
</body>
</html>
