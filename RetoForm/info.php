<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
       $conexion = new mysqli("localhost",
       "root", "root", "world");
       if ($conexion->connect_errno) {
         echo "Fallo al conectar a MySQL: " . $conexion->connect_errno;
       }else{
         if(empty($_POST["SurfaceArea"])) echo "VOILA";
         $code=$_POST["SurfaceArea"];
         $continente=$_POST["continent"];
         $consulta="SELECT * FROM country WHERE
         Code='$code' AND Continent='$continente' ";
         echo "<br>";
         echo $consulta;
         $resultado = $conexion->query($consulta);
           foreach ($resultado as $fila) {
             echo "<br>El pais buscado es:".$fila["Name"];
           }
       }
     ?>


  </body>
</html>
