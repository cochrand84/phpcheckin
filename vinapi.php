<?php

$vin = isset($_POST['b12']) ? $_POST['b12'] : '';

if ($vin) {
    $postdata = http_build_query([
            'format' => 'json',
            'data' => $vin
        ]
    );
    $opts = [
        'http' => [
            'method' => 'POST',
            'header' => "Content-Type: application/x-www-form-urlencoded\r\n".
                        "Content-Length: ".strlen($postdata)."\r\n",
            'content' => $postdata
        ]
    ];

    $apiURL = "https://vpic.nhtsa.dot.gov/api/vehicles/DecodeVINValuesBatch/";
    $context = stream_context_create($opts);
    $fp = fopen($apiURL, 'rb', false, $context);

    $line_of_text = fgets($fp);
    $json = json_decode($line_of_text, true);

    fclose($fp);

    $html = '';
    foreach ($json['Results'][0] as $k => $v) {
        $html .= '[' . $k . '] - ' . $v . '<br />';
    }

    echo $html;
} else {
    echo 'No Vin Inputted';
}