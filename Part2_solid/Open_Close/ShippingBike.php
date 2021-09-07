<?php

class ShippingBike extends Shipping
{
    private float $cost;
    public function getCost(Order $order):float
    {
        return $this->cost;
    }
}