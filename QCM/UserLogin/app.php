<?php

require 'vendor/autoload.php';

use UserLogin\ArrayUserStorage;
use UserLogin\RepositoryUser;
use UserLogin\User;

$store = [
    [
        'name'  => 'Luke',
        'age'   => 13
    ],
    [
        'name'  => 'Eric',
        'age'   => 43
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
