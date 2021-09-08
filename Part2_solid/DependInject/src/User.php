<?php

namespace DependInject;

use SplObjectStorage;

class User
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var SplObjectStorage
     */
    private SplObjectStorage $storage;
    
    public function __construct($storage)
    {
        $this->setStorage($storage);
    }

    /**
     * @return void
     */
    public function getInterests()
    {
        $str = "Interests :\n";
        foreach($this->storage as $key=>$interest) {
            $str .= "$key => {$interest->getName()}\n";
        }
        echo $str;
    }

    /**
     * @param Interest $interests
     * @return self
     */
    public function setInterest(Interest $interest): self
    {
        if ( !$this->storage->contains($interest) ) {
            $this->storage->attach($interest);
        }
        return $this;
    }

    /**
     * Get the value of name
     * @return string
     */ 
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of storage
     * @return SplObjectStorage
     */ 
    public function getStorage(): SplObjectStorage
    {
        return $this->storage;
    }

    /**
     * Set the value of storage
     *
     * @return  self
     */ 
    public function setStorage($storage)
    {
        $this->storage = $storage;

        return $this;
    }
}