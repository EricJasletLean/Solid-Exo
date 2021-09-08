<?php

namespace Cart;
use Cart\Storable;

class StorageArray implements Storable
{
    public array $storage = [];

    /**
     * @param string $name
     * @param float $price
     * @return void
     */
    public function setValue(string $name, float $price):void{
        if (!array_key_exists($name, $this->storage)){
            $this->storage[$name] = $price;
        }else{
            $this->storage[$name] += $price;
        }
    }

    /**
     * @return void
     */
    public function reset():void{
        $this->storage = [];
    }

    /**
     * @return float
     */
    public function total():float
    {
        $total = 0.00;
        foreach($this->storage as $price) {
            $total += $price;
        }
        return round($total, 2);
    }

    /**
     * @param string $name
     * @return void
     */
    public function restore(string $name):void{
        // Delete
        if (array_key_exists($name, $this->storage)) unset($this->storage[$name]);
    }
}