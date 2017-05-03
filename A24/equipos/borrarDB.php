<?php

include 'equipo.php';

$borrar = new equipo();

$borrar->deleteEquipo($_GET['nombre']);
echo "El equipo ".$_GET['nombre']." se ha borrado de la DB";
