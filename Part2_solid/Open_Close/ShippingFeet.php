<?php

class ShippingFeet extends Shipping
{
    private float $cost = 1.4;
    public function getCost(Order $order):float
    {
        return $this->cost * $order->getweight();
    }
}