<?php

require 'DarkSkyApiClient.php';
require 'OpenWeatherMapClient.php';

$weaterApiClient = new DarkSkyApiClient();
$forecast = $weaterApiClient->getForecast('Bacau');

$weaterClient2 = new OpenWeatherMapClient();
$newForecast = $weaterClient2->getForecast('Buhusi');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interfacesc</title>
</head>
<body>
    <h1><?php echo $forecast ?></h1>
    <h3><?php echo $newForecast ?></h3>
</body>
</html>