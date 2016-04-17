<?php
include_once "cabeceraAdmin.php";
asideCiudad();

$id_ciudad=nombreId();
$datos=getCiudad($id_ciudad);

if(count($datos)>0) {
	mostrarCiudad($datos);
}else {
	echo "<article><h5>No existe ninguna ciudad con el ID ".$id_ciudad.".</h5></article>";
}

cerrarHtml();
?>
