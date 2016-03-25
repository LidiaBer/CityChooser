<?php
function conecta() {
	include "/adodb/adodb.inc.php";
	$conexion=NewADOConnection("mysqli");
	$conexion->Connect("localhost","root","","citychooser");
	return $conexion;
}
?>