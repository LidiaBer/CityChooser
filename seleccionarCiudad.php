<?php
include_once "cabecera.php";

mostrarBoton();

$ciudad=getCityAzar();
$pais=buscaPais($ciudad);
do {
	$ciudad2=getCityPais($pais);
}while($ciudad2==$ciudad);
do {
	$ciudad3=getCityPais($pais);
}while($ciudad3==$ciudad || $ciudad3==$ciudad2);


mostrarCityAzar($ciudad);
mostrarPais($pais);
mostrarCityMaps($ciudad,$pais);
mostrarRutaMaps($ciudad, $ciudad2, $ciudad3, $pais);
mostrarVideos($ciudad, $pais);
?>