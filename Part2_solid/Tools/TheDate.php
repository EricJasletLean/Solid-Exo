<?php

class TheDate
{
    private string $format = 'd/m/y';

    public function createDate(string $date)
    {
        return (new DateTime($date))->format($this->format);
    }
}
