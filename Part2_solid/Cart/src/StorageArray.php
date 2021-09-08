<?php

namespace Cart;
use Cart\Storable;

class StorageArray implements Storable
{
    public array $storage = [];

    public function setValue(string $name, float $price):void{
        if (!array_key_exists($name, $this->storage)){
            $this->storage[$name] = $price;
        }else{
            $this->storage[$name] += $price;
        }
    }

    public function reset():void{
        $this->storage = [];
    }

    public function total():float
    {
        $total = 0.00;
        foreach($this->storage as $price) {
            $total += $price;
        }
        return round($total, 2);
    }

    public function restore(string $name):void{
        // Delete
        if (array_key_exists($name, $this->storage)) unset($this->storage[$name]);
    }
}