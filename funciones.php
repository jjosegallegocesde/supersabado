<?php 

/*$nombre1="Catalina";
$nombre2="Pedro";
echo("Buenos dias ".$nombre1);
echo("<br>");
echo("Buenos dias ".$nombre2);*/
$nombre="Juan Carlos";

//Declaración o construcción de una funcion
function saludar($nombre){

    return("Buen dia ".$nombre);

}

//Usar la función o llamar a la función
echo(saludar("Juan"));
saludar("Catalina");
saludar($nombre);









?>