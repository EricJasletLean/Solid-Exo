<?php

namespace DependInject;

class Interest
{
    /**
     * @var string
     */
    public string $name;
    
    public function __construct(string $name)
    {
        $this->name = $name;
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
     * @return  self
     */ 
    public function setName($name): self
    {
        $this->name = $name;

        return $this;
    }
}