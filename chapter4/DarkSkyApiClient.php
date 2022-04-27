<?php
require_once 'WeatherApiClientInterfaceApi.php';

class DarkSkyApiClient implements WeatherApiClientInterfaceApi
{

    public function getForecast(string $city){
        return 'Is raining in ' .$city;
    }
    
}