<?php
class dbNBA //Creamos la clase
{
  private $conexion;
  private $errorConexion=false;

  function __construct()
  {//Hacemos la conexion a la base de datos
    $this->conexion = new mysqli("localhost", "root", "", "nba");
    if ($this->conexion->connect_errno) {
      $this->errorConexion=true;
    }
  }

  public function getErrorConexion(){
    return $this->errorConexion;
  }

  public function mostrarEquipos(){
    return $this->conexion->query("SELECT * FROM `equipos`");
  }

  public function mostrarConfEste(){
    return $this->conexion->query("SELECT Nombre,Ciudad,Divison FROM `equipos`");
  }

  public function mostrarTemporada(){
    return $this->conexion->query("SELECT equipo_local,equipo_visitante,puntos_local,puntos_visitante FROM `partidos`");
  }


}
?>
