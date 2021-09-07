<?php

class Light
{
    private bool $status = false;

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function changeStatus()
    {
        $this->status = !$this->status;
        return $this;
    }
}