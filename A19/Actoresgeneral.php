<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Juego de Tronos</title>
    

  </head>
  <body>
    <!---
    MENU
    -->
<IMG SRC="logo.jpg" width="400" height="230">

    <table class="menu" border="1">
      <tr>
        <td><a href="Actoresgeneral.php">Actores por episodio</a></td>
        <td><a href="actoresepisodios.php">Nombre Actores</a></td>

      </tr>
    </table>
    <!---
    FIN MENU
    -->
    <?php
    include "juegotronos.php";


    //Hacemos la Conexion
    $conexion = new mysqli("localhost", "root", "", "gameofthrones");
    if ($conexion->connect_errno) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }else{
      //No ha habido error
      //Hacemos una consulta
        $select=" SELECT full_desc FROM `cast` ORDER BY episodes DESC" ;
        //hacemos un echo a la consulta anterior ;
        $resultado = $conexion->query($select);

        echo "<th>Actores por Episodio</th>". "<br>";
        echo "</tr>";
        while($fila=$resultado->fetch_assoc()){
          echo "<tr>";
          echo "<td>".$fila["full_desc"]."</td>". "<br>";



        }
        echo "</table>";
    }
    ?>


  </body>
</html>
