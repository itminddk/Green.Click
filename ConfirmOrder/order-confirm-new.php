<?php
include_once('inc/config_new.php');
include_once('inc/function_new.php');

## ?id=7b3184b04c86d513bbc2fa4a9eb1cb09
#oid=8168

if(isset($_GET["id"]))
	$order_hash_code = $_GET["id"];
else
	$order_hash_code = FALSE;


	$hash_code_length = strlen($order_hash_code);

## Test if hashcode has correct length
if(strlen($order_hash_code) > 30){ //stupid

	#confirm order and get invoice hash_code

	$result = confirm_order($order_hash_code);

	if(! $result){
		##ERROR
		## Send Error Mail
		$mail_subject	= "Error - Order not Confirmed";
		$mail_msg 		= "Order Hashcode:" . $order_hash_code ." \r\n"
		. "IP: " . $_SERVER['REMOTE_ADDR'] . "\r\n"
		. "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n"
		. "Debug:  https://www.greenclickmedia.dk/gc/json-debug.php?id=" . $order_hash_code;

		send_stat_mail($mail_subject, $mail_msg);
	}
	else{

	## print "Godkendt! <br>";

		$invoice_data   = $host ."/api/Publics('". $result ."')/InvoiceData";
		$invoice_url    = $host ."/api/Publics('". $result ."')";

		//$invoice_info   = @file_get_contents($invoice_data);

		$invoice_info = url_get_contents($invoice_data);

		//var_dump($invoice_info);
		//$invoice_info->{'Name'};


		if(! $invoice_data){
			##Error no invoicefound
			echo "No invoice found: $invoice_data";


		}
		else{
			## get invoice vars
			//var_dump($invoice_info);
			$invoice_hashcode = $result;
			$net_amount     = $invoice_info->{'NetAmount'};

			$invoice_nr     = $invoice_info->{'InvoiceNumber'};
			$vat_amount     = $invoice_info->{'VatAmount'};
			$client_name    = $invoice_info->{'Name'};
			$ordre_number   = $invoice_info->{'OrdreNumber'};
			$seller         = $invoice_info->{'Seller'};
			$type           = $invoice_info->{'Type'};
			$vat_rate       = $invoice_info->{'VatRate'};
			$is_paid        = $invoice_info->{'IsPayed'};
			$ocr            = $invoice_info->{'OCR'};
			#DL url
			$dl_invoice_url	=  get_invoice_pdf($result, $invoice_nr);
			## Epay vars
			$format_vat     = sprintf("%.0f%%", $vat_rate * 100);
			$total_amount   = $vat_amount+$net_amount;
			$epay_total     = number_format($vat_amount+$net_amount, 2, '', ''); //added two 00 or cents to the total



		}
	}
}//end test length
else{
	## wrong length of hashcode
	send_stat_mail("Error - Wrong Length", "Wrong length of hashcode " . $order_hash_code .  "\r\n Længde: ". $hash_code_length ."\r\n  IP: " . $_SERVER['REMOTE_ADDR'] );
}
?>
<script src="inc/script.js"></script>

<!doctype html>
<html>
<head>
	<title>Tak for du valgte Green.Click</title>
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
	<?php if($result){?>

		<img id="cutout" src="graphics/thomas_holst_cutout.png" class="desktop" alt="">
		<h1 class="tcolor-black">
			<span class="tcolor-green">Hej og velkommen.</span><br>
			Tak for du valgte Green.Click
		</h1>
		<p>
			Vi glæder os til at komme i gang med din kampagne og lære din forretning endnu bedre at kende, så vi sammen kan skabe resultater.
		</p>
		<p>
			Du har nu bekræftet ordre <a href="order_info.php?id=<?=$result?>" class="tcolor-green"></a><?=$ordre_number?>
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
			<i style="font-size: 12px;">Du modtager også en faktura pr. mail inden for den næste 10 minutter.	</i>
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

		<button onclick="javascript: paymentwindow.open()" class="button2 bcolor-green tcolor-white">Betal faktura</button>
		<button onclick="window.location.href = '<?=$dl_invoice_url?>'" class="button2 bcolor-black tcolor-white">Hent faktura</button>

	<?php
	}
	else {
		?>
		<div class="content" style="min-height: 300px;">
			<p>
			<h2>Ordre ikke fundet, venligst kontakt os på  +45 70 230 540</h2>

			<?php

			## Send Error Mail
			$mail_subject	= 'Error - Order not found';
			$mail_msg 		= "Order Hashcode:" . $result ." \r\n"
					. "IP: " . $_SERVER['REMOTE_ADDR'] . "\r\n"
					. "User Agent: " . $_SERVER['HTTP_USER_AGENT'] . "\r\n";

			send_stat_mail($mail_subject, $mail_msg);
			?>
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
		'accepturl' : "https://www.greenclickmedia.dk/gc/thank-you.php?id=<?=$result?>&invoiceid=<?=$invoice_nr?>",
		'callbackurl':"https://www.greenclickmedia.dk/gc/callback.php?id=<?=$result?>"
	});
</script>

