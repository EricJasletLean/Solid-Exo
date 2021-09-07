<?php

namespace Parking;

interface Parkable {
    /**
     * @param float $price
     * @return self
     */
    public function pay(float $price):self;
    /**
     * Undocumented function
     *
     * @param string $address
     * @param string $place
     * @return self
     */
    public function park(string $address, string $place):self;
}