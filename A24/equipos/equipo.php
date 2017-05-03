<?php
include '../db.php';
/**
 *
 */
class equipo extends db
{

  function __construct()
  {
    //Realizamos la conexion a la base de datos mediante db.
    parent::__construct();
	
  }
	
  // Funcion que muestra todos los equipos
  public function listaEquipos(){

    if ($this->hayError()==true){
      return null;

    }else{
		
		$resultado = $this->conexion()->query("SELECT * FROM equipos ");

		return $resultado;
    }

  }

  //Funciones para la inserccion
  public function insertarEquipo($nombre,$ciudad,$conferencia,$division){

    if ($this->hayError()==true){
        return null;

    }else{
      $sqlInserction="INSERT INTO equipos(Nombre,Ciudad,Conferencia,Division) VALUES ('".$nombre."','".$ciudad."','".$conferencia."','".$division."')";
      $this->conexion()->query($sqlInserction);
    }

  }

  // Mostrar ultimo equipo
  public function mostrarUltimoEquipo($nombre){

    if ($this->hayError()==true){
		return null;

	}else{
		
		$resultado = $this->conexion()->query("SELECT * FROM equipos WHERE nombre='".$nombre."'");
		return $resultado;
	}		

	}

	//Funciones para la inserccion
	public function updateEquipo($nombre,$ciudad,$conferencia,$division){

		if ($this->hayError()==true){
          return null;

		}
		else{
			$sqlInserction="UPDATE equipos SET Nombre='".$nombre."',Ciudad='".$ciudad."',Conferencia='".$conferencia."',Division='".$division."' WHERE Nombre='".$nombre."'";
			$this->conexion()->query($sqlInserction);
		}

    }
    // Funcion para el borrado del ultimo insertado
    public function deleteEquipo($nombre){

		if ($this->hayError()==true){
			return null;

		}
		else{
			$sqlInserction="DELETE FROM equipos WHERE Nombre='".$nombre."'";
			$this->conexion()->query($sqlInserction);
		}
    }


}

 ?>
