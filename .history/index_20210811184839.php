<?php 

//1 budas

//Klase - sablonas
class Klientas {

    public $vardas;
    public $pavarde;

    function __construct($a, $b)
    {
        $this->vardas = $a;
        $this->pavarde = $b;        
    }
}

//Objektai

$klientas1 = new Klientas("vardas1", "pavarde1");
$klientas2 = new Klientas("vardas2", "pavarde2");
//...

$klientai = array();

for($i=0; $i<200; $i++) {
    array_push($klientai, new Klientas("vardas".$i, "Pavarde".$i ));
}

//2 budas


class Klientai

?>