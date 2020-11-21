<?php

    include("BaseDatos.php");
    
    if (isset($_POST["botonEnvio"])){
        
        //1. recibir datos:
        $nombre=$_POST["nombre"];
        $apellido=$_POST["apellido"];
        $descripcion=$_POST["descripcion"];
        $genero=$_POST["genero"];
        $foto=$_POST["foto"];

        //2. Crear un objeto de la clase BaseDatos
        //2. Sacar una copia de la clase BaseDatos
        $transaccion= new BaseDatos();
        
        //3.Crear la consulta SQL para agregar datos
        $consultaSQL="INSERT INTO usuarios(nombre,apellido,descripcion,genero,foto) VALUES ('$nombre','$apellido','$descripcion','$genero','$foto')";

        //4.LLamar al metodo agregarDatos     
        $transaccion->agregarDatos($consultaSQL);

        
        

        
    }
?>