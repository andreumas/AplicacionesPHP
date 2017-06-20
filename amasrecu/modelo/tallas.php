<?php
include "db.php";
/**
 *
 */
class tallas extends db
{
  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }

  //DEvolvemos un nuevo usuario
  function insertarTalla($id){
    //Construimos la consulta
    $sql="SELECT * from tallas WHERE id='".$id."'";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }
  }


//ISERTAR TALLA
  //DEvolvemos un nuevo usuario
  function insertarTalla($id){
    //Construimos la consulta
    $sql="SELECT * from tallas WHERE id='".$id."'";
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }
}
 ?>
