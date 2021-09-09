<?php

namespace Q01;
use Q01\Storable;
use Q01\User;

class Storage implements Storable
{
    public function registery(User $user)
    {
        echo "J'enregistre en base{$user->getName()} qui a {$user->getAge()} ans.\n";
    }
}