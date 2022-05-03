<?php

include_once __DIR__ . '/classes/RegisteredUser.php';
include_once __DIR__ . '/classes/GuestUser.php';

$user1 = new RegistereUser();
$user2 = new GuestUser();
var_dump($user1);
// var_dump($user2);

$creditCard = new creditCard('Pinco', '161658461', 11, 2026);
$productsList = [
    // new Food('patatine'),
    // new Toy('corda'),
];

// $order1 = $user1->placeOrder('asdfadf', $productsList);
try {
    $order1 = $user1->placeOrder($creditCard, $productsList);
} catch (Exception $error) {
   // var_dump($error);
    echo $error->getCode();
}
//var_dump($order1);
