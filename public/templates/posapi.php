<?php
$curl = curl_init();


if($editphpid == 0){
  echo "<h1>";
  echo "No POS Data, PLEASE ADD POS ID AND REPRINT";
  echo "</h1>";
}else{


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
echo '</br>';
echo '</br>';
echo 'POS Ticket:';
echo '</br>';
echo '<table id="table-items">';
echo '<tr class="items-row">';
echo '<th>Quantity</th>';
echo '<th>Product ID</th>';
echo '<th>Description</th>';
echo '</tr>';


$xml= new SimpleXMLElement($response) or die("Error: Cannot create object");
foreach ($xml->cart_items->cart_item as $cart_item){
  echo '<tr class="items-row">','<td class="items-divider">',$cart_item->quantity,'</td>','<td class="items-divider">',$cart_item->product_id,'</td>','<td class="items-divider">',$cart_item->name,'</td>','</tr>';
}

echo '</table>';
}
?>
