<?php
include_once "cabeceraAdmin.php";
asideCiudad();
$nombre=nombreZona();
setcookie('NOMBRE',$nombre);
mostrarOrdenarZona();
if (count($nombre)==0){
	$datos=getCiudades();
	mostrarCiudades($datos);
}else{
	$datos2=getCiudadesZona($nombre);
	mostrarCiudades($datos2);
}
cerrarHtml();
?>