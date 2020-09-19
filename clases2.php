<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');


class Database {
    public $name = "pruebas";


    public function __construct() {

    }  

    public function select(): string {
        return " SELECT * FROM usuarios";
        
    }
    
}

class Usuario{
    /**
     * 
     * 
     */
    protected $database;
    /**
     * 
     * 
     */

    public function __construct(Database $database){
        $this->database=$database;
        
    }
//metodos magicos 
    
    public function selectUsuario(): string {
        return $this->database->select();
    }
    public function __toString()
    {
        // serialize convierte la distancia en una cadena de datos string
        return serialize($this->database);
    }
    



}


    $db = new Database;
    $usuario = new Usuario($db);
    echo"<pre>";
    echo $usuario;
    echo"</pre>";
    echo"<pre>";
    echo $usuario-> selectUsuario();
