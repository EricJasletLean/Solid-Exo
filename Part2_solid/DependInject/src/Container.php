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
        // foreach($this->storage as $key=>$interest) {
        //     if ($interest->getName() === $name) {
        //         return $interest;
        //     }
        // }

        $this->storage->rewind(); // remise à 0
        while($this->storage->valid()) { // tant que valid
            $index  = $this->storage->key();
            $object = $this->storage->current(); // similaire à current($this->storage)
            $data   = $this->storage->getInfo();

            // var_dump($object);
            var_dump($data);
            if ($data === $name) {
                // ... existe
                return $this->storage->current();
            }
            $this->storage->next();
        }
    }
}