<?php

/**
 *
 */
class Triangulo
{
//propiedades
private $lados=3;

//constructor
  function __construct($triangulo)
  {
      $this->triangulo=$triangulo;
  }

  public function CalcuArea(){
  echo $this->triangulo;
}

public function CalcuPeri(){
echo $this->triangulo;
}
//Getters y Setters
  public function setLados($triangulo){
$this->triangulo=$triangulo;

  }

  public function getLados(){
   return $this->triangulo;
 }
}




 ?>
