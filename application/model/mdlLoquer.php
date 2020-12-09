<?php

class mdlLoquer
{

  private $idLoquer;
  private $loquer;
  private $estado;
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

  public function listarLoquers(){
    $sql ="SELECT * FROM loquers WHERE Estado = 0;";
    $stm = $this->db->prepare($sql);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }

}

?>
