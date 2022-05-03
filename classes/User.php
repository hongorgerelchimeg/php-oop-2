<?php
include_once __DIR__ . '/Order.php';
include_once __DIR__ . '/CreditCard.php';
include_once __DIR__ . '/../traits/Position.php';

abstract class User
{
    use Position;
    
    protected $name;
    protected $address;
    protected $email;
    protected $creditCards = [];
    protected $discount = 0;

    public function placeOrder($creditCard, $productList) {

        $order = new Order($this, $creditCard, $productList);

        //$db->saveOrder($order)

        return $order;
    }

    public function addCard() {
        
    }
}