<?php

include 'dbNBA.php';

$actualizar = new dbNBA();

$actualizar->updateEquipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
echo "El equipo ".$_POST['nombre']." ha sido actualizado";

 ?>
