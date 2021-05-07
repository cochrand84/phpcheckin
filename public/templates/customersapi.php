<?php



function searchapi(){

$search = $_POST['serachvalue'];
$curl = curl_init();
curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://area51customs.phppointofsale.com/index.php/api/v1/customers?search='$search'&search_field=last_name',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_HEADER => false,
  CURLOPT_TIMEOUT => 60,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
  	"accept: application/json",
    "cache-control: no-cache",
    "x-api-key: s088wogkssw84cwwkgggk4w040coowggg4c08c44",
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

echo $response;

}

if (isset($_POST['submit'])) {

searchapi();

}
?>
<form method="post" enctype="multipart/form-data">
<div class="row">     
        <div class="col-25">
            <label for="searchvalue">Search:</label>
        </div>
        <div class="col-25">
            <input type="text" name="searchvalue" id="searchvalue">
        </div>
    </div> 
    <div class="row">
    </div>

    <input type="submit" name="submit" value="Search">

</form>
