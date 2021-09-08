<?php
namespace Cart;
use Cart\Storable;

class StorageSession implements Storable
{
    public function __construct()
    {
        if (!isset($_SESSION)){
            session_start();
            $_SESSION['storage']=[];
        }
    }
    public function setValue(string $name, float $price):void
    {
        if (!array_key_exists($name, $_SESSION['storage'])){
            $_SESSION['storage'][$name] = $price;
        }else{
            $_SESSION['storage'][$name] += $price;
        }
    }
    public function reset():void
    {
        unset($_SESSION['storage']);
    }
    public function total():float
    {
        return array_sum($_SESSION['storage']);
    }
    public function restore(string $name):void
    {
        if (array_key_exists($name, $_SESSION['storage'])) unset($_SESSION['storage'][$name]);
    }
}