<?php
trait Position {
    public $lat;
    public $long;

    public function getAddress() {
        return "Indirizzo in base alle coordinate";
    }
}
