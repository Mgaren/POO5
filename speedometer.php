<?php

class SpeedoMeter
{
    
    public const kilometersToMiles = 0.621371;
    public const milesToKilometers = 1.609344;
    
    public static function convertKmToMiles(float $km) : float
    {
        return ($km * self::kilometersToMiles);
    }

    public static function convertMilesToKm(float $mile) : float
    {
        return ($mile * self::milesToKilometers);
    }
}