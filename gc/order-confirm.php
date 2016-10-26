<?php
include_once('inc/config.php');
include_once('inc/function.php');
## simpel tjecj for hashcode
	if(isset($_GET["id"]))
		$hashCode = $_GET["id"];
	else
		$hashCode = FALSE;
?>
	<script src="inc/script.js"></script>
<?php
$var_orderid		= "";
if(isset($_GET['oid']))
	$var_orderid		= $_GET['oid'];

$google_bot = is_google_bot($user_agent);

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
	
		$msg = "Url: " . $url . "\r\n Data String: " . $data_string . "\r\n Order ID: ". $var_orderid ."\r\n IP: " .  $_SERVER['REMOTE_ADDR'];
		send_stat_mail("json call", $msg); 
	
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
$google_bot			= FALSE;
//$dl_invoice_url	= "dl.php?hashCode=".$result."&id=". $invoice_nr ."";
$dl_invoice_url	=  get_invoice_pdf($hash_code, $invoice_nr); //"download.php?hashCode=".$result."&id=". $invoice_nr ."";
$format_vat     = sprintf("%.0f%%", $vat_rate * 100);
$total_amount   = $vat_amount+$net_amount;
//  echo money_format('%i',$total_amount) . "\n";
$epay_total     = number_format($vat_amount+$net_amount, 2, '', ''); //added two 00 or cents to the total-
$status_text    = "";
$msg						= "";
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
<!doctype html>
<html>
	<head>
		<title>Payment</title>
		<meta charset="utf-8">
        <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Mono" rel="stylesheet">
		<link href="css/style.css" rel="stylesheet">
		<link rel="icon" href="https://www.greenclickmedia.dk/wp-content/uploads/2016/03/cropped-favicon-32x32.png" sizes="32x32" />
<link rel="icon" href="https://www.greenclickmedia.dk/wp-content/uploads/2016/03/cropped-favicon-192x192.png" sizes="192x192" />
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
						(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
					m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-11429366-1', 'auto');
			ga('send', 'pageview');
		</script>
	</head>
	<body id="payment-page">
		<div id="payment-topbar">
			<a href="/"><img src="graphics/logo.svg" alt=""></a>
		</div>
		<div id="payment-wrapper">
			<?php if($hashCode != FALSE){?>
			


				<img id="cutout" src="graphics/thomas_holst_cutout.png" class="desktop" alt="">
				<h1 class="tcolor-black">
					<span class="tcolor-green">Hej og velkommen.</span><br>
					Tak for du valgte Green.Click
				</h1>
				<p>
					Vi glæder os til at komme i gang med din kampagne og lære din forretning endnu bedre at kende, så vi sammen kan skabe resultater.
				</p>
			<?php 
					if($hash_code === "Invoice not found"){
						print "<strong>Der er opstået en fejl, venligst kontakt Green.Click</strong><br /> på +45 70 230 540";
						$msg_txt	= $hashCode . " Ordre ID: " . $var_orderid;
						send_error_mail($msg_txt);
					}else{
						$msg = "IP: " . $_SERVER['REMOTE_ADDR'] . " \r\n User agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n Invoice: " . $invoice_nr ."\r\n" . "\r\n Amount: " . $net_amount ."\r\n Hashcode: https://www.greenclickmedia.dk/gc/json-debug.php?id=" . $hashCode . "\r\n Data String: " . $data_string . "\r\n OrderID:" . $var_orderid ."";
						send_stat_mail("Ordre $ordre_number bekræftet", $msg);
					?>
				<p>
					Du har nu bekræftet ordre <a href="order_info.php?id=<?=$hash_code?>" class="tcolor-green"><?=$ordre_number?></a> <!-- <?=$var_orderid?>-->
				</p>
				<h3 class="tcolor-green">Hvad så nu?</h3>

				<p>
					<strong>1. Betaling</strong><br>

					Vi modtager din betaling.
					<br />
					<br />
			
				
					<button onclick="javascript: paymentwindow.open()" class="button2 bcolor-green tcolor-white">Betal faktura</button>
					<button onclick="window.location.href = '<?=$dl_invoice_url?>'" class="button2 bcolor-black tcolor-white">Hent faktura</button>
					
					<br /><br />
					<i style="font-size: 12px;">Du kan betale med netbank, Dankort og mobilepay med "Betal faktura".</i><br />
					<i style="font-size: 12px;">		Du modtager også en faktura pr. mail inden for den næste 10 minutter.	</i>
					<br>
				</p>

				<p>
					<strong>2. Forberedelse</strong><br>
					Du bliver kontaktet af din rådgiver som gennemgår din ordre og den sidste forventningsafstemning.
				</p>
				<p>
					<strong>3. Produktion</strong><br>
					Din Marketing Manager går efterfølgende nu i gang med at sætte din kampagne op.
				</p>
			<?php 
						/*
				<p>
					<strong>4. Opstartsmøde</strong><br>
					Din kundemanager kontakter dig og afholder telefonisk opstartsmøde, hvor i sammen gennemgår kampagnen.
				</p>
					*/ ?>
				<p>
					<strong>4. Start</strong><br>
					Kampagnen aktiveres og optimeres.
				</p>
			
			
				<img id="cutout" src="graphics/thomas_holst_cutout.png" class="mobile" alt="">
				<p></p>
				<p class="signed">
					<strong>Thomas Holst</strong><br>
					Produktionschef<br>
					<img src="graphics/thomas_holst_signature.png" alt="">
					Tlf. 70 230 540<br>
					<a class="tcolor-green" href="mailto:thf@greenclickmedia.dk">thf@greenclickmedia.dk</a><br>
				</p>
				<!--<button type="button" onclick="window.location.href = '/'" class="button bcolor-green tcolor-white">Gå til forsiden</button>-->
				
			<!--  
			<button onclick="javascript: paymentwindow.open()" class="button2 bcolor-green tcolor-white">Betal faktura</button>
				<button onclick="window.location.href = '<?=$dl_invoice_url?>'" class="button2 bcolor-black tcolor-white">Hent faktura</button>
-->
			
			
							<?php }?>	
			<?php }
			else {?>
			<div class="content" style="min-height: 300px;">
				<p>
				<h2>Ordre ikke fundet, venligst kontakt os på  +45 70 230 540</h2>
					
					<?php 
						$msg = "IP: " . $_SERVER['REMOTE_ADDR'] . " \r\n User agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n Hashcode: https://www.greenclickmedia.dk/gc/json-debug.php?id=" . $hash_code . "\r\n";
				
						send_stat_mail("Ordre ikke fundet " .$var_orderid , $msg) ?>
			</div>
			<?php }//end else on error?>
		</div>
	</body>
</html>

<!-- PAYMENT -->
<script charset="UTF-8" src="https://ssl.ditonlinebetalingssystem.dk/integration/ewindow/paymentwindow.js" type="text/javascript"></script>
<script type="text/javascript">
	paymentwindow = new PaymentWindow({
		'merchantnumber': "<?=$merchant_no?>",
		'amount': "<?=$epay_total?>",
		'currency': "DKK",
		'orderid': "<?=$invoice_nr?>",
		'instantcapture': "1",
		'accepturl' : "https://www.greenclickmedia.dk/gc/thank-you.php?id=<?=$hash_code?>&invoiceid=<?=$invoice_nr?>",
		'callbackurl':"https://www.greenclickmedia.dk/gc/callback.php?id=<?=$hash_code?>"
	});
</script>
<!-- End epay -->
<? //print $hash_code; ?>

	
<?php if($debug == 1){?>
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
}//end debug ?>