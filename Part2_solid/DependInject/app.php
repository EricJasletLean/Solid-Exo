<?php

require 'vendor/autoload.php';

use DependInject\User;
use DependInject\Interest;
use DependInject\Container;

$storage = new SplObjectStorage;
$alan = new User( $storage );


$python = new Interest('Python');
$alan->setInterest($python);

$php = new Interest('PHP');
$alan->setInterest($php);

$javascript = new Interest('Python');
$alan->setInterest($javascript);

// var_dump($alan);

echo "\n";
$alan->getInterests();
echo "\n";





// Préparer les intérets dans un container de service

$container = new Container( new SplObjectStorage );

$sql = new Interest('SQL');
$container->setStorage($sql, 'SQL');

var_dump($container);
var_dump($container->getStorage('SQL'));

$alan->setInterest($container->getStorage('SQL'));

$bigdata = new Interest('DATA');
$container->setStorage($bigdata, 'DATA');

$alan->setInterest($container->getStorage('DATA'));

var_dump($container->getStorage('DATA')); // retourne un intéret dans le container

echo "\n";
$alan->getInterests();
echo "\n";

