<?php
include_once "cabeceraAdmin.php";
$id_ciudad=$_GET['ID_CIUDAD'];
$datos1=getCiudad($id_ciudad);
$datos2=mostrarModificaCiudad($datos1);
if($datos2>0) {
	modificaCiudad($datos2);
}
?>