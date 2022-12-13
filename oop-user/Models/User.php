<?php

require_once __DIR__ . "/EmailNotification.php";
require_once __DIR__ . "/../Traits/Notifiable.php";

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

    use Notifiable;

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

        $this->setNotification(new EmailNotification());
        $this->send($this->name, "Il tuo sconto è $this->discount");
    }

    public function getDiscount() {
        return $this->discount;
    }
}
