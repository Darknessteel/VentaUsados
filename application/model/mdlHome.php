<?php

class mdlHome
{
  private $db;
  private $user;
  private $pass;

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

  public function validationUser(){
    $sql ="SELECT * FROM usuarios WHERE Usuario = ? AND Clave = ? AND Estado = 1 LIMIT 1;";
    $stm = $this->db->prepare($sql);
    $stm->bindParam(1, $this->user);
    $stm->bindParam(2, $this->pass);
    $stm->execute();
    return $stm->fetchAll(PDO::FETCH_ASSOC);
  }
}







 ?>
