<?php
$response = file_get_contents('"https://demo.phppointofsale.com/index.php/api/v1/sales/1234" -H "accept: application/json" -H "x-api-key: 123123123"');
echo $response;
?>