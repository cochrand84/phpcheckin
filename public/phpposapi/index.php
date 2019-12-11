<?php
$curl = curl_init();

curl_setopt_array($curl, array(
	'Authorization: ' . sc0w8gsg44w00s0wwkw0kws88sgc8oow8w0occsg
  CURLOPT_URL => "https://http://area51customs.phppointofsale.com/index.php/api/v1/sales/1234",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);
echo $response;

?>