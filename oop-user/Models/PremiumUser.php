<?php
require_once __DIR__ . "/User.php";
require_once __DIR__ . "/../Traits/Position.php";

/**
 * ## class Premium User
 * describes Premium User
 * @author Olga Demina
 */
class PremiumUser extends User {
    public $membership;

    use Position;

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

    public function setPosition($lat, $long) {
        $this->lat = $lat;
        $this->long = $long;
    }
}
