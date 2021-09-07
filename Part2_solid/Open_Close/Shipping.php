<?php

abstract class Shipping
{
    // ouvert au extentions fermer à la modification
    abstract protected function getCost(Order $order):float;
}