<?php


## Confirm by order hashcode

function confirm_order($order_hash_code){
    global $host;
    global $client_ip;

    $data 			= array("Hashcode" => $order_hash_code, "IP" => $client_ip);
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
    curl_close($ch);

    return $result;

}


## Get invoice url
function url_get_contents ($Url) {
    if (!function_exists('curl_init')){
        die('CURL is not installed!');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $Url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $output = curl_exec($ch);
    curl_close($ch);

    return json_decode($output);
}//end fkt url_get


function get_invoice_pdf($hash_code, $invoice_nr){
    return "dl.php?hashCode=".$hash_code."&id=". $invoice_nr ."";
}//end fkt get invoice url


function send_stat_mail($title, $msg){
    global $error_email;
    $msg = wordwrap($msg,170);

    // send email
    mail($error_email ,$title,$msg);
}


### Not using
function is_google_bot($user_agent){

    if(strstr(strtolower($_SERVER['HTTP_USER_AGENT']), "googlebot"))
        return true;
    else
        return false;
}//end fkt is_google_bot



function get_id_in_url(){
    $url = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    //var_dump(parse_url($url));

    preg_match("/[^\/]+$/", $url, $matches);
    $last_word = $matches[0]; // test

    return $last_word;
}//end fkt

?>