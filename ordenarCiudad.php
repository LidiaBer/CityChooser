<?php
include_once "cabeceraAdmin.php";
include_once "cabeceraAdmin.php";
asideCiudad();
$dato=$_POST['ordena'];
$datos=nuevaCiudad();
if (count($datos)>0){
	insertarCiudad($datos);
}
$datos2=getCiudadesOrdenadas($dato);
mostrarOrdenar();
mostrarCiudades($datos2);
cerrarHtml();
?>