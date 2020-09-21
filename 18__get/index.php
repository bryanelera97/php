<?php


class Producto{
    protected $nombre;
    protected $qty;


    public function getNombre(){
         return $this -> nombre;
    
    }

    public function setNombre(string $nombre){

        $this->nombre = $nombre;
    }

    public function __get($name)
    {
        if(!property_exists($this, $name)) {
            die("La propiedad{$name} no existe");
        }
        return $this->{$name};
    }    

}

$producto = new Producto;
$producto ->setNombre("PRODUCTO 1");
echo $producto -> nombre;







