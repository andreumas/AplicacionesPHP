<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <?php

//Andreu Mas
     //Conexion a la base de datos y comprobar que mysql esta encendido
    $conexion= new mysqli("localhost","root","root","juegos");
    if($conexion->connect_errno){
    echo "Fallo al conectar con MySQL" . $conexion->connect_errno;
    }else{
    //Lo que tiene que mostrar por pantalla
    $resultado=$conexion->query("SELECT * FROM usuarios2 ORDER BY id" );
            while ($fila=$resultado->fetch_assoc()) {
            echo "<table>" . $fila['id']." <tr> ".$fila['nombre']." <tr> ".$fila['apellidos']." <tr> ".$fila['edad']." <tr> ".$fila['curso']." <tr> ".$fila['puntuacion']." <tr> ".$fila['correo'];
                                                    }
    }
//Variables insertivas
$nom=$_POST['nombre'];
$ape=$_POST['apellidos'];
$edad=$_POST['edad'];
$curso=$_POST['curso'];
$puntu=$_POST['puntua'];
$correo=$_POST['correo'];

//Insertamos en tabla Usuarios2 los campos siguientes con los valores sacados del form
    $insertar = "INSERT INTO usuarios2 (nombre,apellidos,edad,curso,puntuacion,correo)
                 VALUES ('$nom','$ape','$edad','$curso','$puntu','$correo')";

//Comprobamos si se ha insertado correctamente
  if ($conexion->query($insertar) === TRUE) {
      echo " <br> Insertado Correctamente";
   }else{
      echo "Error: " . $insertar . "<br>" . $conexion->error;
                 }

//Comprobamos si hay algun campo vacio
  if (empty($_POST['nombre'] && $_POST['apellidos'] && $_POST['edad'] && $_POST['curso'])) {
      echo "Algun campo esta vacio";
                 }
$conexion->close();



     ?>



  </body>
</html>
