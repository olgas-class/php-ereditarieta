<?php

/**
 * ## class User
 * Defines User class
 * @author Olga Demina
 */
class User {
    public $name;
    public $lastname;
    private $age;
    protected $discount;

    /**
     * @param string $name
     * @param string $lastname
     */
    function __construct($name, $lastname) {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    /**
     * @param int $age
     * 
     */
    public function setAge($age) {
        $this->age = $age;
    }

    public function getAge() {
        return $this->age;
    }

    public function setDiscount() {
        if ($this->age >= 60) {
            $this->discount = 20;
        } else {
            $this->discount = 0;
        }
    }

    public function getDiscount() {
        return $this->discount;
    }
}
