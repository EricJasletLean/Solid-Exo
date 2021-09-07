<?php
// Agrégation
spl_autoload_register(function ($class) {
    include __DIR__ . '/' . $class . '.php';
});

$light = new Light;
$lamp = new Lamp($light);

echo "\n";
echo $lamp; // Off
$lamp->switch();
echo "\n";
echo $lamp; // On






