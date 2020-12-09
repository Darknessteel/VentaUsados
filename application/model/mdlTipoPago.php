<?php

class mdlTipoPago
{

  private $idTipoPago;
  private $tipoPago;
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

  public function listarTiposPago(){
    $sql ="SELECT * FROM tipospago;";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
