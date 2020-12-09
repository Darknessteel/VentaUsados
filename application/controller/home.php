<?php

class Home extends Controller
{
  private $modeloHome;

  function __construct(){
    $this->modeloHome = $this->loadModel("mdlHome");
  }
    public function index()
    {
        // load views
        //require APP . 'view/_templates/header.php';
        if(isset($_POST['btnIngresar'])){
          $user=$_POST["txtUsuario"];
          $pass=$_POST["txtClave"];
          $this->modeloHome->__SET("user",$user);
          $this->modeloHome->__SET("pass",sha1($pass));
          $res = $this->modeloHome->validationUser();
          if($res) {
            header('location:'.URL.'Home/principal');
          }else{
            echo '<script language="javascript">';
            echo 'alert("Usuario o contraseña incorrectos")';
            echo '</script>';
          

          }
        }
        require APP . 'view/home/index.php';
        //require APP . 'view/_templates/footer.php';
    }
     public function principal()
    {
      //cabeza
      require APP.'view/_templates/header.php';
      //cuerpo
      require APP.'view/home/principal.php';
      //pie
      require APP.'view/_templates/footer.php';
    }

    public function paginaWeb(){

      //cuerpo
      require APP.'view/home/paginaWeb.php';

    }



    public function exampleOne()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_one.php';
        require APP . 'view/_templates/footer.php';
    }


    public function exampleTwo()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/home/example_two.php';
        require APP . 'view/_templates/footer.php';
    }
}
