<?php

namespace Cart;
use Cart\Productable;

class Product implements Productable
{
    public function __construct(
        private string $name, 
        private float $price
    ) {}

    /**
     * @return float
     */
    public function getPrice():float
    {
        return $this->price;
    }

    /**
     * @param float $price
     * @return void
     */
    public function setPrice(float $price):void
    {
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function getName():string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return self
     */
    public function setName(string $name):self
    {
        $this->name = $name;
        return $this;
    }
}