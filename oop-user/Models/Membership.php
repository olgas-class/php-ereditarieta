<?php

class Membership {
    private $name;
    private $price;
    private $date;

    function __construct($name, $price, $date) {
        $this->name = $name;
        $this->price = $price;
        $this->date = $date;
    }
}
