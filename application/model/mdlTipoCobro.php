<?php

class mdlTipoCobro
{

  private $idTipoCobro;
  private $tipoCobro;
  private $valor;
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

  public function listarTiposCobro(){
    $sql ="SELECT * FROM tiposcobros;";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
