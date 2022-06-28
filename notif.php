<?php
$app_id = "63c06cdb-08b6-4806-b15d-f97fc454d699";
$app_secret = "OGU3ZmRlNzUtZTBiZi00M2I3LThjNDYtOTc5YjMxZGJlNTU5";
$titulo = "Envían ante juez a falsos policías";
$mensaje = "Se hicieron pasar como elementos de la PAR para amedrentar a un tercero";
$url = "https://superchannel12.com/597693/envian-ante-juez-a-falsos-policias";
$img_url = "https://superchannel12.com/images/publicaciones/597693/image_28-06-22_05-39-30.webp";
$icon_url = "https://esemanal.mx/revista/wp-content/uploads/2020/09/pagina-web.png";
$topic = "Destacados";
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://onesignal.com/api/v1/notifications', [
  'body' => '{"app_id":"'.$app_id.'",
    "included_segments":["Subscribed Users"],
    "headings":{"es":"'.$titulo.'","en":"'.$titulo.'"},
    "contents":{"es":"'.$mensaje.'","en":"'.$mensaje.'"},
     "web_url":"'.$url.'",
     "chrome_web_image":"'.$img_url.'",
     "chrome_big_picture":"'.$img_url.'",
     "chrome_web_icon":"'.$icon_url.'",
     "web_push_topic":"'.$topic.'",
    "name":"INTERNAL_CAMPAIGN_NAME"}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic '.$app_secret,
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();