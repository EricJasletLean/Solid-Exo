<?php
namespace Cart;
use Cart\Storable;

class StorageSession implements Storable
{
    public function setValue(string $name, float $price):void{

    }
    public function reset():void{

    }
    public function total():float{
        return 0.01;
    }
    public function restore(string $name):void{

    }
}