<?php
include "db.php";
/**
 *
 */
class usuarios extends db
{
  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }

  //DEvolvemos un nuevo usuario
  function comprobarUsuario($usuario){
    //Construimos la consulta
    $sql="SELECT * from usuarios WHERE usuario='".$usuario."'";
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
