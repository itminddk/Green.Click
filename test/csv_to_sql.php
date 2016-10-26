<?php
/*$file = fopen("adwords_id.csv","r");
while(! feof($file))
  {
  echo "<pre>";
    print_r(fgetcsv($file));
  echo "</pre>";
  }

fclose($file);
*/
?>
<pre>
<?php
$row = 1;
if (($handle = fopen("adwordsid_new.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
      $num        = count($data);
      $contract_id    = $data[0];
      $client_aliasId = $data[1];
      $adwords_id     = trim($data[2]);

      
      $string = "UPDATE Contracts SET AdwordsId = '$adwords_id' WHERE Id = '$contract_id' AND AdwordsId IS NULL;";
      //$string = "UPDATE Contracts SET AdwordsId = '$adwords_id' WHERE Id = '$contract_id' AND AdwordsId IS NULL;"
      //$string = "SELECT Id, ClientAlias_Id FROM Contracts WHERE Id = $contract_id;";
      if($row != 1)
        echo $string ."\r\n ";

      
      
      $row++;

    }
    fclose($handle);
}
?>
</pre>

<?php //echo "Antal rækker: " . $row;

//SELECT c.ClientAlias_Id FROM Contracts WHERE I = xx