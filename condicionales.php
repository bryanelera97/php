<?php
$a = 2;
$b = 2;
if($a < $b){
    echo "A es menor que B";
} elseif($a ===$b) {
    echo" A es igual que B";
} else    {
    echo "A es mayor que B";
}

echo"<br/>";

$nombre = null;
echo $nombre? $nombre: "cursos";
echo"<br/>";

$nombre = "Cursosdesarrolloweb";
echo $nombre?? "cursos";

echo"<br/>";
$mes = 3;
switch ($mes) {
    case 1:
        echo "Enero";
      break;
    case 2: 
        echo "Febrero";
       break;
    case 3: 
        echo "Marzo";
       break; 
    case 4: 
        echo "Abril";
       break;
    case 5: 
        echo "Mayo";
       break;
    case 6: 
        echo "Junio";
       break;
    case 7: 
        echo "Julio";
       break;
    case 8: 
        echo "Agosto";
       break;
    case 9: 
        echo "Setiembreo";
       break;
    case 10: 
        echo"Octubre";
       break;
    case 11: 
        echo"Nobiembre";
       break;
    case 12: 
        echo"Diciembre";
       break;     
    default:
         echo "error";
        break;
    }



    

    