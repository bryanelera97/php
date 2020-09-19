<?php
$usuarios = ["usuario01", "usuario02", "usuario03", "usuario04"];
$i = 1;
while($i <= 40) {
    echo $i, PHP_EOL;
    $i++;
}

echo "<br/>";
 $i = 1;
 do {
    echo $i, PHP_EOL;
    $i++;
 } while($i <= 40);

 echo "<br/>";

 for($i = 1; $i <= 40; $i++){
    echo $i, PHP_EOL;
 }
 echo "<br/>";
 $i = 1;
 for(; ;) {

     if($i>40){

     break;

     }

     echo $i, PHP_EOL;
     $i++;
    }

    echo "<br/>";

    for($i = 0, $total = sizeof($usuarios);$i < $total; $i++) {
        echo $usuarios[$i] . "<br/>";

    }
    echo "<br/>";
    foreach($usuarios as $usuario){
        echo $usuario. "<br/>";
    }





 