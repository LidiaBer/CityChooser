<?php
include_once "cabeceraAdmin.php";
asideCiudad();

$datos=nuevaCiudad();
if (count($datos)>0){
	insertarCiudad($datos);
}
$datos2=getCiudades();
mostrarOrdenar();
mostrarCiudades($datos2);
cerrarHtml();
?>