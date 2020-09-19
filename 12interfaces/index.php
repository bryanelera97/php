<?php

interface ICrud {
    // get para obtener todos  
    public function get(): string;
    //find = para obtener uno
    public function find(int $id): string;
    // create = para poder crear
    public function create (array $array): string;
    // update = para actualizar
    public function update (array $array): string;
    // delete = para eliminar 
    public function delete (int $id): string;
 }

class Crud implements ICrud{

    public function get(): string {
        return " Obtener todos los usuarios";

    }

    public function find(int $id): string{
        return " Obtener el usuario con id {$id}";

    }
    public function create (array $array): string{
        return serialize($array);

    }
    public function update (array $array): string{
        return serialize($array);

    }
    public function delete (int $id): string{
        return "Eliminamos el usuario con id{$id}";
        
    }


}


$crud = new Crud;
echo $crud-> get();
echo"<br/>";
echo $crud-> find(1);
echo"<br/>";
echo $crud-> create(["elera",34]);
echo"<br/>";
echo $crud-> update([1,"elera",34]);
echo"<br/>";
echo $crud-> delete(1);
echo"<br/>";

