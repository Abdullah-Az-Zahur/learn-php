<?php
require "vendor/autoload.php";
use MdGias\Composer\MyApp;

// use GuzzleHttp\Client;

// $client = new Client(
//     [
//         'verify' => false
//     ]
// );
// $response = $client->request("GET", "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd");
// $body = $response->getBody();
// $data = json_decode($body);

// echo "Bitcoin price (USD): " . $data->bitcoin->usd;

$app = new MyApp();
$app -> run ();

?>