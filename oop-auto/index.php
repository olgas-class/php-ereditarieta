<?php
require_once __DIR__ . "/Models/Veicolo.php";
require_once __DIR__ . "/Models/Autocarro.php";

$fiat = new Veicolo("Fiat", "Punto", "bianca");
var_dump($fiat);

try {
    $scania = new Autocarro("Scania", "XYZ", "griggia", 15000);
    var_dump($scania);
    $scania->accendi();
} catch (Exception $e) {
    echo "Eccezzione: " . $e->getMessage();
} finally {
}

$fiat->accendi();

// echo $scania->colore;
