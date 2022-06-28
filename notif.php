<?php
require_once('vendor/autoload.php');

$client = new \GuzzleHttp\Client();

$response = $client->request('POST', 'https://onesignal.com/api/v1/notifications', [
  'body' => '{"included_segments":["Subscribed Users"],"contents":{"en":"English or Any Language Message","es":"Spanish Message"},"name":"INTERNAL_CAMPAIGN_NAME"}',
  'headers' => [
    'Accept' => 'application/json',
    'Authorization' => 'Basic NzZlYWNlNmUtY2U5Ny00MmU5LTg5ZWEtZmFkOGNjNTdkZWNh',
    'Content-Type' => 'application/json',
  ],
]);

echo $response->getBody();