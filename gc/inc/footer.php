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
  </body>
</html>
