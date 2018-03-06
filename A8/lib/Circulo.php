<?php

/**
 *
 */
class Circulo
{
//propiedades
private $circun=7;

//constructor
  function __construct($circun)
  {
      $this->circun=$circun;
  }

//funciones publicas
  public function CalcuArea(){
  echo $this->circun;
}

public function CalcuPeri(){
echo $this->circun;
}
//Getters y Setters
  public function setCircun($circun){
$this->circun=$circun;

  }

  public function getCircun(){
   return $this->circun;
 }
}




 ?>
