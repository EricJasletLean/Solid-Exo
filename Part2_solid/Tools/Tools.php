<?php

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
