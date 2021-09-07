<?php

class Token
{
    private int $max = 10;

    public function crateToken()
    {
        return random_bytes($this->max);
    }
}
