<?php
class Auto {
    public $marca;
    public $modello;
    protected $colore = "white";

    public function __construct($marca, $modello, $colore) {
        $this->marca = $marca;
        $this->modello = $modello;
        $this->colore = $colore;
    }

    public function accendi() {
        echo "brum brum";
    }
}

class Autocarro extends Auto {
    public $portata_max_kg;

    public function __construct($marca, $modello, $colore, $portata_max_kg) {
        parent::__construct($marca, $modello, $colore);
        $this->portata_max_kg = $portata_max_kg;
    }

    public function accendi() {
        echo "brrrruuum";
    }
}

$fiat = new Auto("Fiat", "Punto", "bianca");
var_dump($fiat);

$scania = new Autocarro("Scania", "XYZ", "griggia", 5000);
var_dump($scania);

$fiat->accendi();
$scania->accendi();

// echo $scania->colore;
