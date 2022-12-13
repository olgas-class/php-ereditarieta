<?php
require_once __DIR__ . "/Models/User.php";
require_once __DIR__ . "/Models/Membership.php";
require_once __DIR__ . "/Models/PremiumUser.php";

$user1 = new User("Mario", "Rossi");
$user1->setAge(18);
$user1->setDiscount();

var_dump($user1);


// $membership = new Membership("Platinum", 100, date("d/m/y"));
// var_dump($membership);

$premiumUser = new PremiumUser("Giuseppe", "Bianchi", new Membership("Platinum", 100, date("d/m/y")));
$premiumUser->setAge(50);
$premiumUser->setDiscount();

$premiumUser->setPosition("12.345", "45.123");
var_dump($premiumUser);
