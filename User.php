<?php

class User {

    public $name;

    public $lastname;

    public $email;
    // cart sarà un array per poterlo poi ciclare e per facilitarne l'utilizzo
    // private per evitare modifiche esterne al foglio protected nel caso avessimo classi figlie future
    protected $shopCart = [];

    public function __construct($_name, $_lastname, $_email ){

        $this->name = $_name;

        $this->$lastname = $_lastname;
           
        $this->email = $_email;

    }

    // funzione aggiunta al carrello

    public function addToCart($product){
        $this->shopCart[] = $product;
    }

    // funzione per stampa a video di nome e cognome
    public function printUser() {
        return $this->name . ' ' . $this->lastname;
    }
    // cart è protetto perciò non lo posso chiamare in maniera normale e devo fare una funzione per richiamarlo e poterlo ciclare
    public function printCart(){
        return $this->shopCart;
    }
}
?>