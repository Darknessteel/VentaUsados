<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./CSS/bootstrap.min.css">
    <link rel="stylesheet" href="./CSS/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="Images/logo2.jpg"/>
    <title>Usados CGX</title>
</head>

<body style="background-color:lightgreen;">
    <header class="shadow">
        <div class="header-content d-flex justify-content-center p-2">
            <img src="./Images/parking.svg" alt="" id="header-logo">
            <div id="header-msg" class="ml-5 align-self-center">Venta de vehiculos usados CGX </div>            
        </div>
    </header>
    <div class="form-container mt-5">
        <form class="w-50 mx-auto" id="entryForm">            
            <div class="form-group">
                <center><a href="formularioregistro.php"><img src="./Images/Logo.png" width=210 alt="logo"></center></a></br></br>
                <label for="owner">Dueño del Carro:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="owner" placeholder="Dueño del Carro">
            </div>
            <div class="form-group">
                <label for="car">Módelo del Carro:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="car" placeholder="Módelo del Carro:">
            </div>
            <div class="form-group">
                <label for="licensePlate">Placa:</label>
                <input type="text" class="form-control rounded-0 shadow-sm" id="licensePlate" placeholder="NN-NN-LL,NN-LL-NN,....etc">
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="entryDate">Fecha de compra:</label>
                    <input type="date" class="form-control rounded-0 shadow-sm" id="entryDate">
                </div>
                <div class="col-6">
                    <label for="exitDate">Fecha de periodo de uso:</label>
                    <input type="date" class="form-control rounded-0 shadow-sm" id="exitDate">
                </div>
            </div>
            <button type="submit" class="btn mx-auto d-block mt-5 rounded-0 shadow" id="btnOne">Agregar Carro</button>
        </form>
    </div>
    <div class="table-container mt-5 mb-5 w-75 mx-auto" >
            <h5 class="text-center mb-3">Búsqueda de Carros</h5>
            <input type="text" class="w-100 mb-3" id="searchInput" placeholder="Búsqueda...">
            <table class="table table-striped shadow " id="parkingTable">
                    <thead class="text-white" id="tableHead">
                      <tr>
                        <th scope="col">Dueño</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Fecha de compra</th>
                        <th scope="col">Fecha de periodo de uso</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody id="tableBody">
                     
                    </tbody>
                  </table>
    </div>
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-6">
            
           <form action="index.php" method="POST">
                <div class="row mt-5">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" name="nombreUsuario">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Modelo" name="marca">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Color" name="color">
                    </div>
                    
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Placa" name="placa">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Fotografia" name="fotografia">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary mt-4" name="botonEnviar">Registrar</button>
            </form>
            <table class="table table-striped shadow " id="parkingTable">
                    <thead class="text-white" id="tableHead">
                      <tr>
                        <th scope="col">Nombre</th>
                        <th scope="col">Modelo</th>
                        <th scope="col">Color</th>
                        <th scope="col">Placa</th>
                        <th scope="col">Fotografia</th>
                        <th scope="col">Acción</th>
                      </tr>
                    </thead>
                    <tbody id="tableBody">
                     
                    </tbody>
                  </table>
            <?php

                //1.Formato de zona horaria
                date_default_timezone_set("America/Bogota");

                //2. hora de entrada debe venir de BD (se puede guardar como varchar)
                $ingreso=new DateTime("2020-12-03 15:00:00");


                //3. Se captura la hora actual
                $salida=new DateTime();

                //4. calculamos diferencias solo es posible entre datos tipo DateTime
                $intervaloTiempo = date_diff($ingreso, $salida);

                //5. Mostramos resultados pasando de dateTime a string
                echo($ingreso->format('Y-m-d H:i:s'));
                echo("<br>");
                echo($salida->format('Y-m-d H:i:s'));
                echo("<br>");
                echo ("La diferencia es de: ".$intervaloTiempo->format("%d dias, %h horas, %i minutos"));


            ?>
            
            <?php if(isset($_POST["botonEnviar"])): ?> 

                <?php
                   
                    
                    $nombre=$_POST["nombreUsuario"];
                    $marca=$_POST["marca"];
                    $color=$_POST["color"];
                    $placa=$_POST["placa"];
                    $foto=$_POST["fotografia"];
                ?>
                   
                   <h5><?php echo($nombre) ?></h5>
                   <h5><?php echo($marca) ?></h5>
                   <h6><?php echo($color)?></h6>
                   
                   
                   <img src="<?php echo($foto)?>" alt="perfil">
    
            <?php endif ?>
    <?php
    
    //rutina para consultar todos los datos de una tabla

    //1. Incluir el archivo BaseDatos.php (Para pdoer usar la clase)
    include("BaseDatos.php");

    //2. Crear un objeto de la clase BaseDatos
    $transaccion=new BaseDatos();
    
    //3. Escribir una consulta SQL para buscar datos(La que usted necesite)
    $consultaSQL="SELECT * FROM usuarios WHERE 1";

    //4. Utilizar el metodo consultarDatos de mic lase BaseDatos
    $usuarios=$transaccion->consultarDatos($consultaSQL);

   // print_r($usuarios);

?>
<div class="form-group">
                <center><a href="formularioregistro.php"><img src="./Images/registro.png" width=210 alt="logo"></center></a></br></br>
</div>
                <div class="container">
    

    <div class="row row-cols-1 row-cols-md-3">

        <?php foreach($usuarios as $usuario): ?>

            <div class="col mb-4">

                <div class="card h-100">
                    <img src="<?php echo($usuario["foto"])?>" class="card-img-top" alt="fotoscard">
                    <div class="card-body">
                        <h5 class="card-title"><?= $usuario["nombre"] ?></h5>
                        <p class="card-text"><?= $usuario["descripcion"] ?></p>
                        <a href="eliminarUsuarios.php?id=<?= ($usuario["idUsuario"])?>" class="btn btn-danger">Eliminar</a>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar<?php echo($usuario["idUsuario"])?>">
                            Editar
                        </button>
                    </div>
                </div>

                <div class="modal fade" id="editar<?php echo($usuario["idUsuario"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edición</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="editarUsuarios.php?id=<?php echo($usuario["idUsuario"])?>" method="POST">
                                    <div class="form-group">
                                        <label>Nombre:</label>
                                        <input type="text" class="form-control" name="nombreEditar" value="<?php echo($usuario["nombre"])?>">
                                    </div>
                                    <div class="form-group">
                                        <label>Descripcion:</label>
                                        <textarea class="form-control" rows="3" name="descripcionEditar"><?php echo($usuario["descripcion"])?></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-info" name="botonEditar">Enviar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            
        <?php endforeach ?>

    </div>

</div>






  



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 

    <script src="./JS/bootstrap.min.js"></script>
    <script src="./JS/core.js"></script>
</body>

</html>