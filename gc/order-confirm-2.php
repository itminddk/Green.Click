<?php
//include_once('inc/config-2.php');

	$clientIp     = $_SERVER['REMOTE_ADDR'];
	$debug       	= 1;
	$hashCode			= $_GET['id'];
	$host 				= 'http://svn.crmtest.dk:8483/api/';
	$data 				= array("Hashcode" => $hashCode, "IP" => $clientIp);

	$data_string = json_encode($data);

	$ch = curl_init('http://svn.crmtest.dk:8483/api/Orders/Confirm');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($ch, CURLOPT_VERBOSE, true);
	curl_setopt($ch, CURLOPT_HTTPHEADER, array(
					'Content-Type: application/json',
					'Content-Length: ' . strlen($data_string))
	);

	
		if( ! $result = curl_exec($ch)) 
		{
			// IF ERROR
			echo "Error: ";
			echo "<pre>";
			print_r($data);
			print_r(curl_getinfo($ch));
			echo "</pre>";
		}
		else{

			// IF FINE
			$invoiceId = $result;
			
			echo "<pre>";
			print_r($result);
			
			
				if ($invoiceId === "")
				{
					// INVOICE NOT FOUND
					echo "Invoice not found";
				}
			
			echo "</pre>";
		}
		curl_close($ch);
    
?>


<div id="debug">
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
        }//end debug 
      ?>
    </div>