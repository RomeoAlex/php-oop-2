<?php 
require_once __DIR__ . '/Veicolo.php';

class Moto extends Veicolo{
    // override perchè il numero delle ruote lo sovrascriviamo quando prendiamo questo veicolo
    public $ruote = 2;
}
?>