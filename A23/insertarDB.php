<?php
include 'dbNBA.php';



	// Inserta un equipo
	if ((isset($_POST['nombre'])) && (!empty($_POST['nombre'])) && (isset($_POST['ciudad'])) && (!empty($_POST['ciudad'])) && (isset($_POST['conferencia'])) && (!empty($_POST['conferencia'])) && (isset($_POST['division'])) && (!empty($_POST['division']))) {

	  $equipo = new dbNBA();
	  $equipo->insertarEquipo($_POST['nombre'],$_POST['ciudad'],$_POST['conferencia'],$_POST['division']);

	  echo "Datos enviados <br>";
	}else {
	  echo "Falta algun dato por rellenar <br>";
	}

// Muestra el ultimo equipo Insertado
	$tabla = $equipo->mostrarUltimoEquipo($_POST['nombre']);
	foreach ($tabla as $fila){
		echo "Nombre: ".$fila['Nombre']."<br>";
		echo "Ciudad: ".$fila['Ciudad']."<br>";
		echo "Conferencia: ".$fila['Conferencia']."<br>";
		echo "Division: ".$fila['Division']."<br>";
	}

// Links para actualizar o borrar
	echo "<a href='actualizar.php?nombre=".$fila['Nombre']."&ciudad=".$fila['Ciudad']."&conferencia=".$fila['Conferencia']."&division=".$fila['Division']."'>ACTUALIZAR</a><br><br>";
	echo "<a href='borrarDB.php?nombre=".$fila['Nombre']."&ciudad=".$fila['Ciudad']."&conferencia=".$fila['Conferencia']."&division=".$fila['Division']."'>BORRAR</a>";
?>
