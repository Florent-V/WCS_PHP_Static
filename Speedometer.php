<?php 

class Speedometer
{

    public const SPEED_CONVERSION = 1.60934;


    static public function convertMilesToKm(float $miles): float
    {
        return round($miles * self::SPEED_CONVERSION, 2);
    }

    static public function convertKmToMiles(float $km): float
    {
        return round($km / self::SPEED_CONVERSION, 2);
    }

}

