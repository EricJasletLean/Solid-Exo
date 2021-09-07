<?php

class ManageNews
{
    /**
     * @var string
     */
    private string $title;

    public function __construct(Log $log, string $title)
    {
        $this->title = $title;
        $log::addLog((new \DateTime('now'))->format('d/m/y h:m:s'));
    }

    public function getTitle()
    {
        return $this->title;
    }
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }
}