<?php
include_once "cabeceraAdmin.php";
asideCiudad();
$datos=nuevaCiudad();
if (count($datos)>0){
	insertarCiudad($datos);
}
?>