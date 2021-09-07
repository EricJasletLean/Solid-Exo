<?php

class ShippingBike extends Shipping
{
    private float $cost = 50.00;
    public function getCost(Order $order):float
    {
        return $this->cost;
    }
}