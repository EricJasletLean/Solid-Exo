<?php

namespace DependInject;
use DependInject\Interest;

class Container
{
    private \SplObjectStorage $storage;

    public function __construct(\SplObjectStorage $storage)
    {
        $this->storage = $storage;
    }

    public function setStorage(Interest $interest, string $name)
    {
        if ( !$this->storage->contains($interest) ) {
            $this->storage->attach($interest, $name);
        }
        return $this;
    }

    public function getStorage(string $name)
    {
        $str = "Interests :\n";
        foreach($this->storage as $key=>$interest) {
            $str .= "$key => {$interest->getName()}\n";
        }
        echo $str;
    }
}