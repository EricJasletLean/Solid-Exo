<?php

/*
class Tools
{
    private $format = 'd/m/y';
    private $max = 10;

    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }

    public function date($date)
    {
        return new Date($date)->format($this->format);
    }

    public function token(){

        return random_bytes($this->max);
    }
}
*/

class redirect
{
    public function redirect($url)
    {
        header('Location: ' . $url);
        exit;
    }
}

class Token
{
    public function crateToken($max)
    {
        return random_bytes($max);
    }
}

class TheDate
{
    public function createDate(string $date, string $format)
    {
        return (new DateTime($date))->format($format);
    }
}

class Tools
{
    private $format = 'd/m/y';
    private $max = 10;

    public function redirect(Redirect $redirection, $url)
    {
        $redirection->redirect($url);
    }

    public function date(TheDate $theDate, $date)
    {
        return $theDate->createDate($date, $this->format);
    }

    public function token(Token $token)
    {
        return $token->crateToken($this->max);
    }
}


