
<?php
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

$phone_stat = json_decode($result, true);
// Will dump a beauty json :3
print "<pre>";
//var_dump(json_decode($result, true));
print "</pre>";
//http://www.greenclickmedia.dk/json/phone_stat.php
//http://stackoverflow.com/questions/16700960/how-to-use-curl-to-get-json-data-and-decode-the-data

print "<pre>";
  //print_r($phone_stat);
print "</pre>";



$json = file_get_contents("http://gcmcrm.azurewebsites.net/api/CallLogs/action.CallOverview(RoleId='2f9766b6-7195-43c0-8f8a-0c82a2fbca59')");
$obj = json_decode($json);
//echo $obj->access_token;
print "<pre>";
//print_r($obj);
print "</pre>";


?>
<hr />
<?php
$arr = "";

        foreach( $obj as $value ) {
             echo "Value is $value <br />";
              $arr = $value;  

         }

echo $arr[0]->FullName;
echo " - ";
echo $arr[0]->Calls;


print "<pre>";
print_r($arr);
print "</pre>";




?>
<hr />
<?php

 // $convertObject  = objectToArray($arr);

 // echo $convertObject [0]['FullName'];

print "<pre>";
//print_r($convertObject);
print "</pre>"; 


 function objectToArray($d) {
   if (is_object($d)) {
   // Gets the properties of the given object
   // with get_object_vars function
   $d = get_object_vars($d);
   }

   if (is_array($d)) {
   /*
   * Return array converted to object
   * Using __FUNCTION__ (Magic constant)
   * for recursive call
   */
   return array_map(__FUNCTION__, $d);
   }
   else {
   // Return array
   return $d;
   }
 }
 

 function arrayToObject($d) {
   if (is_array($d)) {
   /*
   * Return array converted to object
   * Using __FUNCTION__ (Magic constant)
   * for recursive call
   */
   return (object) array_map(__FUNCTION__, $d);
   }
   else {
   // Return object
   return $d;
   }
 }
 //https://www.if-not-true-then-false.com/2009/php-tip-convert-stdclass-object-to-multidimensional-array-and-convert-multidimensional-array-to-stdclass-object/
?>