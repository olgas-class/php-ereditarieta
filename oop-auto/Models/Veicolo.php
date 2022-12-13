<?php
class Veicolo {
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
