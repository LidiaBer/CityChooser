<?php
include_once "cabeceraAdmin.php";
asideCiudad();
$dato=$_POST['ordena'];
$nombre=$_COOKIE['NOMBRE'];
setcookie('NOMBRE',$nombre);
mostrarOrdenarPais();
$datos=getCiudadesPaisOrdenadas($nombre,$dato);
if(count($datos)>0) {
	mostrarCiudades($datos);
}
cerrarHtml();
?>
