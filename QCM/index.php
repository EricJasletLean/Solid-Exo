<?php

abstract class Model{
    
    public function __construct(){
        $this->name = "Model";
    }
}

$a = new Model();