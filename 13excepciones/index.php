<?php

// permiten creear flujos para saber si algo a fallado podamos controlarlo. 

function dividir (int $a, int $b=0){

    if($b===0){
     // throw SE UTILIZA  cuando una excepcion puede ser lanzada 
        throw new Exception(" División por 0 controlada");
    }

    return  $a/$b;
}
// el codigo puede estar dentro de un bloque try para facilitar la captura de 
//de excepciones potenciales. cada bloque try debe tener al menos un bloque  catch o finally correspondiente.
echo"<br/>";
try{
    echo dividir(1010,100);
} 
// catch se UTILIZA PARA que una excepcion sea a trapada.
catch(Exception $exception) {
    echo $exception->getMessage();
   
}  finally { 
    echo"<br/>";
    
    echo"FINAL";
}
// otro ejemplo
echo "<hr/>";

function comprobarCorreoElectronico(string $email){
 // !filter_VAR = NO ES UN CORREO VALIDO; filter_VAR = ES UN CORREO VALIDO;
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        throw new Exception("El formato del correo electrónico es incorrecto");
    } return "Correo electrónico correcto";
    
}
echo"<br/>";
try {
    echo comprobarCorreoElectronico("bryan@treit.com");
} catch (Exception $exception) {
    echo $exception->getMessage();
   
}





