<!DOCTYPE html>
<html>

  <head>

    <meta charset="utf-8">
    <title>Juego de Tronos</title>
      <link rel="icon" type="image/png" href=icono.png" />
  </head>
  <body>




    <!---
    MENU
    -->
    <IMG SRC="logo.jpg" width="400" height="230">

    <table class="menu" border="1" >
      <tr>
        <td><a href="Actoresgeneral.php">Actores por episodio</a></td>
        <td><a href="actoresepisodios.php">Nombre Actores</a></td>

      </tr>
    </table>
    <!---
    FIN MENU
    -->
  <?php header("Content-type: text/html; charset=utf8");
    include "juegotronos.php";


    //Hacemos la Conexion
    $conexion = new juegotronosDB();
    if ($conexion->getErrorConexion()==true) {
      //Ha habido error
      echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
    }else{
      //No ha habido error
      //Hacemos una consulta
        //hacemos un echo a la consulta anterior ;
        $resultado = $conexion->actoresEpisodios();

        echo "<th>Actores y su personaje</th>". "<br>";
        echo "</tr>";
        while($fila=$resultado->fetch_assoc()){
          echo "<tr>" . "<br>";
          echo "<td>".$fila["name"]."</td>". "<br>";
          echo "<td>".$fila["serie_name"]."</td>" . "<br>";


        }
        echo "</table>";
    }
    ?>


  </body>
</html>
