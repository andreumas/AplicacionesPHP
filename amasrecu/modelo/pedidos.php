<?php
include "db.php";
/**
 *
 */
class pedidos extends db
{
  function __construct()
  {
    //De esta forma realizamos la conexion a la base de datos
    parent::__construct();
  }
  //Insertamos un nuevo usuario
  function crearPedido($nombre,$apellidos,$talla,$numerocamisetas){
    //Construimos la consulta
    $sql="INSERT INTO pedidos ( nombre, apellidos, talla, numerocamisetas);
          VALUES (NULL, ".$nombre,"'.$apellidos."', "'.$talla."', "'.$numerocamisetas."');
    //Realizamos la consulta
    $resultado=$this->realizarConsulta($sql);
    if($resultado!=false){
      //Recogemos el ultimo usuario insertado
      $sql="SELECT * from usuario ORDER BY id DESC";
      //Realizamos la consulta
      $resultado=$this->realizarConsulta($sql);
      if($resultado!=false){
        return $resultado->fetch_assoc();
      }else{
        return null;
      }
    }else{
      return null;
    }
  }
  //DEvolvemos un nuevo usuario
function listaPedidos($id){
    //Construimos la consulta
    $sql="SELECT * from pedidos WHERE pedidos='".$id."'";
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

    //Verficacion01-Listar pedidos

    function listarPedidos($id){
        //Construimos la consulta
        $sql="SELECT * from pedidos WHERE pedidos='".$id."'";
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
