<?php

namespace InterSeg;
use InterSeg\Productable;

class Book implements Productable
{
    private string $name;
    private float $price;

    public function __construct($name, $price)
    {
        $this->setName($name);
        $this->setPrice($price);
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function setPrice(float $price)
    {
        $this->price = $price;
        return $this;
    }

    public function getName(){
        return $this->name;
    }

    public function setName(string $name)
    {
        $this->name = $name;
        return $this;
    }
}