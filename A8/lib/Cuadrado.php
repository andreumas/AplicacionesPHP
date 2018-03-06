<?php

/**
 *
 */
class Cuadrado
{
//propiedades
private $lado=4;

//constructor
  function __construct($cuadrado)
  {
      $this->cuadrado=$cuadrado;
  }

  public function CalcuArea(){
  echo $this->cuadrado;
}

public function CalcuPeri(){
echo $this->cuadrado;
}
//Getters y Setters
  public function setLado($cuadrado){
$this->cuadrado=$cuadrado;

  }

  public function getLado(){
   return $this->cuadrado;
 }
}




 ?>
