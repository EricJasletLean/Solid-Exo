<?php
// Agrégation
spl_autoload_register(function ($class) {
    include __DIR__ . '/' . $class . '.php';
});

$circle = new Circle();

$red = new Color('red');

$circle->setColor($red);

$circle->getColor()->getName();






