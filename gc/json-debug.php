<?php
include_once('inc/config.php');
include_once('inc/function.php');
## simpel tjecj for hashcode
	if(isset($_GET["id"]))
		$hashCode = $_GET["id"];
	else
		$hashCode = FALSE;

if(isset($_GET["id"])){
	$url = 'http://gcmcrm.azurewebsites.net/api/Publics(\''. $hashCode .'\')/action.InvoiceData';
	$data = array("Hashcode" => $hashCode, "IP" => $clientIp);

	$data_string = json_encode($data);

	$ch = curl_init('https://gcmcrm.azurewebsites.net/api/Orders/action.Confirm');
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($data_string))
	);

	$result = curl_exec($ch);
	curl_close($ch);

	if($result=== ""){
		//no
	}
	else{
		$invoice_data   = $api_url ."Publics('".$result ."')/action.InvoiceData";
		$invoice_url    = $api_url ."Publics('".$result ."')";

		$invoice_info   = @file_get_contents($invoice_data);

		if($invoice_info === FALSE){
			$hash_txt 	= "fejl";
			$error_stat 	= TRUE;
		}
		else{
			$invoice_arr   = json_decode($invoice_info , true);
		}
	}
}

$hash_code      = $result;
$net_amount     = $invoice_arr[NetAmount];
$invoice_nr     = $invoice_arr[InvoiceNumber];
$vat_amount     = $invoice_arr[VatAmount];
$client_name    = $invoice_arr[Name];
$ordre_number   = $invoice_arr[OrdreNumber];
$seller         = $invoice_arr[Seller];
$type           = $invoice_arr[Type];
$vat_rate       = $invoice_arr[VatRate];
$is_paid        = $invoice_arr[IsPayed];
$ocr            = $invoice_arr[OCR];
//$dl_invoice_url	= "dl.php?hashCode=".$result."&id=". $invoice_nr ."";
$dl_invoice_url	=  get_invoice_pdf($hash_code, $invoice_nr); //"download.php?hashCode=".$result."&id=". $invoice_nr ."";
$format_vat     = sprintf("%.0f%%", $vat_rate * 100);
$total_amount   = $vat_amount+$net_amount;
//  echo money_format('%i',$total_amount) . "\n";
$epay_total     = number_format($vat_amount+$net_amount, 2, '', ''); //added two 00 or cents to the total-
$status_text    = "";

/** STATUS CODES */
switch($status_code){
	case 400:
		$status_text = "Order not approved by admin";
	case 404:
		$status_text = "No order found";
	case 200:
		$status_text = "Order already approved";
}

if($is_paid){
	$invoice_stat = "Betalt";
}
?>
<hr />
<h1>DEBUG</h1>

	<p>
	<hr />
	<pre>Invoice Hascode: <?=$result;?></pre>
	<pre>JSON Url: <?=$url?></pre>
	<pre>Invoice url: <?=$invoice_url?></pre>
	<pre><?php print_r($invoice_arr ); ?></pre>
	<pre>Get content by hashcode: <?=$hash_txt; ?></pre>
	<pre>Sending: <?php print_r($data_string); ?></pre>
	<pre>User Agent: <?=$user_agent?></pre>

	<?php
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
?>