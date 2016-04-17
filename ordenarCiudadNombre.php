<?php
include_once "cabeceraAdmin.php";
asideCiudad();
$dato=$_POST['ordena'];
$nombre=$_COOKIE['NOMBRE'];
setcookie('NOMBRE',$nombre);
mostrarOrdenarNombre();
$datos=getCiudadesNombreOrdenadas($nombre,$dato);
if(count($datos)>0) {
	mostrarCiudades($datos);
}
cerrarHtml();
?>
