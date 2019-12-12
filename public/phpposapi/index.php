<?php
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://area51customs.phppointofsale.com/index.php/api/v1/sales/1234",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "x-api-key: s088wogkssw84cwwkgggk4w040coowggg4c08c44",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);



$decode = json_decode($response, true);
extract($decode);

print_r($name);
function var_dump_pre($mixed = null) {
  echo '<pre>';
  var_dump($mixed);
  echo '</pre>';
  return null;
}

var_dump_pre($decode);

?>