<?php
include "api_key.php";


$url    = "https://www.abibliadigital.com.br/api/verses/nvi/random";
$header = ["Authorization: Bearer $api_key"];
$curl   = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL             => $url,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_HTTPHEADER      => $header
]);


$response = curl_exec($curl);
curl_close($curl);

echo "<pre>";
print_r(json_decode($response));
echo "</pre>";


echo json_decode($response)->text;
echo json_decode($response)->book->neme . "<br>";

?>