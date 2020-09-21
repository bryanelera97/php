<?php

class Logger
{
    public function message(Shop $shop)
    {
        print_r($shop -> getMessage());

    }
}

class Shop{
    protected $logger;

    public function __construct(Logger $logger){

        $this -> logger= $logger;
    }

    public function getMessage(): string
    {
        return "Nuevo mensaje";
    }

    public function __call($name,$arguments)
    {

        if(method_exists($this->logger, $name)){
            return $this->logger->{$name}($this);
        } else {
            echo " El método {$name} no existe en la clase Logger";
        }
    }

}

$shop = new Shop(new Logger());
echo $shop->Message();

