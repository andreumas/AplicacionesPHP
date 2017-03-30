<?php
/**
 * Andreu Mas
 */
class dbNBA
{
  //Conexion
  private $host="localhost";
  private $user="root";
  private $pass="root";
  private $db_name="nba";

  private $conexion;

  //Control de errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno) {
        $this->error=true;
      }
  }

  function hayError(){
    return $this->error;
  }

  public function listaEquipos(){

  if ($this->error==true){
      return null;
  }else{
    return $this->conexion->query("SELECT * FROM equipos ");
  }

}

  //Funciones para la inserccion
  public function insertarEquipo($nombre,$ciudad,$conferencia,$division){

    if ($this->error==true){
        return null;

    }else{
      $sqlinsercion="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
      $this->conexion->query($sqlinsercion);
    }

  }

  // Mostrar ultimo equipo
  public function mostrarUltimoEquipo($nombre){

      if ($this->error==true){
          return null;

      }else{
        return $this->conexion->query("SELECT * FROM equipos WHERE nombre='".$nombre."'");
      }

    }

    //Funciones para la inserccion
    public function updateEquipo($nombre,$ciudad,$conferencia,$division){

      if ($this->error==true){
          return null;

      }else{
        $sqlinsercion="UPDATE equipos SET Nombre='".$nombre."',Ciudad='".$ciudad."',Conferencia='".$conferencia."',Division='".$division."' WHERE Nombre='".$nombre."'";
        $this->conexion->query($sqlinsercion);
      }

    }
    
    public function deleteEquipo($nombre){

      if ($this->error==true){
          return null;

      }else{
        $sqlinsercion="DELETE FROM equipos WHERE Nombre='".$nombre."'";
        $this->conexion->query($sqlinsercion);
      }
    }

}
  ?>
