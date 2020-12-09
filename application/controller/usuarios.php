<?php
class Usuarios extends Controller
{

    public function crearUsuarios()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/Usuario/crearusuario.php';
        require APP . 'view/_templates/footer.php';
    }

public function Listarusuarios()
{
    // load views
    require APP . 'view/_templates/header.php';
    require APP . 'view/Usuario/Listarusuarios.php';
    require APP . 'view/_templates/footer.php';
}
}
 ?>
