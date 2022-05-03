<?php

class CreditCard
{
    private $name, $number, $exp_month, $exp_year;

    public function _constract($_name, $_number, $_exp_month, $_exp_year) {
        $this->name = $_name;
        $this->number = $_number;
        $this->exp_month = $_exp_month;
        $this->exp_year = $_exp_year;
    }
    public function verify() {

    }
}