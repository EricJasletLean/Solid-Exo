<?php

class ShippingBike extends Shipping
{
    private float $cost = 1.3;
    public function getCost(Order $order):float
    {
        return $this->cost * $order->getWeight();
    }
}