<?php

class ShippingFeet extends Shipping
{
    private float $cost = 70.00;
    public function getCost(Order $order):float
    {
        return $this->cost;
    }
}