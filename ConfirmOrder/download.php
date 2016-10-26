<?php
/*
if ($_SERVER["HTTP_REFERER"]!=="http://www.greenclicmedia.dk") {
//    print $_SERVER["HTTP_REFERER"];
    echo $_SERVER["REMOTE_ADDR"];
    echo "n/a";
}
else{
 */
    $hashCode = "";

    if (isset($_GET['hashCode'])) {
        $invoice_id = $_GET['id'];
        $url = "http://gcmcrm.azurewebsites.net/api/Publics('" . $_GET['hashCode'] . "')";
        header("Content-disposition: attachment; filename=faktura-" . $invoice_id . ".pdf");
        header("Content-type: application/pdf");
        readfile($url);
    }
/*
}
*/
?>