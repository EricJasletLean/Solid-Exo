<?php

require 'vendor/autoload.php';

use Parking\Car;
use Parking\Plane;
use Parking\Parking;
use Parking\Byke;
use Parking\Ferry;

Car::setSpeed(180);
Plane::setSpeed(890.5);

$brompton = new Byke('brompton');
$kia = new Car('kia');
$airbus = new Plane('airbus 320');

$parking = new Parking();
$parking->setName('Place de la liberté');

$parking->addPark($brompton);
$brompton->park($parking->getName(), '25D');
$brompton->pay(5.00);

$parking->addPark($kia);
$kia->park($parking->getName(), '56A');
$kia->pay(18.00);

echo $parking->getAll();

$parking->removePark($kia);

echo $parking->getAll();

try {
    $parking->addPark($airbus); // exception

} catch (TypeError $e) {
    print_r("{$e->getMessage()}\n");
}

echo $parking . "\n";

$ferry= new Ferry($parking);

$telsa =new Car('tesla');
$parking->addPark($telsa);
$telsa->park($parking->getName(), '08B');
$telsa->pay(5.00);

echo $parking . "\n";
echo $parking->getAll();

echo $ferry->getParking()->getAll();