<?php

include 'jugador.php';

$actualizar = new jugador();

$actualizar->updateJugador($_POST['codigo'],$_POST['nombre'],$_POST['procedencia'],$_POST['altura'],$_POST['peso'],$_POST['posicion'],$_POST['equipo']);
echo "El jugador ".$_POST['nombre']." ha sido actualizado";

 ?>
