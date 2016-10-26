<?php
include_once('inc/config.php');
include_once('inc/function.php');
$invoiceId = "";
 if(isset($_GET["invoiceid"]))
        $invoiceId = $_GET["invoiceid"];
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
				<img id="cutout" src="graphics/thomas_holst_cutout.png" class="desktop" alt="">
				<h1 class="tcolor-black">
					<span class="tcolor-green">Tak for din betaling.</span><br>
				</h1>
				<h3 class="tcolor-green">Hvad så nu?</h3>
				<p>
					<strong>1. Betaling</strong><br>
					Vi har modtaget din betaling af faktura <?=$invoiceId?>.
				</p>
				<p>
					<strong>2. Forberedelse</strong><br>
					Du bliver kontaktet af din personlige rådgiver som gennemgår din ordre og den sidste forventningsafstemning.
				</p>
				<p>
					<strong>3. Produktion</strong><br>
					Din Aadwords Manager går efterfølgende nu i gang med at sætte din kampagne op.
				</p>
			<?php /*	
			<p>
					<strong>4. Opstartsmøde</strong><br>
					Din kundemanager kontakter dig og afholder telefonisk opstartsmøde, hvor i sammen gennemgår kampagnen.
				</p>
				<p>
					<strong>5. Start</strong><br>
					Efter opstartsmøde og din accept af kampagnen, aktiveres kampagnen.
				</p>
				*/?>
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
				<button type="button" onclick="window.location.href = '/'" class="button bcolor-green tcolor-white">Gå til forsiden</button>
		</div>
		<?php
			send_paid_mail($invoiceId);
		?>
	</body>
</html>



