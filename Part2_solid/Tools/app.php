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

class Tools
{
    private $format = 'd/m/y';
    private $max = 10;

    public function redirect(Redirect $redirection, $url)
    {
        $redirection->redirect($url);
    }

    public function date($date)
    {
        return (new DateTime($date))->format($this->format);
    }

    public function token()
    {
        return random_bytes($this->max);
    }
}