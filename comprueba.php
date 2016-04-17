<?php
include_once "modelo/modeloB.php";
include_once "vista/vistaB.php";
	$user=$_POST['user'];
	$password=$_POST['password'];
	comprueba($user,$password);
	cerrarHtml();
?>