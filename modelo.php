<?php
include "conexion.php";

function getCityAzar(){
	$conexion=conecta();
	$sql="SELECT NOMBRE_CIUDAD FROM CIUDAD WHERE ACTIVO=1";
	$datos=$conexion->Execute($sql)->getRows();
	$min=0;
	$max=count($datos)-1;
	
	$num=mt_rand($min,$max);
	$city=$datos[$num];
	$ciudad=$city[0];
	return($ciudad);
}

function getCityPais($pais){
	$conexion=conecta();
	$sql="SELECT NOMBRE_CIUDAD FROM CIUDAD WHERE ACTIVO=1 AND PAIS='$pais'";
	$datos=$conexion->Execute($sql)->getRows();
	$min=0;
	$max=count($datos)-1;
	
	$num=mt_rand($min,$max);
	$city=$datos[$num];
	$ciudad=$city[0];
	return($ciudad);
}

function buscaPais($ciudad) {
	$conexion=conecta();
	$sql="SELECT PAIS FROM CIUDAD WHERE NOMBRE_CIUDAD='$ciudad'";
	$pais=$conexion->getOne($sql);
	return $pais;
}
function buscaPaisZona($ciudad, $zona) {
	$conexion=conecta();
	$sql="SELECT PAIS FROM CIUDAD WHERE NOMBRE_CIUDAD='$ciudad' AND ZONA_CONTINENTE='$zona'";
	$pais=$conexion->getOne($sql);
	return $pais;
}
function buscaZona($pais) {
	$conexion=conecta();
	$sql="SELECT ZONA_CONTINENTE FROM CIUDAD WHERE PAIS='$pais'";
	$zona=$conexion->getOne($sql);
	return $zona;
}

function getCityZona($zona){
	$conexion=conecta();
	$sql="SELECT NOMBRE_CIUDAD FROM CIUDAD WHERE ACTIVO=1 AND ZONA_CONTINENTE='$zona'";
	$datos=$conexion->Execute($sql)->getRows();
	
	$min=0;
	$max=count($datos)-1;
	$num=mt_rand($min,$max);
	
	$city=$datos[$num];
	$ciudad=$city[0];
	return($ciudad);
}

?>