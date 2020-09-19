<?php
$usuario = "Brayan elera";
echo $usuario;
$usuario = "Cursodesarrolloweb";
echo "<br />";
echo $usuario;
echo "<br/>";
$edad=39;
echo $edad;
echo "<br/>";
$precioCurso=9.99;
echo $precioCurso;
echo "<br/>";
$tecnologias = [
    "php","javascript","laravel","react","wordpress"
];

echo"<pre>";
var_dump($tecnologias);
echo "</pre>";
echo "<br />";
echo $tecnologias[3];
echo "<br />";
$usuarioObjeto= new stdclass;
$usuarioObjeto->nombre = "Brayan elera";
$usuarioObjeto->edad = 39;
echo"<pre>";
var_dump($usuarioObjeto);
echo "</pre>";
echo $usuarioObjeto->nombre;

