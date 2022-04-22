<?php

class Calendar
{
    public string $name;
    public const MONTHS_IN_YEAR = 12;
    public static int $daysInFebruary = 28;

    public function getMothsInYear(){
        return self::MONTHS_IN_YEAR;
    }

    public static $count = 0;

    public function __construct()
    {
        self::$count++;
    }
   
}

$calendar = new Calendar();
$calendar->name = 'January';
echo $calendar->name .'<br>';
echo Calendar::MONTHS_IN_YEAR;
echo '<br>';
echo $calendar->getMothsInYear();
echo '<br>';

echo Calendar::$daysInFebruary;
Calendar::$daysInFebruary++;
Calendar::$daysInFebruary++;
echo '<br>';
echo Calendar::$daysInFebruary;
echo '<br>';

$calendar2 = new Calendar();
$calendar3 = new Calendar();

echo Calendar::$count;
echo '<br>';




