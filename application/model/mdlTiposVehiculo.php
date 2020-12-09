<?php

class mdlTiposVehiculo
{

  private $idTipo;
  private $tipo;
  private $db;

  function __construct($db)
  {
      $this->db = $db;
  }

  public function __SET($atr, $valor){
      $this->$atr =  $valor;
  }

  public function __GET($atr){
    return $this->$atr;
  }

  public function listarTiposVehiculo(){
    $sql ="SELECT * FROM tiposvehiculos;";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

}





 ?>
