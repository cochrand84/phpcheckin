<?php

function searchapi2(){

$search = $_POST['searchvalue2'];
$curl = curl_init();


if($search == 0){
  echo "<h1>";
  echo "No POS Data, PLEASE ADD POS ID AND REPRINT";
  echo "</h1>";
}else{


curl_setopt_array($curl, array(
  CURLOPT_URL => "https://area51customs.phppointofsale.com/index.php/api/v1/sales/$search",
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

echo $xml;

echo "</p>";

echo '</br>';
echo 'Customer';
echo '</br>';

$xml = new SimpleXMLElement($response) or die("Error: Cannot create object");

$email = $xml->customer_email;
echo $email;
echo '</br>';
$phone = $xml->customer_phone_number;
echo $phone;
echo '</br>';
$first_name = $xml->customer_first_name;
echo $first_name;
echo '</br>';
$last_name = $xml->customer_last_name;
echo $last_name;
echo '</br>';
$sale_total = $xml->total;
echo $sale_total;


}
}
if (isset($_POST['submit2'])) {

searchapi2();

}

?>
<form method="post" enctype="multipart/form-data">
    <div class="row">     
        <div class="col-25">
            <label for="searchvalue2">Search for POs id:</label>
        </div>
        <div class="col-25">
            <input type="text" name="searchvalue2" id="searchvalue2">
        </div>
    </div> 
    <div class="row">
    </div>

    <input type="submit" name="submit2" value="Search">


</form>
