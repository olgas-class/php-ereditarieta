<?php
require_once __DIR__ . "/User.php";

/**
 * ## class Premium User
 * describes Premium User
 * @author Olga Demina
 */
class PremiumUser extends User {
    public $membership;

    /**
     * @param mixed $name
     * @param mixed $lastname
     * @param Membership $membership
     */
    function __construct($name, $lastname, Membership $membership) {
        parent::__construct($name, $lastname);
        $this->membership = $membership;
    }

    /**
     * @return [type]
     */
    public function setDiscount() {
        if ($this->getAge() <= 18 || $this->getAge() >= 60) {
            $this->discount = 40;
        } else {
            $this->discount = 20;
        }
    }
}
