<?php

require_once __DIR__ . '/ProdottoContabile.php';

class Veicolo  {
    use ProdottoContabile;

    public $marca;

    public $modello;
    # verra sovrascitto nei figli se hanno più ruote
    public $ruote = 4;

    public $prezzo;

    public function __construct($_marca, $_modello, $_prezzo){

        $this->marca = $_marca;

        $this->modello = $_modello;
           
        // $this->ruote = $_ruote;

        $this->prezzo = $_prezzo;

    }
    
} 

?>