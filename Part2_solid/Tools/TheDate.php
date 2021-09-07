<?php

class TheDate
{
    public function createDate(string $date, string $format)
    {
        return (new DateTime($date))->format($format);
    }
}
