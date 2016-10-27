<!DOCTYPE html>
<html lang="en">
<head>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <title>AdWords - SEO - Google+ - Styrk din online position!</title>
    <meta name="description" content="Få større udbytte af din online markedsføring - Specialister i AdWords, SEO &amp; Google+. Ring og tal med en rådgiver om dine muligheder allerede i dag"/>
    <meta name="robots" content="noodp,noydir"/>
    <meta property="og:locale" content="da_DK" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1" />
    <meta name="format-detection" content="telephone=no">
    <link rel="shortcut icon" href="https://www.greenclickmedia.dk/wp-content/themes/__gcm/ico/favicon.ico">

    <!-- Bootstrap core CSS -->
    <link href="https://www.greenclickmedia.dk/wp-content/themes/__gcm/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="https://www.greenclickmedia.dk/wp-content/themes/__gcm/style.css?version=1455282538" type="text/css" media="screen" />
    <link rel="stylesheet" href="https://www.greenclickmedia.dk/wp-content/themes/__gcm/font-awesome/css/font-awesome.min.css">
    <link href="https://www.greenclickmedia.dk/wp-content/themes/__gcm/css/jquery.fancybox.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,400italic,700,700italic' rel='stylesheet' type='text/css' />
	  <link href='https://fonts.googleapis.com/css?family=Roboto+Mono:400,400italic,700,700italic' rel='stylesheet' type='text/css' />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/js/html5shiv.js"></script>
    <script src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/js/respond.min.js"></script>
    <![endif]-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>
  <style>
  
    .order td{ height: 30px;}
  </style>
			  <?php
              //http://svn.crmtest.dk:8483

    function get_json($api_url, $hash_code){
        $ch = curl_init('http://svn.crmtest.dk:8483/api/Orders/action.Confirm');
    }

    function get_invoice_data($hash_code){
				$url = 'http://svn.crmtest.dk:8483/api/Publics(\''.$hash_code .'\')/action.InvoiceData';
        $ch = curl_init('http://svn.crmtest.dk:8483/api/Publics(\''.$hash_code .'\')/action.InvoiceData'http://svn.crmtest.dk:8483/api/Publics(\''.$hash_code .'\')/action.InvoiceData');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
                'Content-Length: ' . strlen($data_string))
        );

        $result = curl_exec($ch);
        curl_close($ch);
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
    ?>
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
			
    $clientIp       = $_SERVER['REMOTE_ADDR'];
    $clientIpTest   = "172.0.0.1";
	  $user_agent			= $_SERVER['HTTP_USER_AGENT'];;
    ## CloudFlare.com vars!
    $api_url        = "http://svn.crmtest.dk:8483/api/";
    $id             = "";
    $hashCode       = "";
    $result         = "";
    $invoice_data   = "";
    $invoice_info   = "";
    $invoice_stat   = "Ikke betalt";  
		$hash_txt				= "";
		$error_stat			= FALSE;
		$test_merchant_no = "8012702";
		$live_merchant_no = "6218857";	
		$merchant_no			= test_merchant_no;
			
			if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
			{
    		// what to do
			}
      
    if(isset($_GET["id"]))
        $hashCode = $_GET["id"];
    else
        $hashCode = "NO ID";


    if(isset($_GET["id"])){
        $url = 'http://svn.crmtest.dk:8483/api/Publics(\''. $hashCode .'\')/action.InvoiceData';
				$data = array("Hashcode" => $hashCode, "IP" => $clientIp);

        $data_string = json_encode($data);

        $ch = curl_init('http://svn.crmtest.dk:8483/api/Orders/action.Confirm');
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
    ?>
</head>
<body class="page-home">

<div class="navbar navbar-inverse" >
    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <a href="https://www.greenclickmedia.dk/" class="logo"></a>
                <div class="navbar-header">
                    <div class="header-text">
                    </div>
                    <div class="visible-sm">
                        <div class="phone">
                            <span class="wrapper">
                                <a href="tel://70230540" class="tel visible-sm visible-xs">70 230 540</a>
                                <span class="tel hidden-sm hidden-xs ">70 230 540</span>
                            </span>
                        </div>
                    </div>
                    <div class="visible-xs">
                        <div class="phone">
                            <span class="wrapper">
                                <a href="tel://70230540" class="tel visible-sm visible-xs ">70 230 540</a>
                                <span class="tel hidden-sm hidden-xs ">70 230 540</span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-2 hidden-sm hidden-xs">
                <div class="phone">
                    <span class="wrapper">
                        <a href="tel://70230540" class="tel visible-sm visible-xs ">70 230 540</a>
                        <span class="tel hidden-sm hidden-xs ">70 230 540</span>
                    </span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clear"></div>
<style>
    .btn-options li{
        background-color:#129e4e; font-size: 16px; font-family: Helvetica, Arial, sans-serif; color: #ffffff; text-decoration: none; text-decoration: none; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 23px; padding: 12px 18px; border: 1px solid #129e4e; display: inline-block;
    }
    .btn-options a{
        color: #000;
        text-decoration: none;
    }
</style>
<?php

    setlocale(LC_MONETARY, 'da_DK');
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
		$dl_invoice_url	= "download.php?hashCode=".$result."&id=". $invoice_nr ."";
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
	
<div class="home-logo" style="background-color: #fff;">
    <div class="container" style="background-color: #fff;">
<?php if($error_stat === FALSE){?>
        <div class="content" style="min-height: 300px;">
					<?php	if($result=== ""){ ?>
					<p>
					 <h2>Ordre ikke fundet!</h2>
          	Venligst kontakt Green.Click på +45 70 230 540&nbsp;eller skrive på info@greenclickmedia.dk
					</p>
					<?php } else { ?>

            <p>
            <h2>Tak for din bekræftelse af ordre: <?= $ordre_number ?></h2>
                <table width="50%" class="order">
                    <tr>
                        <th>Order ID</th>
                        <td> <?= $ordre_number ?></td>
                    </tr>
                    <tr>
                        <th>Virksomhed</th>
                        <td><?=$client_name?></td>
                    </tr>
                    <tr>
                        <th>Rådgiver hos Green.Click</th>
                        <td><?=$seller?></td>
                    </tr>
                    <tr>
                       <th>Faktura status</th>
                      <td> <a href="<?=$dl_invoice_url?>"><?=$invoice_nr?> <?=$invoice_stat?></a></td>
                    </tr>

                <?php if(!$is_paid){ ?>
                  <tr style="border-top: solid 1px #ccc;">
                        <th><strong>Til betaling faktura <a href="<?=$dl_invoice_url?>"><?=$invoice_nr?></a></strong></th>
                        <td><strong><?=money_format('%i', $total_amount) . "\n"; ?></strong></td>
                    </tr>
                    <tr>
                        <th><i>Herfra moms <?=$format_vat?></i></th>
                        <td><i><?=money_format('%i', $vat_amount) . "\n"; ?></i></td>
                    </tr>
                  <tr>
                    <td colspan="2" style="padding-top:15px;">Betalings ID netbank:</td>
                  </tr>
                    <tr>
                      <td colspan="2" >+71< <?=$ocr;?> +87535363<</td>
                    </tr>
                 <? }?> 
                </table>
            </p>
            <div id="btn">
            <p style="padding-top: 10px;">    
              <!-- <input onclick="javascript: paymentwindow.open()" type="button" value="Go to payment">-->
             <div class="text-button" style="background-color:#129e4e; font-family:Arial,sans-serif, 'Roboto'; border-radius: 23px; font-size:15px; line-height:20px; text-align:center; text-transform:uppercase; width:190px; height:40px; vertical-align:center; padding-top:10px; float: left;"> 
              <a href="<?=$dl_invoice_url?>" style="color:#ffffff; text-decoration:none; cursor: pointer">Hent faktura</a>
            </div>
         
            <?php if(!$is_paid){?>
            <div class="text-button" style="background-color:#129e4e; font-family:Arial,sans-serif, 'Roboto'; border-radius: 23px; font-size:15px; line-height:20px; text-align:center; text-transform:uppercase; width:190px; height:40px; vertical-align:center; padding-top:10px; margin-left:200px;"> 
              <a onclick="javascript: paymentwindow.open()" style="color:#ffffff; text-decoration:none; cursor: pointer">Betal faktura</a>
            </div>
          </div>
          </p>
          <p style="margin-top:30px;">
            Du kan betale med netbank, Dankort og mobilpay ved at trykke på knappen "<a onclick="javascript: paymentwindow.open()" style="cursor:pointer">Betal faktura</a>".
          </p>
          <?php } ?>
      
          <p style="clear:both; margin-top:20px;"><br />
           Har du spørgsmål, kan du ringe på +45 70 230 540&nbsp;eller skrive på info@greenclickmedia.dk
          </p>
	<?php } ?>
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
	<!-- PAYMENT -->
            <script charset="UTF-8" src="https://ssl.ditonlinebetalingssystem.dk/integration/ewindow/paymentwindow.js" type="text/javascript"></script>
            <script type="text/javascript">
                paymentwindow = new PaymentWindow({
                    'merchantnumber': "<?=$merchant_no?>",
                    'amount': "<?=$epay_total?>",
                    'currency': "DKK",
                    'orderid': "<?=$invoice_nr?>",
                    'instantcapture': "1",
                    'accepturl' : "https://www.greenclickmedia.dk/ConfirmOrder/thank-you.php?id=<?=$hash_code?>&invoiceid=<?=$invoice_nr?>",
                    'callbackurl':"https://www.greenclickmedia.dk/ConfirmOrder/callback-epay.php?id=<?=$hash_code?>"
                });
            </script>
            </p>
<!-- End epay -->

        </div>
	<?php }//end no error
			else {?>
				  <div class="content" style="min-height: 300px;">
            <p>
            <h2>Ordre ikke fundet, venligst kontakt os på  +45 70 230 540</h2>
						<!-- TODO SEND MAIL w infoo -->
					</div>	
	<?php }//end else on error?>
    </div>

    <div class="container" style="background-color: #fff;">
        <div class="row">
            <div class="col-md-12 t40m b35m flexslider">
                <div class="partnerslides">
                    <img width="150" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-aalborg-kommune.png" />
                    <img width="100" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-ucn.png" />
                    <a href="https://www.google.com/partners/#a_profile;idtf=5736497472" id="" target="_blank" class="widget_sp_image-image-link" title="" rel="">
                        <img width="75" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-aalborg-universitet.png" />
                    </a>
                    <img width="145" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-ministerie.png" />
                    <img width="86" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-ap-pension.png" />
                    <img width="184" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-visitnordjylland.png" />
                    <a href="https://www.google.com/partners/#a_profile;idtf=5736497472" id="" target="_blank" class="widget_sp_image-image-link" title="" rel="">
                        <img width="168" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-google-partner.png" /></a>
                    <img width="205" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-microsoft-partner.png" />
                    <img width="58" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-e-maerket.png" />
                    <img width="75" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-dansk-industri.png" />
                    <img width="195" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-bing-ads-professional.png" />
                    <img width="70" height="78" alt="" class="attachment-full" style="max-width: 100%;" src="https://www.greenclickmedia.dk/wp-content/uploads/slider-certificeringer-google-adwords-certified.png" />
                </div>
            </div>
        </div>
    </div>
</div>
<hr class="visible-xs" style="background-color: #fff;" />
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1" style="background-color: #fff;">
            <div class="hvem">
                <h3 class="b15m">Hvorfor Green Click Media?</h3>
                <p class="b20m"><p>Vi hjælper danske virksomheder med at opnå en styrket online position, erobre markedsandele og udvikle en attraktiv online forretning. I samspil med at tiltrække flere kunder, styrke dine salgskanaler og analysere dine resultater skaber vi resultater der kan måles på bundlinjen.</p>
                </p>
                <p class="link-hvem nopadding-top t20m b40m"></p>
            </div>
        </div>
    </div>
    <div class="row hidden-xs hidden-sm" style="background-color: #fff;">
        <div class="col-md-12">
            <div class="hvembox">
                <h2><span class="tal">35</span></h2>
                <p><span>Medarbejdere</span><br>med ekspertise</p>
            </div>
            <div class="hvembox">
                <h2><span class="tal">30</span><span class="tal_postfix"></span></h2>
                <p><span>Certificeringer</span><br>fra Google</p>
            </div>
            <div class="hvembox">
                <h2><span class="tal">1000</span><span class="tal_postfix">+</span></h2>
                <p><span>Kunder</span><br>med resultater</p>
            </div>
            <div class="hvembox">
                <h2><span class="tal">30</span><span class="tal_postfix">+</span></h2>
                <p><span>Partnere</span><br>vi samarbejder med</p>
            </div>
            <div class="hvembox">
                <h2><span class="tal">0</span><span class="tal_postfix"></span></h2>
                <p><span>Husdyr</span><br>(vi arbejder på det)</p>
            </div>
        </div>
    </div>
</div>

<hr/>

<div class="social">
    <div class="container">
        <div class="row b30m t30m">
            <div class="col-xs-3 col-md-3 col-md-offset-0">
                <a href="https://plus.google.com/+GreenclickmediaDk" class="gplus" target="_blank" rel="publisher">Hold dig ajour</a>
                <div class="hidden-xs hidden-sm">
                    <p>
                        <strong>Hold dig ajour</strong>
                        <br>
                        Følg os på Google+
                    </p>
                </div>
            </div>
            <div class="col-xs-3 col-md-3">
                <a href="https://www.facebook.com/GreenClickMedia" class="facebook" target="_blank">Se hvad vi laver</a>
                <div class="hidden-xs hidden-sm">
                    <p>
                        <strong>Se hvad vi laver</strong>
                        <br>
                        Følg os på Facebook
                    </p>
                </div>
            </div>
            <div class="col-xs-3 col-md-3">
                <a href="https://www.linkedin.com/company/green-click-media" class="linkedin" target="_blank">Netværk med os</a>
                <div class="hidden-xs hidden-sm">
                    <p>
                        <strong>Netværk med os</strong>
                        <br>
                        Connect på LinkedIn
                    </p>
                </div>
            </div>
            <div class="col-xs-3 col-md-3">
                <a href="https://www.youtube.com/user/GreenClickMedia9000" class="youtube" target="_blank">Få undervisning</a>
                <div class="hidden-xs hidden-sm">
                    <p>
                        <strong>Se videofeed</strong>
                        <br>
                        Se vores YouTube
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="hidden-xs hidden-sm">
                 <div class="copyright">
                    <p class="nomargin-bottom t60m">
                        <span>Green Click Media ApS &copy; 2016</span><br class="visible-xs">
                        <span><a href="mailto:info@greenclickmedia.dk">info@greenclickmedia.dk</a></span><br class="visible-xs">
                        <span class="">TLF. +45 70 230 540</span><br class="visible-xs">
                        <span>CVR 32 65 13 21</span><br class="visible-xs">
                        <span><a href="http://www.greenclickmedia.dk">www.greenclickmedia.dk</a></span>
                    </p>
                    <div class="clear"></div>

                    <ul class="footer-bottom">
                        <li class="cookies"><a href="#">Vi kan godt lide cookies!</a></li><br class="visible-xs">
                        <li><a href="http://www.greenclickmedia.dk/om/betingelser/">Læs vores salgs- og leveringsbetingelser</a></li><br class="visible-xs">
                        <li><a href="http://www.greenclickmedia.dk/om/socialt-ansvar/">Socialt ansvar</a></li>
                        <li><img src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/img/icon2_dankort.png" alt="Dankort"/></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/js/jquery.js"></script>
<script src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/js/bootstrap.min.js"></script>
<script src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/js/jquery.fancybox.js"></script>

<script src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/js/jquery.carouFredSel-6.2.1.js"></script>
<script src="https://www.greenclickmedia.dk/wp-content/themes/__gcm/js/jquery.carouFredSel-6.2.1-packed.js"></script>

<script>
    $(window).load(function() {
        $(".partnerslides").carouFredSel({
            width: "970px",
            height: "78px",
            items: {
                visible: 6,
                /*width: "970px",*/
                height: "78px"
            },
            scroll: {
                easing: "quadratic",
                duration: 4000,
                items: 6
            },
            auto: 3500
        });
    });
</script>


</body>
</html>
