<?php
include "api_key.php";

@$capitulo   = $_GET['capitulo'];
@$abbrevBook = $_GET['livro'];
@$nameBook   = $_GET['name'];

$url    = "https://www.abibliadigital.com.br/api/verses/nvi/".$abbrevBook."/".$capitulo;
$header = ["Authorization: Bearer $api_key"];
$curl   = curl_init();

curl_setopt_array($curl, [
    CURLOPT_URL             => $url,
    CURLOPT_RETURNTRANSFER  => true,
    CURLOPT_HTTPHEADER      => $header
]);

$response = curl_exec($curl);
curl_close($curl);

$response = json_decode($response);
?>