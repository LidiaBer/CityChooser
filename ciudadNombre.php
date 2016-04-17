<?php
include_once "cabeceraAdmin.php";
asideCiudad();
$nombre=nombreCiudad();
setcookie('NOMBRE',$nombre);
mostrarOrdenarNombre();
$datos=getCiudadesNombre($nombre);
if(count($datos)>0) {
	mostrarCiudades($datos);
}
cerrarHtml();
?>
