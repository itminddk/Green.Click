<?php
error_reporting(0);

$url = "http://gcmcrm.azurewebsites.net/api/CallLogs/action.CallOverview(RoleId='8db7bc71-35e8-423d-99ab-c4f50f9aaec6')";
//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result = curl_exec($ch);
// Closing
curl_close($ch);

//$json = file_get_contents("http://gcmcrm.azurewebsites.net/api/CallLogs/action.CallOverview(RoleId='2f9766b6-7195-43c0-8f8a-0c82a2fbca59')");
$obj = json_decode($result);
//echo $obj->access_token;

  $arr = "";
  $data = array();

  foreach( $obj as $value ) {
        $arr    = $value; 
       foreach ($value as $obj) {
         $AnsweredCalls               = $obj->AnsweredCalls;
         $AnsweredCallsMonth          = $obj->AnsweredCallsMonth;
         $AverageDuration             = gmdate("H:i:s", $obj->AverageDuration); //answered calls
         $AverageDurationMonth        = gmdate("H:i:s", $obj->AverageDurationMonth);
         
         $TotalDuration               = gmdate("H:i:s", $obj->TotalDuration); //calls
         $TotalDurationMonth          = gmdate("H:i:s", $obj->TotalDurationMonth); //calls
         
         $CompletedHealthChecks       = $obj->CompletedHealthChecks;
         $CompletedHealthChecksMonth  = $obj->CompletedHealthChecksMonth;
         
         $FullName                    = $obj->FullName;
         $UserName                    = strtoupper($obj->UserName);
         
         //All calls
         $Calls                       = $obj->Calls;//alt
         $CallsMonth                  = $obj->CallsMonth;
         
         if($UserName === "SCREEN"){
         }else{
          $data[] = array("label" => $FullName, "value" =>   $Calls  .' / '. $AnsweredCalls  . ' (' . $TotalDuration . ') ');
          }
      }
   }// end foreach
 


//$data['label'] = $arr[0]->FullName;
//$data['value'] = $arr[0]->Calls;

//array_multisort($data, SORT_DESC, $value);

$testData = json_encode($data);
//$testData = json_decode($testData);

//echo "<pre>";
//print_r($testData);

print '{
  "items": '. $testData .'}';

//echo "</pre>";
/*
$data = array("Hashcode" => $hashCode, "IP" => $clientIp);

"label": "Peter",
      "value": 234,
      "previous_rank": 2
*/
/*
$last = count($arr);
print "<hr />";
$keys = array_keys($arr);
for($i = 0; $i < count($arr); $i++) {
    echo $keys[$i] . "<br>";
    foreach($arr[$keys[$i]] as $key => $value) {
        echo $key . " : " . $value . "<br>";
    }
  }
    echo "<br>";
    */
?>

