<?php

/*
    Non, la class user ne devrait pas avoir la responsabilité de la persistance en base de données.
    Elle ne respect pas le "Single Responsability".
    Créer une Interface puis une class qui sera en charge de la persistance des données.
*/
require_once __DIR__ . '/vendor/autoload.php';

use Q01\Storage;
use Q01\User;

$user = new User('Eric', 43);
$storage = new Storage();

$user->store($storage);

