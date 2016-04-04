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
			<span id='espacio'></span>
			<header>
				<section id='principal'>
					<img src=''>
					<nav>
						<ul>
							<li><a href='index.php'>Inicio</a></li>
							<li><a href='opiniones.php'>Opiniones</a></li>
							<li><a href='Blog.php'>Blog</a></li>
							<li><a href='agencia.php'>Agencia</a></li>
							<li><a href='contacto.php'>Contacto</a></li>
						</ul>
					</nav>
				</section>
				<section id='login'>
					<form id='loginUsu'>
						<input type='text' placeholder='Email' name='email' required><br>
						<input type='password' placeholder='Password' name='password' required><br>
						<input type='submit' value='entrar'>
					</form>
				</section>
			</header>";
}

function mostrarBoton(){
	echo"<form id='form1' action='seleccionarCiudad.php'>
	<input type='submit' id='boton' name='boton' value='SELECT CITY'>
	</form>";
}
function mostrarPais($pais) {
		echo "<h2>".$pais."</h2><br>";
}
function mostrarCityMaps($ciudad, $pais){
	echo "<section id='googleMaps'>";
	echo"<a href='https://www.google.es/maps/search/".$ciudad.",+".$pais."' target='blanck'>Ver mapa</a>";
	//echo "<iframe width='560' height='315' src='https://www.google.es/maps/search/".$ciudad.",+".$pais."' frameborder='0' allowfullscreen></iframe></article>";
	echo "</section>";

}
function mostrarRutaMaps($ciudad, $ciudad2, $ciudad3, $pais){
		echo "<section id='googleMaps'>";
		echo "<a href='https://www.google.es/maps/dir/".$ciudad3.",+".$pais."/".$ciudad2.",+".$pais."/".$ciudad.",+".$pais."' target='blanck'>Buscar ruta</a>";
		echo $ciudad.", ".$ciudad2.", ".$ciudad3;
		//echo "<article><iframe width='560' height='315' src='https://www.google.es/maps/dir/".$ciudad3.",+".$pais."/".$ciudad2.",+".$pais."/".$ciudad.",+".$pais."' frameborder='0' allowfullscreen></iframe></article>";
		echo "</section>";
}
?>