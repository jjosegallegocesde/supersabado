<?php 

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){

        //1. Recibir datos a actualizar
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];

        //2. Recibir el id del registro a actualizar
        $id=$_GET["id"];

        //3. Sacar copia o crear objeto de la clase
        $transaccion=new BaseDatos();

        //4. Crear una consulta para editar datos en SQL
        $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";
        
        //5. Acceder al metodo editardatos
        $transaccion->editarDatos($consultaSQL);

        //6. redireccion
        header("location:listaUsuarios.php");





    }





?>