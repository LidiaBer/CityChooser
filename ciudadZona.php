<?php
include_once "cabeceraAdmin.php";
$nombre=nombreZona();
asideCiudad();
if (count($nombre)==0){
	$datos=getCiudades();
	mostrarCiudades($datos);
}else{
	$datos2=getCiudadesZona($nombre);
	mostrarCiudades($datos2);
}
?>
