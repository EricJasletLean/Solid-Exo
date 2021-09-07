<?php

namespace Parking;

abstract class Vehicule

{
    /**
     * @var string
     */
    private string $name;
    
    /**
     * @var float
     */
    protected static float $speed;

    function __construct(string $name)
    {
        $this->setName($name);
    }

    abstract public static function setSpeed(float $speed):void;

    /**
     * Get the value of name
     *
     * @return  string
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @param  string  $name
     *
     * @return  self
     */ 
    public function setName(string $name)
    {
        $this->name = $name;

        return $this;
    }
}