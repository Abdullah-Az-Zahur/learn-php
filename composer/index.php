<?php
require "vendor/autoload.php";

use GuzzleHttp\Client;

$client = new Client(
    [
        'verify' => false
    ]
);
$response = $client->request("GET", "https://api.coingecko.com/api/v3/simple/price?ids=bitcoin&vs_currencies=usd");
$body = $response->getBody();
$data = json_decode($body);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo "Bitcoin price (USD): " . $data->bitcoin->usd; ?></h1>
</body>
</html>