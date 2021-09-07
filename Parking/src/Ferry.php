<?php

namespace Parking;

class Ferry
{
    /**
     * @var Parking
     */
    private Parking $parking;
    
    public function __construct(Parking $parking)
    {
        $this->parking = $parking;
    }
    /**
     * Get the value of parking
     */ 
    public function getParking()
    {
        return $this->parking;
    }

    /**
     * Set the value of parking
     *
     * @return  self
     */ 
    public function setParking($parking)
    {
        $this->parking = $parking;

        return $this;
    }
}