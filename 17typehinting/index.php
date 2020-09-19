<?php

// es la 


class Tienda {
    /**
     * 
     */

    protected Logger $logeer;
    /**
     * 
     */
    
    public function __construct(Logger $logeer) 
    {
        $this -> logger->$logeer;          
    }
    public function order(){
        $this ->logger->create(
            "Nuevo pedido desde". __CLASS__ . "a las ". date("H:i:s")
        );
    }



}
class Logger{

    public function create(string $message){
        $file = fopen("order.txt", "w") or die("No puedo abrir el archivo");
        fwrite($file, $message);
        fclose($file);
    }

}

$logger= new Logger;
$tienda = new tienda($logeer);
$tienda->order();









