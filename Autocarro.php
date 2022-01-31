<?php 
require_once __DIR__ . '/Veicolo.php';


class Autocarro extends Veicolo{
    
    
    // override perchè il numero delle ruote lo sovrascriviamo quando prendiamo questo veicolo
    public $ruote = 6;
    // aggiungo propietà
    public $max_carico;
    // override per il carico massimo , vado ad aggiungere il parametro obbligatorio per max_carico
    // public function __construct($_marca, $_modello, $_prezzo, $_max_carico ){

    //     $this->marca = $_marca;

    //     $this->$modello = $_modello;
           
    //     $this->prezzo = $_prezzo;

    //     $this->max_carico = $_max_carico;
    // }
        // utilizzo di parent
        // IMPORTANTE!!!
        public function __construct($_marca, $_modello, $_prezzo, $_max_carico ){
            //richiamo le variabili direttamente dal padre veicolo , gli argomenti all'interno della funzione sono obbligatori!!!
            parent::__construct($_marca, $_modello, $_prezzo, $_max_carico);
            
            // costruisco exeption sull'eventuale carico che deve essere per forza un intero
            if (is_int($_max_carico)) {
                $this->max_carico = $_max_carico;
            } else {
                throw new Exception('$_max_carico deve essere u intero');
                
            }
            
        }
}
?>