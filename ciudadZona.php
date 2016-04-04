<?php
include_once "cabeceraAdmin.php";
$nombre=nombreZona();
asideCiudad();
$datos=getCiudadesZona($nombre);
if(count($datos)>0) {
	mostrarCiudades($datos);
}
?>
