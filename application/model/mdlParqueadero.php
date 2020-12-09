<?php

class mdlParqueadero
{
  private $db;
  private $fechaEntrada;
  private $horaEntrada;
  private $placa;
  private $fechaSalida;
  private $horaSalida;
  private $descripcion;
  private $idTipoPago;
  private $idTipoCobro;
  private $idLoquer;
  private $idUsuario;
  private $entregaAccesorios;
  private $valorCobro;
  private $estado;
  private $cantidadHoras;
  private $idTipoVehiculo;
  public $cantidadCascos;


  function __construct($dbase)
  {
    $this->db = $dbase;
  }

  public function __SET($atr, $valor){
      $this->$atr =  $valor;
  }

  public function __GET($atr){
    return $this->$atr;
  }

  public function registroEntrada(){
    $sql ="INSERT INTO ventasparqueadero (Placa, FechaEntrada, HoraEntrada,FechaSalida, HoraSalida, Descripcion, IdTipoPago, IdTipoCobro, IdLoker, IdUsuario, EntregaAccesorios, ValorCobro, Estado, CantidadHoras, IdTipoVehiculo, CantidadCascos) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?);";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->placa);
    $stm->bindParam(2, $this->fechaEntrada);
    $stm->bindParam(3, $this->horaEntrada);
    $stm->bindParam(4, $this->fechaSalida);
    $stm->bindParam(5, $this->horaSalida);
    $stm->bindParam(6, $this->descripcion);
    $stm->bindParam(7, $this->idTipoPago);
    $stm->bindParam(8, $this->idTipoCobro);
    $stm->bindParam(9, $this->idLoquer);
    $stm->bindParam(10, $this->idUsuario);
    $stm->bindParam(11, $this->entregaAccesorios);
    $stm->bindParam(12, $this->valorCobro);
    $stm->bindParam(13, $this->estado);
    $stm->bindParam(14, $this->cantidadHoras);
    $stm->bindParam(15, $this->idTipoVehiculo);
    $stm->bindParam(16, $this->cantidadCascos);
    $respuesta = $stm->execute();
    return $respuesta;
  }
}
