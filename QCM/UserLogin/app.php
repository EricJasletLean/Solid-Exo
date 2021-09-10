<?php

require 'vendor/autoload.php';

use UserLogin\ArrayUserStorage;
use UserLogin\RepositoryUser;
use UserLogin\User;

$store = [
    [
        'name'  => 'Anne-sophie',
        'age'   => 40
    ],
    [
        'name'  => 'Eric',
        'age'   => 40
    ],
    [
        'name'  => 'Anne-sophie',
        'age'   => 40
    ],
];

$storage = new ArrayUserStorage();
$storage->addStorage($store);

$user = new User();

$repositoryUser = new RepositoryUser($storage, $user);

$user = $repositoryUser->findOne('Eric');

echo $user;
