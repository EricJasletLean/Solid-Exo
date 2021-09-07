<?php

class Order
{
    private Shipping $shipping;
    protected float $weight;


    public function __construct(Shipping $s, float $weight)
    {
        $this->SetShipping($s);
        $this->SetWeight($weight);
    }

    public function cost():float
    {
        return $this->getWeight() + $this->shipping->getCost($this);
    }

    /**
     * Get the value of shipping
     */ 
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * Set the value of shipping
     *
     * @return  self
     */ 
    public function setShipping(Shipping $shipping)
    {
        $this->shipping = $shipping;

        return $this;
    }

    /**
     * Get the value of weight
     */ 
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */ 
    public function setWeight(float $weight)
    {
        $this->weight = $weight;

        return $this;
    }
}