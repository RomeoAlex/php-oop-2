<?php

class User {

    public $name;

    public $lastname;

    public $email;
    // cart sarà un array per poterlo poi ciclare e per facilitarne l'utilizzo
    // private per evitare modifiche esterne al foglio protected nel caso avessimo classi figlie future
    protected $cart = [];

    public function __construct($_name, $_lastname, $_email ){

        $this->name = $_name;

        $this->$lastname = $_lastname;
           
        $this->email = $_email;

    }

    // funzione aggiunta al carrello

    public function addTocart($product){
        $this->carrello[] = $product;
    }

    // funzione per stampa a video di nome e cognome
    public function getFullname() {
        return $this->name . ' ' . $this->lastname;
    }
}