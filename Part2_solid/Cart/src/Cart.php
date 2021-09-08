<?php

namespace Cart;
use Cart\Storable;

class Cart
{
    public function __construct(
        private Storable $storage,
        private float $tva = 1.2,
    )
    {}
    
    public function buy(Productable $p, int $q)
    {
        $this->storage->setValue($p->getName(), round( ($p->getPrice() * $q), 2) );
    }
    public function restore(Productable $p):void
    {
        $this->storage->restore($p->getName());
    }

    public function total()
    {
        return $this->storage->total();
    }
}