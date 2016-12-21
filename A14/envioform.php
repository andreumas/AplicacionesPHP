



<?php
//mostrado de datos
echo "tu nombre es:" .  $_POST['nombre'] .",";
echo "tus apellidos son:" .  $_POST['apellidos'] .  ",";
echo  "Cursas:" . $_POST['curso'];
echo  "de" . $_POST['ciclo'];

//Definicion de Variables para promedio

$prom1= $_POST['not1'];
$prom2= $_POST['not2'];
$prom3= $_POST['not3'];
$prom4= $_POST['not1'];

//operacion aritmetica

$division=array($prom1,$prom2,$prom3,$prom4);
$numeroelemento=count($division);
 $resultado=($prom1+$prom2+$prom3+$prom4)/$numeroelemento;

//maximos y minimos
$maxi=10; //Variables max y min 
$mini=0;


//Mostrarlo por pantalla

echo "Tu media es de " . $resultado;



//Aprobado o supendido
if($resultado<5){
echo "Lo sentimos pero su nota media no da para un aprobado ";
}elseif($resultado>=5){
  echo "Enhorabuena ha aprobado,siga asi";
}
 ?>
