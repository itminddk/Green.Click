<?php
## ?id=7b3184b04c86d513bbc2fa4a9eb1cb09&oid=8168
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
$api_url            = "http://gcmcrm.azurewebsites.net/api/";
$api_confirm_url    = "https://gcmcrm.azurewebsites.net/api/Orders/action.Confirm";
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


## URL
$live_server_url	= 'https://gcmcrm.azurewebsites.net';
$test_server_url	= 'http://svn.crmtest.dk:8483';
$host				= $test_server_url;

## VARS
$order_hashCode	= FALSE;
$order_id		= FALSE;
$order_length	= strlen($_GET['id']);
$clientIp       = $_SERVER['REMOTE_ADDR'];



if(isset($_GET["id"]))
    $order_hashCode = $_GET["id"];
else
    $order_hashCode = FALSE;


if(isset($_GET['oid']))
    $var_order_id		= $_GET['oid'];


if(strlen($order_hashCode) === 32){
    //$url 			= 'http://gcmcrm.azurewebsites.net/api/Publics(\''. $order_hashCode .'\')/action.InvoiceData';
    $data 			= array("Hashcode" => $order_hashCode, "IP" => $clientIp);
    $data_string 	= json_encode($data);

    $ch = curl_init($host . '/api/Orders/Confirm');
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Content-Type: application/json',
            'Content-Length: ' . strlen($data_string))
    );

    $result = curl_exec($ch);



    if(! $result){
        echo "ERROR, result is empty!";
        echo "<pre>";
        print_r($data);
        print_r(curl_getinfo($ch));
        echo "</pre>";
        echo $result;
    }
    else{
        print "Godkendt! <br>";

        $invoice_data   = $host ."/api/Publics('".$result ."')/action.InvoiceData";
        $invoice_url    = $host ."/api/Publics('".$result ."')";

        $invoice_info   = @file_get_contents($invoice_data);

        if($invoice_info === FALSE){
            echo "No invoice found: $invoice_data";
        }
        else{

            $invoice_arr   = json_decode($invoice_info , true);

            print_r($invoice_arr);
            //print_r(curl_getinfo($ch));

        }
    }

    curl_close($ch);
}	echo "<hr/>";
$url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//var_dump(parse_url($url));

preg_match("/[^\/]+$/", $url, $matches);
$last_word = $matches[0]; // test
print $last_word;
?>

<script src="inc/script.js"></script>

<?php
/*
## vars
	$order_hashCode	= FALSE;
	$order_id		= FALSE;
	$order_length	= strlen($_GET['id']);
	$server_url		= "https://gcmcrm.azurewebsites.net";
	$clientIp           = $_SERVER['REMOTE_ADDR'];


## tjeck for hashcode & order id in url

	if(isset($_GET['id']) && strlen($_GET['id']) === 32){
		$order_hashCode = $_GET["id"];
	}
	else{
		echo "No ID set or wrong length $order_length";
	}

	if(isset($_GET["oid"]))
		$order_id	= $_GET['oid'];

## DO STUFF
	if(!$order_hashCode === FALSE){

		## Build json data
		$data 			= array("Hashcode" => $hashCode, "IP" => $clientIp);
		$data_string 	= json_encode($data);

		$ch = curl_init($server_url	. '/api/Orders/action.Confirm');
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_VERBOSE, true);
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(
						'Content-Type: application/json',
						'Content-Length: ' . strlen($data_string))
		);

		if( ! $result = curl_exec($ch)){
			// IF ERROR
			echo "Error: ";
			echo "<pre>";
			print_r($data);
			print_r(curl_getinfo($ch));
			echo "</pre>";
		}
		else{

			// IF FINE
			$invoiceId = $result;

			echo "Invoice ID:" . $invoiceId;
			//print_r($result);


			if ($invoiceId === "")
			{
				// INVOICE NOT FOUND
				echo "Invoice not found";
			}

			echo "</pre>";
		}
		curl_close($ch);



	}
	else{
		echo "ERROR!";
	}
*/
?>
