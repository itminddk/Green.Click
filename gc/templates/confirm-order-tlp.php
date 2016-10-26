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
				<p>
					Du har nu bekræftet ordre <a href="order_info.php?id=<?=$hash_code?>" class="tcolor-green"><?=$ordre_number?></a>
				</p>
				<h3 class="tcolor-green">Hvad så nu?</h3>

				<p>
					<strong>1. Betaling</strong><br>

					Vi modtager din betaling.
					<br />
					<br />
					<button onclick="javascript: paymentwindow.open()" class="button2 bcolor-green tcolor-white">Betal faktura</button>
					<button onclick="window.location.href = '<?=$dl_invoice_url?>'" class="button2 bcolor-black tcolor-white">Hent faktura</button>
					<br />
					<i style="font-size: 12px;">Du kan betale med netbank, Dankort og mobilepay med "Betal faktura".</i><br>
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
				
			  <button onclick="javascript: paymentwindow.open()" class="button2 bcolor-green tcolor-white">Betal faktura</button>
				<button onclick="window.location.href = '<?=$dl_invoice_url?>'" class="button2 bcolor-black tcolor-white">Hent faktura</button>
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