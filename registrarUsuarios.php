<?php

    include("BaseDatos.php");

    if(isset($_POST["botonEnvio"])){
        
        //1. Recibo datos del formulario
        $nombre=$_POST["nombre"];
        $marca=$_POST["marca"];
        $descripcion=$_POST["descripcion"];
        $color=$_POST["color"];
        $foto=$_POST["foto"];


        //2. Crear un objeto(COPIA) de la clase BaseDatos
        $transaccion=new BaseDatos();

        //3.Construir una consulta SQL para insertar datos
        $consultaSQL="INSERT INTO usuarios(nombre,marca,descripcion,color,foto) VALUES ('$nombre','$marca','$descripcion','$color','$foto')";

        
        //4. Utilizar el metodo agregarDatos() de la clase BaseDatos
        $transaccion->agregarDatos($consultaSQL);

    }




?>