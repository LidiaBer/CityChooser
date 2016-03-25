<?php
include "conexion.php";

function getCityAzar(){
	$conexion=conecta();
	$sql="SELECT NOMBRE_CIUDAD FROM CIUDAD";
	$datos=$conexion->Execute($sql)->getRows();
	
	$min=0;
	$max=count($datos)-1;
	
	$num=mt_rand($min,$max);
	$city=$datos[$num];
	$ciudad=$city[0];
	return($ciudad);
}

function buscaCityMaps($ciudad) {
	$conexion=conecta();
	$sql="SELECT PAIS FROM CIUDAD WHERE NOMBRE_CIUDAD='$ciudad'";
	$pais=$conexion->getOne($sql);
	echo "<a href='https://www.google.es/maps/search/".$ciudad.",+".$pais."' target='_blank'>Buscar en Google Maps</a>";
}
?>