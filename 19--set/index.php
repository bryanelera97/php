<?php

// GET permite obtener ; SET permite establecer

class Coche {

    protected $piezas = [];

    public function __set(string $name,string $value)
    {
       $this -> piezas[$name] = $value;
    }

}
$coche = new Coche();
$coche->ruedas= 5;
var_dump($coche);














