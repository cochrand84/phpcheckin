<?php
$curl = curl_init();

//$_GET['searchvalue'];
//$editphpid = $_GET['searchvalue'];

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://area51customs.phppointofsale.com/index.php/api/v1/sales/$editphpid",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HEADER => false,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
  	"accept: application/xml",
    "cache-control: no-cache",
    "x-api-key: s088wogkssw84cwwkgggk4w040coowggg4c08c44",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

var_dump($response);

echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";
echo "</br>";

$xml= new SimpleXMLElement($response) or die("Error: Cannot create object");
foreach ($xml->cart_items->cart_item as $cart_item){
  echo $cart_item->quantity, '  ',$cart_item->name, '</br>';
}

?>