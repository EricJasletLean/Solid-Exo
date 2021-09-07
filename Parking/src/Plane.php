<?php
namespace Parking;

use Parking\Vehicule;

class Plane extends Vehicule
{
    /**
     * @param float $speed
     * @return void
     */
    public static function setSpeed(float $speed):void
    {
        self::$speed = $speed;
    }
}