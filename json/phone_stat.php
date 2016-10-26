<?php

$show = 0;

if(isset($_GET['show'])){
  $show = $_GET['show'];
}



error_reporting(0);

$url = "http://gcmcrm.azurewebsites.net/api/CallLogs/action.CallOverview(RoleId='2f9766b6-7195-43c0-8f8a-0c82a2fbca59')";
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
           //echo $obj->FullName ."<br />";
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

         // $data[] = array("label" => $UserName, "value" => $Calls .' ('.$CallsMonth.') / ' . $AnsweredCalls  . '('. $AnsweredCallsMonth .') / ' . $TotalDuration . ' ('. $TotalDurationMonth .') ');
          
         
          switch ($show) {
            case "calls":
                $data[] = array("label" => $FullName, "value" => $AnsweredCalls .' (' . $AverageDuration  . ') - Checks:  ' . $CompletedHealthChecks);
                break;
            case "healthcheks":
                 $data[] = array("label" => $FullName, "value" => $CompletedHealthChecks);
                break;
            default:
               $data[] = array("label" => $FullName, "value" => $AnsweredCalls .' / ' . $AverageDuration );
          }
         
      }//end foreach obj 
    
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

