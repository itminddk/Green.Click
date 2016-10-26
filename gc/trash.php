<?php
$hashCode = $_GET['id'];
$host = 'http://svn.crmtest.dk:8483/api/';
//$url = $host + 'Publics(\''. $hashCode .'\')/action.InvoiceData';
	$data = array("Hashcode" => $hashCode);

	$data_string = json_encode($data);

	$ch = curl_init('http://svn.crmtest.dk:8483/api/Orders/action.Confirm');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($data_string))
	);

	
	
		//$msg = "Url: " . $url . "\r\n Data String: " . $data_string . "\r\n Order ID: ". $var_orderid ."\r\n IP: " .  $_SERVER['REMOTE_ADDR'];
		//send_stat_mail("json call", $msg); 
	
	

	if( ! $result = curl_exec($ch)) 
	{
		// IF ERROR
		echo "<pre>";
		print_r(curl_getinfo($ch));
		echo "</pre>";
	}
	else{
		
		// IF FINE
		$invoiceId = $result;
		if ($invoiceId === "")
		{
			// INVOICE NOT FOUND
		}
	}
	curl_close($ch);
?>