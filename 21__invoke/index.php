<?php

// metodo invoke; permite invocar una clase como si fuera un metodo, instancia.

class Blog{

    public function __invoke(string $name)
    {
        echo"El nombre del blog en la clase ". __CLASS__ . "es {$name}";
    }
}

$blog = new Blog();
$blog("mi blog");
echo "<br/>";
var_dump(is_callable($blog));





