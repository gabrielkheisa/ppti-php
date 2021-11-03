<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://platform.antares.id:8443/~/antares-cse/antares-id/1st_Scenario/L_Client_2',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-M2M-Origin: d38d199eb1ceb579:0ec05a85ef24f60b',
    'Content-Type: application/json;ty=4',
    'Accept: application/json'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo json_encode(json_decode($response)->{'m2m:cin'}->{'con'});

?>