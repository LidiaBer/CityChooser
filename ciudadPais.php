<?php
include_once "cabeceraAdmin.php";
$nombre=nombrePais();
asideCiudad();
$datos=getCiudadesPais($nombre);
if(count($datos)>0) {
	mostrarCiudades($datos);
}
?>
