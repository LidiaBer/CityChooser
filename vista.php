<?php
function mostrarCityAzar($ciudad){
	echo "<h1 id='cityAzar'> $ciudad </h1>";
}

function insertaHtml(){
	echo"<!DOCTYPE html>
			<html lang='en'>
			<head>
			<link rel='shortcut icon' type='image/x-icon' href='imagenes/CityChooser-icon.gif'/>
    			<meta charset='UTF-8'>
    			<title>CityChooser</title>
			</head>
			
			<link rel='stylesheet' href='main.css'>
			<script src='jquery.js'></script>
			<span id='espacio'></span>
			<header>
				<section id='principal'>
					<img src=''>
					<nav>
						<ul>
							<li id='enlaceIndex'><a href='index.php'>Inicio</a></li>
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
function mostrarBotonZona(){
	echo"<form id='form1' action='ciudadAzarZona.php'>
	<input type='submit' id='boton' name='boton' value='SELECT CITY' onClick='recargar()'>
	</form>";
}

function mostrarPais($pais) {
		echo "<h2>".$pais."</h2><br>";
}
function mostrarCityMaps($ciudad, $pais){
	//echo "<section id='googleMaps'>";
	echo"<a href='https://www.google.es/maps/search/".$ciudad.",+".$pais."' target='blanck'>Ver mapa</a>";
	echo "<iframe width='560' height='315' src='https://www.google.es/' frameborder='0' allowfullscreen></iframe></article>";
	//echo "<iframe width='560' height='315' src='https://maps.google.es/maps/search/".$ciudad.",+".$pais."' frameborder='0' allowfullscreen></iframe></article>";
	//echo "</section>";https://www.google.es/maps/place/

}
function mostrarRutaMaps($ciudad, $ciudad2, $ciudad3, $pais){
		//echo "<section id='googleMaps'>";
		echo "<a href='https://www.google.es/maps/dir/".$ciudad3.",+".$pais."/".$ciudad2.",+".$pais."/".$ciudad.",+".$pais."' target='blanck'>Buscar ruta</a>";
		echo $ciudad.", ".$ciudad2.", ".$ciudad3;

		//echo "<article><iframe width='560' height='315' src='https://www.google.es/maps/dir/".$ciudad3.",+".$pais."/".$ciudad2.",+".$pais."/".$ciudad.",+".$pais."' frameborder='0' allowfullscreen></iframe></article>";
		//echo "</section>";
}

function mostrarOpcionesZona(){
	
		echo "<section id='mostrarOpcionesZona'>
							<article id='europa'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=EUR'><p>EUROPA</p></a></article>
							<article id='africa'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=ÁF'><p>&Aacute;FRICA</p></a></article>
							<article id='esteAsiaPacifico'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=EST'><p>ESTE DE ASIA Y PAC&Iacute;FICO</p></a></article>
							<article id='surAsia'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=SUR'><p>SUR DE ASIA</p></a></article>
							<article id='norteAmerica'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=NOR'><p>NORTE AM&Eacute;RICA</p></a></article>
							<article id='latinoAmerica'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=LAT'><p>LATINO AM&Eacute;RICA</p></a></article>
							<article id='orienteMedio'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=ORI'><p>ORIENTE MEDIO</p></a></article>
						</section>";
}
function mostrarVideos($ciudad,$pais) {
	echo "<a href='https://www.youtube.com/results?search_query=".$ciudad.",+".$pais." turismo'>Ver videos</a>";
	echo "<iframe width='560' height='315' src='https://www.youtube.com/results?search_query=%".$ciudad."%,+%".$pais."%' frameborder='0' allowfullscreen></iframe>";
}

?>