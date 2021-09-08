<?php

namespace Cart;

Interface Storable
{
    public function setValue(string $name, float $price):void;
    public function reset():void;
    public function total():float;
    public function restore(string $name):void;
}