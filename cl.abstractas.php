<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


// es una clase que tiene un cuerpo que puede tener sierta logica para 
//poder implementar = ( crud, )

abstract class UsuarioAbstracto{

   Abstract public function edad($edad);

    Public function nombre (string $nombre): string { 
        return $nombre;
    }
  

    Public function apellido(string $apellido): string { 
      return $apellido;

  }
}

class Usuario extends UsuarioAbstracto {

    public function edad ($edad): int{
        return $edad;
    
    }

}

$usuario = new Usuario;

echo sprintf(
    '%s %s %d',
    $usuario->nombre('Brayan'),
    
    $usuario->apellido('Elera'),

    $usuario-> edad ('39')
);




