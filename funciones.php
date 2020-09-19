<?php
function holaMundo():string {
 return " Hola Mundo con Cursosdedesarrolloweb";

}
echo holaMundo(); 


echo "<br/>";


$holaMundo = function():string{
    return " Hola Mundo con Cursosdedesarrolloweb";
};
echo $holaMundo();


echo "<br/>";

function saluda(string $nombre) :string{
    return sprintf('Hola %s', $nombre);
}
echo saluda('cursosdesarrolloweb');

echo "<br/>";

 // $ints es un array de enteros. 
 // la fucion intdiv retorna un numero entero en una division

 // parametro de funcion de propagacion

function integer_division(...$ints): int {
    return intdiv($ints[0], $ints[1]);

}

echo integer_division( 100,4);

echo "<br/>";


function recorrer_usuarios(...$usuarios):string {
    $resultado = ' ';
    foreach($usuarios  as $usuario) {
        $resultado.= "<br/>{$usuario}";
    }
    return $resultado;

}
echo recorrer_usuarios( " usuario 1", "usuario 2", "usuario 3");

echo "<br/>";

function recorrer_usuarios_list($usuarios =[]) :string {
    $resultado = ' ';
    foreach($usuarios  as $usuario) {
        list($id, $nombre, $apellido)= $usuario;
                $resultado.= "<br/>{$id},{$nombre}, {$apellido}";

    }
    return $resultado;
}
$usuariosComplejo = [
    [1, "israel", "parra"],
    [2, "juan", "diaz"],
    [3, "luis", "garcia"],
    [4, "pepe", "carrazco"],
    [5, "tito", "perez"],
];
 echo recorrer_usuarios_list($usuariosComplejo);

