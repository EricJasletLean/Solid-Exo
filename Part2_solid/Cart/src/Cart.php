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
    
    /**
     * @param Productable $p
     * @param integer $q
     * @return self
     */
    public function buy(Productable $p, int $q):self
    {
        $this->storage->setValue($p->getName(), round( ($p->getPrice() * $q), 2) );
        return $this;
    }

    /**
     * @param Productable $p
     * @return void
     */
    public function restore(Productable $p):void
    {
        $this->storage->restore($p->getName());
    }

    /**
     * @return float
     */
    public function total():float
    {
        return $this->storage->total();
    }
}