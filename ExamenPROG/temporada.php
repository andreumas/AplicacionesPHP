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


$conexion = new dbNBA();


    if ($conexion->getErrorConexion()==true) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }else{

        //hacemos un echo a la consulta anterior ;
        $resultado = $conexion->mostrarTemporada();

        echo "<th>Temporada</th>". "<br>";
        echo "</tr>";
        while($fila=$resultado->fetch_assoc()){
          echo "<tr>" . "<br>";
          echo "<td>".$fila["equipo_local"]."</td>". "<br>";
          echo "<td>".$fila["equipo_visitante"]."</td>" . "<br>";
          echo "<td>".$fila["puntos_local"]."</td>". "<br>";
          echo "<td>".$fila["puntos_visitante"]."</td>". "<br>";


        }
        echo "</table>";
    }



   ?>


</body>
</html>
