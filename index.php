<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://platform.antares.id:8443/~/antares-cse/antares-id/Inflects/Poppeye',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'X-M2M-Origin: fdb767ef250eca5e:16c2529590417d44',
    'Content-Type: application/json;ty=4',
    'Accept: application/json'
  ),
));

/*
const char *devAddr = "3fd1dc99";
const char *nwkSKey = "fdb767ef250eca5e0000000000000000";
const char *appSKey = "000000000000000016c2529590417d44";
*/

$response = curl_exec($curl);

curl_close($curl);
echo json_encode(json_decode($response)->{'m2m:cin'}->{'con'});

?>