<?php
include_once __DIR__ . '/../traits/Position.php';

class Order
{
    use Position;

    protected $user;
    protected $creditCard;
    protected $productsList = [];

    public function __construct($user, $creditCard, $productsList) {
        if (gettype($creditCard) != 'object') throw new exception('Non è un oggetto', 10);
        if (get_class($creditCard) != 'CreditCard') throw new exception('Non è una CreditCard', 11);

        $this->user = $user;
        $this->creditCard = $creditCard;
        $this->productsList = $productsList;
    }
}