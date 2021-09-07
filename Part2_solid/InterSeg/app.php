<?php

require 'vendor/autoload.php';

use InterSeg\Book;
use InterSeg\Music;
use InterSeg\Bike;
use InterSeg\Cart;

$products = [
    new Book('Moby Dick', 30),
    new Music('AC/DC', 17.5),
    new Bike('Brompton', 1430),
];

$cart = new Cart;

foreach ($products as $product) {
    $cart->buy($product, 5);
}

echo  $cart->total()  . "€\n";
