
<html>
<head>
</head>
<body>

  <table border=1>
  <td><a href="/confeste.php">Conferencia Este</a></td>
  <td><a href="#">Conferencia Oeste</a></td>
  <td><a href="/temporada.php">Temporada 99/00</a></td>
  </table>


  <?php
include "dbNBA.php";


$conexion =new dbNBA();


    if ($conexion->getErrorConexion()==true) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }else{

        //hacemos un echo a la consulta anterior ;
        $resultado = $conexion->mostrarEquipos();

        echo "<th>Datos Equipos</th>". "<br>";
        echo "</tr>";
        while($fila=$resultado->fetch_assoc()){
          echo "<tr>" . "<br>";
          echo "<td>".$fila["Nombre"]."</td>". "<br>";
          echo "<td>".$fila["Ciudad"]."</td>" . "<br>";
          echo "<td>".$fila["Conferencia"]."</td>". "<br>";
          echo "<td>".$fila["Division"]."</td>" . "<br>";


        }
        echo "</table>";
    }



   ?>


</body>
</html>
