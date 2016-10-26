<?php 
$mysqli = new mysqli("gcm-crm-db.cczbvyxwb3tl.eu-west-1.rds.amazonaws.com", "gcm_jan", "asskick1309", "gcmnu");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}
?>

<?php
$query= "SELECT contracts.Id, contracts.clientid, contracts.adwordsid FROM contracts WHERE contracts.adwordsid != ''";
	
		if ($result = $mysqli->query($query)) {
				if ($row = $result->fetch_assoc()) {

            $contract_id        = $row[0];
            $client_alias_id		= $row[1];
            $adwords_id         = $row[2];

            $output_string      = $contract_id . " " . $client_alias_id . " " . $adwords_id . "";
				} else{
						
					return false;
				}
			
			$result->free();
		} else {
    	/* Der er opstået en fejl */
    	echo 'Der opstod en fejl i erklæringen: ' . $mysqli->error;
	}
?>