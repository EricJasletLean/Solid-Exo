<?php

namespace InterSeg;

interface Productable
{
    public function getPrice();
    public function setPrice(float $price);
    public function getName();
}