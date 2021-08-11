<?php 



//Klase - sablonas
class Klientai {

    public $vardas;
    public $pavarde;

    function __construct($a, $b)
    {
        $this->vardas = $a;
        $this->pavarde = $b;        
    }
}

//Objektai

$klientas1 = new Klientai("vardas1", "pavarde1")


?>