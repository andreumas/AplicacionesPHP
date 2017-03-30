<?php

include 'dbNBA.php';

$borrar = new dbNBA();

$borrar->deleteEquipo($_GET['nombre']);
echo "El equipo ".$_GET['nombre']." se ha borrado de la DB";
