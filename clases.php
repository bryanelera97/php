<?php


class vehiculos {

    public $autos;
    public $motos;

    public function __construct( $autos){
        $this -> autos = $autos ;
        $this-> motos = ["Honda", " ztl", "Rte", "sonzheng"];


    }
  //upperCamelcase
    //public function pedro(): string {
        //return $this->motos[$this->autos];
    //}

    //public function recorrerMotos():string {
       // $resultado='';
        //foreach($this-> motos as $vehiculos) {
          //  $resultado.="<br/>{$vehiculos}";
        //}
        //return $resultado;

    public function encontrarMotos($autos = null): string {
        return $this ->motos[$autos?? $this->$autos];
        
    }  

 }
  

$vehiculos= new Vehiculos(0);
echo $vehiculos->autos;
echo "<br/>";
echo "<pre>";
var_dump($vehiculos->motos);
echo "</pre>";
echo "<br/>";
//echo $Vehiculos->pedro();

//echo $vehiculos->recorrerMotos();
 
echo $vehiculos-> encontrarMotos(3);
 


