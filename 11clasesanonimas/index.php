<?php
//En PHP 7 se ha añadido soporte para clases anónimas. Las clases 
//anónimas son útiles cuando es necesario crear objetos sencillos y únicos.

class Usuario {

    protected $database;

    public function __construct($dat){
        $this -> database = $dat;
    }
    

    public function select() {
        return $this -> database->select();

    }
       
}

$usuario = new Usuario(
   new class {

    public function select ():string {
        return "CONSULTA DE SELECION DE USUARIOS";
    }
   }
);   

echo $usuario -> select();





