<?php
$app_id = "63c06cdb-08b6-4806-b15d-f97fc454d699";
$app_secret = "OGU3ZmRlNzUtZTBiZi00M2I3LThjNDYtOTc5YjMxZGJlNTU5";
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://onesignal.com/api/v1/notifications', [
  'body' => '{"app_id":"'.$app_id.'",
    "included_segments":["Subscribed Users"],
    "contents":{"en":"English or Any Language Message","es":"Spanish Message"},
    "name":"INTERNAL_CAMPAIGN_NAME"}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic '.$app_secret,
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();