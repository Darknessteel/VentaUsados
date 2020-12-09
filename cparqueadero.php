<?php
class Cparqueadero extends Controller
{
private $modeloParqueadero;
function __construct(){
  $this->modeloParqueadero = $this->loadModel("mdlParqueadero");
  $this->modeloTipoVehiculo = $this->loadModel("mdlTiposVehiculo");
  $this->modeloTipoPago = $this->loadModel("mdlTipoPago");
  $this->modeloTipoCobro = $this->loadModel("mdlTipoCobro");
  $this->modeloLoquer = $this->loadModel("mdlLoquer");
}
    public function registrarentradasysalida()
    {
      if (isset($_POST['btnEntrada'])) {
        $marcado = 0;
        $this->modeloParqueadero->__SET("placa", strtoupper($_POST['txtPlaca']));
        $this->modeloParqueadero->__SET("fechaEntrada",$_POST['txtFechaEntrada']);
        $this->modeloParqueadero->__SET("horaEntrada",$_POST['reloj']);
        $this->modeloParqueadero->__SET("fechaSalida",null);
        $this->modeloParqueadero->__SET("horaSalida",null);
        $this->modeloParqueadero->__SET("descripcion", $_POST['txtDescripcion']);
        $this->modeloParqueadero->__SET("idTipoPago",$_POST['txtPago']);
        $this->modeloParqueadero->__SET("idTipoCobro",$_POST['txtTipoCobroE']);
        $this->modeloParqueadero->__SET("idLoquer",$_POST['selLocker']);
        $this->modeloParqueadero->__SET("idUsuario", 2);
        if (isset($_POST['cbxAccesorios']) && !empty($_POST['cbxAccesorios'])) {
          $this->modeloParqueadero->__SET("entregaAccesorios",$_POST['cbxAccesorios']);
        }else{
          $this->modeloParqueadero->__SET("entregaAccesorios",$marcado);
        }
        $this->modeloParqueadero->__SET("valorCobro",null);
        $this->modeloParqueadero->__SET("estado",1);
        $this->modeloParqueadero->__SET("cantidadHoras",null);
        $this->modeloParqueadero->__SET("idTipoVehiculo",$_POST['selTipoVehiculoE']);
        var_dump(strtoupper($_POST['txtPlaca']), $_POST['txtFechaEntrada'], $_POST['reloj'],$_POST['txtPago'], $_POST['txtTipoCobroE'],
        $_POST['selLocker'],$this->modeloParqueadero->__GET("entregaAccesorios"), $_POST['selTipoVehiculoE']);exit;
        //$res = $this->modeloParqueadero->registroEntrada();
      }
        //require_once APP. 'libs/src/Mike42/autoload.php';
//require  APP. 'libs/autoload.php';
        //$connector = new FilePrintConnector("TM-T20II");
//$connector = new FilePrintConnector("php://stdout");
      //  $printer = new Printer($connector);
 //       $printer->text("Hello World!\n");
  //      $printer->cut();
  //      $printer->close();
        $tiposVehiculos = $this->modeloTipoVehiculo->listarTiposVehiculo();
        $tiposPagos = $this->modeloTipoPago->listarTiposPago();
        $tiposCobros = $this->modeloTipoCobro->listarTiposCobro();
        $loquers= $this->modeloLoquer->listarLoquers();
        // load views
        /*require APP . 'view/_templates/header.php';
        require APP . 'view/Parqueadero/RegistrarEntradasySalida.php';
        require APP . 'view/_templates/footer.php';*/
    }

    public function listarTipoVehiculo(){

    }

    public function registroEntrada(){
      $this->modeloParqueadero->__SET("placa", $_POST["txtPlaca"]);
      $this->modeloParqueadero->__SET("fechaEntrada", $_POST["txtFechaEntrada"]);
        $this->modeloParqueadero->__SET("fechaSalida", null);
    }


/*
    public function listarmovimientos()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/Parqueadero/Listarmovimientos.php';
        require APP . 'view/_templates/footer.php';
    }

    public function historialvehiculos()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/Parqueadero/HistorialVehiculos.php';
        require APP . 'view/_templates/footer.php';
    }
    public function historialventas()
    {
        // load views
        require APP . 'view/_templates/header.php';
        require APP . 'view/Parqueadero/HistorialVentas.php';
        require APP . 'view/_templates/footer.php';
    }*/
}
 ?>
