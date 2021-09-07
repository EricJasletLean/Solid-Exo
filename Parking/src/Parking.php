<?php

namespace Parking;

class Parking
{

    /**
     * @var array
     */
    private array $park;

    /**
     * 
     * @var string
     */
    private string $name;
    
    /**
     * Undocumented function
     *
     * @param Parkable $park
     * @return self
     */
    public function addPark(Parkable $park): self
    {
        $this->park[] = $park;
        return $this;
    }

    /**
     * @param Parkable $park
     * @return self
     */
    public function removePark(Parkable $park): self
    {
        if ($pos = array_search($park, $this->park) ){
            unset($this->park[$pos]);
        }
        return $this;
    }

    /**
     * @return string
     */
    public function getAll(): string
    {
        $string = "Parking :";
        foreach($this->park as $parkable) {
            $string .= "\n place : {$parkable->getPlace()} : {$parkable->getName()} | prix : {$parkable->getPrice()}€"; // "\n {$parkable->getPlace()} : {$parkable->getName()}";
            // echo $parkable->getPlace();
        }
        $string .= "\n";
        return $string;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName() . "nombre de vehicule : " . count($this->park);
    }

    /**
     * Get the value of name
     */ 
    public function getName()
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
}