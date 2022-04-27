<?php
require_once 'WeatherApiClientInterfaceApi.php';

class OpenWeatherMapClient implements WeatherApiClientInterfaceApi
{

    public function getForecast(string $city){
        return 'Is raining in ' .$city;
    }
}