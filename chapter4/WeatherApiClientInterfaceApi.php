<?php

interface WeatherApiClientInterfaceApi
{
    public function getForecast(string $city);
}