<?php
include_once "cabeceraAdmin.php";
$nombre=nombreCiudad();
asideCiudad();
$datos=getCiudadesNombre($nombre);
if(count($datos)>0) {
	mostrarCiudades($datos);
}
?>
