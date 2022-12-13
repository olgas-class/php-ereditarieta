<?php
require_once __DIR__ . "/Veicolo.php";

class Autocarro extends Veicolo {
    public $portata_max_kg;

    public function __construct($marca, $modello, $colore, $portata_max_kg) {
        parent::__construct($marca, $modello, $colore);
        if (is_int($portata_max_kg)) {
            $this->portata_max_kg = $portata_max_kg;
        } else {
            throw new Exception("La portata massima deve essere un numero intero");
        }
        echo "Ciao";
    }

    public function accendi() {
        echo "brrrruuum";
    }
}
