<?php

abstract class Shipping
{
    abstract protected function getCost(Order $order):float;
}