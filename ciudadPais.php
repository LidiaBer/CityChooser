<?php
include_once "cabeceraAdmin.php";
asideCiudad();
$nombre=nombrePais();
setcookie('NOMBRE',$nombre);
mostrarOrdenarPais();
$datos=getCiudadesPais($nombre);
if(count($datos)>0) {
	mostrarCiudades($datos);
}
cerrarHtml();
?>