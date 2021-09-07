<?php

namespace InterSeg;
use InterSeg\Productable;

class Cart
{
    protected array $storage;

    public function buy(Productable $p, $quantity)
    {
        $this->storage[] = [
            'product'   => $p,
            'qt'        => $quantity,
        ];
    }
    public function total():float
    {
        $totalPrice = 0;
        foreach($this->storage as $product) {
            $totalPrice += $product['product']->getPrice() * $product['qt'];
        }
        return $totalPrice;
    }
}