<?php  

class BaseDatos{

//VARIABLES == ATRIBUTOS
public $usuarioBD="root";
public $passwordBD="jdajkaldjadkljadkjasdk";

//FUNCION ESPECIAL PARA SACAR COPIAS DE LA CLASE(EL CONSTRUCTOR)
public function __construct(){}


//FUNCIONES==METODOS
public function conectarBD(){

    try{

        $infoBD="mysql:host=localhost;dbname=tiendasabado";
        $conexionBD= new PDO($infoBD, $this->usuarioBD, $this->passwordBD);
        echo("wxito en conexión");

    }catch(PDOException $error){

        echo($error->getMessage());

    }

}


}






?>