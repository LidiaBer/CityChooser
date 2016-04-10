<?php
include_once "cabeceraAdmin.php";
$datos=nuevaCiudad();
if (count($datos)>0){
	insertarCiudad($datos);
}
asideCiudad();
$datos=getCiudades();
mostrarCiudades($datos);
?>