<?php

include_once __DIR__ . '/cclasses/RegisteredUser.php';
include_once __DIR__ . '/classes/GuestUser.php';

$user1 = new RegisteredUser();
$user2 = new GuestUser();

$user1->placeOrder($creditCard, $productList);