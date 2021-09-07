<?php

class Lamp
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }
    public function switch()
    {
        $this->light->changeStatus();
    }

    public function __toString()
    {
        return ($this->light->getStatus())? 'ON' : 'OFF';
    }
}