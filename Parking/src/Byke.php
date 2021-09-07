<?php
namespace Parking;

use Parking\Vehicule;

class Byke extends Vehicule implements Parkable
{
    /**
     * @var string
     */
    private string $place;

    /**
     * 
     * @var string
     */
    private string $address;

    /**
     * @var float
     */
    private float $price;

    /**
     * @param float $speed
     * @return void
     */
    public static function setSpeed(float $speed):void
    {
        self::$speed = $speed;
    }

    /**
     * @param float $price
     * @return self
     */
    public function pay(float $price):self
    {
        $this->price = $price;
        return $this;
    }
    
    /**
     * @param string $address
     * @param string $place
     * @return self
     */
    public function park(string $address, string $place):self
    {
        $this->address = $address;
        $this->place = $place; 
        return $this;
    }

    /**
     * @return string
     */
    public function getPlace():string{return $this->place;}

    /**
     * @return string
     */
    public function getAddress():string{return $this->address;}
    
    /**
     * @return float
     */
    public function getPrice():float{return $this->price;}
}