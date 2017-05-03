<?php
include '../db.php';
/**
 *
 */
class jugador extends db
{

  function __construct()
  {
    //Realizamos la conexion a la base de datos mediante db.
    parent::__construct();
	
  }
  
  // Funcion que muestra todos los equipos
  public function listaJuadores(){

    if ($this->hayError()==true){
      return null;

    }else{
		
		$resultado = $this->conexion()->query("SELECT * FROM jugadores ");

		return $resultado;
    }

  }

  //Funciones para la inserccion
  public function insertarJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$equipo){

    if ($this->hayError()==true){
        return null;

    }else{
      $sqlInserction="INSERT INTO jugadores(codigo,Nombre,Procedencia,Altura,Peso,Posicion,Nombre_equipo) VALUES (".$codigo.",'".$nombre."','".$procedencia."','".$altura."',".$peso.",'".$posicion."','".$equipo."')";
      $this->conexion()->query($sqlInserction);
    }

  }

  // Mostrar ultimo equipo
  public function mostrarUltimoJugador($codigo){

    if ($this->hayError()==true){
		return null;

	}else{
		
		$resultado = $this->conexion()->query("SELECT * FROM jugadores WHERE codigo='".$codigo."'");
		return $resultado;
	}		

	}

	//Funciones para la inserccion
	public function updateJugador($codigo,$nombre,$procedencia,$altura,$peso,$posicion,$equipo){

		if ($this->hayError()==true){
          return null;

		}
		else{
			$sqlInserction="UPDATE jugadores SET Nombre='".$nombre."',Procedencia='".$procedencia."',Altura='".$altura."',Peso=".$peso.",Posicion='".$posicion."',Nombre_equipo='".$equipo."' WHERE Codigo='".$codigo."'";
			$this->conexion()->query($sqlInserction);
		}

    }
    // Funcion para el borrado del ultimo insertado
    public function deleteJugador($nombre){

		if ($this->hayError()==true){
			return null;

		}
		else{
			$sqlInserction="DELETE FROM jugadores WHERE Nombre='".$nombre."'";
			$this->conexion()->query($sqlInserction);
		}
    }


}

 ?>
