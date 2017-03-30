<?php
include 'dbNBA.php';


$equipo = new dbNBA();
	if ((isset($_POST['nombre'])) && (!empty($_POST['nombre'])) && (isset($_POST['ciudad'])) && (!empty($_POST['ciudad'])) && (isset($_POST['conferencia'])) && (!empty($_POST['conferencia'])) && (isset($_POST['division'])) && (!empty($_POST['division']))) {
		$equipo->insertarEquipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);
		echo "Datos enviados<br><br>";

	}else{
		echo "Falta algun dato por rellenar";
}


$resultado=$equipo->lastInsert($_POST['nombre']);


$fila=$resultado->fetch_assoc();
	echo "<b>ULTIMO EQUIPO AÑADIDO</b><br><br>";
	echo "Nombre: ".$fila['Nombre']."<br>";
	echo "Ciudad: ".$fila['Ciudad']."<br>";
	echo "Conferencia: ".$fila['Conferencia']."<br>";
	echo "Division: ".$fila['Division']."<br>";


?>
