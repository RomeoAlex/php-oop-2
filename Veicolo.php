<?php
class Veicolo  {

    public $marca;

    public $modello;
    // verra sovrascitto nei figli se hanno più ruote
    public $ruote = 4;

    public $prezzo;

    public function __construct($_marca, $_modello, $_prezzo ){

        $this->marca = $_marca;

        $this->$modello = $_modello;
           
        $this->prezzo = $_prezzo;
    }
    
} 

?>