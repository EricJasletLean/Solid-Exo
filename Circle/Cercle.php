<?php
class Circle
{
    private Color $color;

    public function perimeter():float
    {
        return 100;
    }

    /**
     * Get the value of color
     * @return Color
     */ 
    public function getColor(): Color
    {
        return $this->color;
    }

    /**
     * Set the value of color
     * @return  self
     */ 
    public function setColor(Color $color)
    {
        $this->color = $color;

        return $this;
    }
}