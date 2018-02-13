<?php
//Andreu Mas
//Espero un 0'5 en este ejercicio aunque sea por poner la conexion
//por un echo de GET y poco mas



//Conexion a la base de datos y comprobar que mysql esta encendido
$conexion= new mysqli("localhost","root","root","juegos");
  if($conexion->connect_errno){
    echo "Fallo al conectar con MySQL" . $conexion->connect_errno;

}else{

//Lo que tiene que mostrar por pantalla
$resultado=$conexion->query("SELECT * FROM usuarios2 WHERE id=id ORDER BY id" );
        while ($fila=$resultado->fetch_assoc()) {
        echo $_GET[$fila['id']];
                                                }
}




 ?>
