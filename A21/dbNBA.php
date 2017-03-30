<?php
/**
 * Andreu Mas
 */
class dbNBA
{
  //Atributos necesarios para la conexion
  private $host="localhost";
  private $user="root";
  private $pass="";
  private $db_name="nba";

  //Conector
  private $conexion;

  //Propiedades para controlar errores
  private $error=false;

  function __construct()
  {
      $this->conexion = new mysqli($this->host, $this->user, $this->pass, $this->db_name);
      if ($this->conexion->connect_errno){
        $this->error=true;
      }
  }

  //Funcion para saber si hay error en la conexion
  function hayError(){
    return $this->error;
  }

  //Funciones para la inserccion

  public function insertarEquipo($nombre,$ciudad,$conferencia,$division)
  {
    $sqlInserction="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";

    $this->conexion->query($sqlinserion);
  }

	//Funcion para la muestra del ultimo equipo insertado.
	public function lastInsert($nombre){
	if($this->error==false){

		//echo "SELECT * FROM equipos WHERE nombre='".$nombre."'";
      return $this->conexion->query("SELECT * FROM equipos WHERE nombre='".$nombre."'");

    }else{
      return null;
    }
  }

  }



  ?>
