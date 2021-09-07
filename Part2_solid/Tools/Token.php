<?php

class Token
{
    public function crateToken($max)
    {
        return random_bytes($max);
    }
}
