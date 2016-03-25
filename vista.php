<?php
function mostrarCityAzar($ciudad){
	echo "<h1 id='cityAzar'> $ciudad </h1>";
}

function insertaHtml(){
	echo"<!DOCTYPE html>
			<html lang='en'>
			<head>
    			<meta charset='UTF-8'>
    			<title>City Chooser</title>
			</head>
			<link rel='stylesheet' href='main.css'>
			<script src='jquery.js'></script>
			<nav></nav>";
}

function mostrarBoton(){
	echo"<form id='form1' action='seleccionarCiudad.php'>
	<input type='submit' id='boton' name='boton' value='SELECT CITY'>
	</form>";
}
?>