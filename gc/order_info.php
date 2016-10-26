<?php
include_once('inc/header.php');

$invoice_arr = get_order_data($hashCode);


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

$total_amount   = $vat_amount+$net_amount;
//  echo money_format('%i',$total_amount) . "\n";
$epay_total     = number_format($vat_amount+$net_amount, 2, '', ''); //added two 00 or cents to the total-

$dl_invoice_url	=  get_invoice_pdf($hash_code, $invoice_nr);

    if($is_paid){
        $invoice_stat = '<span class="paid">Betalt</span>';
    }
    else{
        $invoice_stat = '<span class="notpaid">Ikke Betalt</span>';
    }

?>
<div id="payment-wrapper">
    <h1 class="tcolor-black">Tak for din bekræftelse af ordre: <span class="tcolor-green"><?=$ordre_number ?></span></h1>
    <p>
        Du kan betale med netbank, Dankort og mobilepay ved at trykke på knappen "Betal faktura".<br>
        Har du spørgsmål, kan du ringe på +45 70 230 540 eller skrive på info@greenclickmedia.dk
    </p>
    <button onclick="javascript: paymentwindow.open()" class="button2 bcolor-green tcolor-white">Betal faktura</button>
    <button onclick="window.location.href = '<?=$dl_invoice_url?>'" class="button2 bcolor-black tcolor-white">Hent faktura</button>
    <br /><br />
    <table>
        <tr>
            <td>Order ID</td>
            <td><?=$ordre_number ?></td>
        </tr>
        <tr>
            <td>Virksomhed</td>
            <td><?=$client_name ?></td>
        </tr>
        <tr>
            <td>Rådgiver</td>
            <td><?=$seller?></td>
        </tr>
        <tr>
            <td colspan="2" class="bcolor-white">
                <h2 class="tcolor-green">Status</h2>
            </td>
        <tr>
            <td>Faktura nr. <?=$invoice_nr ;?></td>
            <td class="tcolor-red"><?=$invoice_stat?></td>
        </tr>
        <tr>
            <td>Total</td>
            <td>DKK <?=$total_amount?></td>
        </tr>
        <tr>
            <td>Moms 25 %</td>
            <td>DKK <?=$vat_amount;?></td>
        </tr>
    </table>
    <p>
        Betalings ID netbank:<br>
        +71&lt; <?=$ocr?> +87535363&lt;
    </p>
    <p>

    </p>
</div>

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
    <!-- End epay -->

<?php include_once('inc/footer.php'); ?>