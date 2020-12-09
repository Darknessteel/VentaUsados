<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEditar"])){
        
        $id=$_GET["id"];

      
        $nombre=$_POST["nombreEditar"];
        $descripcion=$_POST["descripcionEditar"];

        $transaccion= new BaseDatos();

        $consultaSQL="UPDATE usuarios SET nombre='$nombre',descripcion='$descripcion' WHERE idUsuario='$id'";

       
       $transaccion->editarDatos($consultaSQL);
      
        header("location:listadoUsuarios.php");
    }
?>