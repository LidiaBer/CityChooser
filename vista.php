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
			<link rel='stylesheet' media='screen and (max-width:400px)' href='main_small.css'>
    <link rel='stylesheet' media='screen and (min-width:401px) and (max-width:550px)' href='main_medium2.css'>
    <link rel='stylesheet' media='screen and (min-width:551px) and (max-width:900px)' href='main_medium.css'>
    <link rel='stylesheet' media='screen and (min-width:901px)' href='main_large.css'>
			<script src='jquery.js'></script>
			<script  src='auxiliar.js'></script>
			<header>
					<nav>
						<ul>
							<li id='enlaceIndex'><a href='index.php'>Inicio</a></li>
							<li><a href='opiniones.php'>Opiniones</a></li>
							<li><a href='Blog.php'>Blog</a></li>
							<li><a href='agencia.php'>Agencia</a></li>
							<li><a href='contacto.php'>Contacto</a></li>
						</ul>
					</nav>
				<section id='login'>
					<a href='entrar.php'>Entrar</a>
					<a href='registrar.php'>Reg&iacute;strate</a>
				</section>
			</header>";
}
function mostrarLogin() {
	echo"<form id='loginUsu'>
						<input type='text' placeholder='Email' name='email' required><br>
						<input type='password' placeholder='Password' name='password' required><br>
						<input type='submit' value='entrar'>
					</form>";
}
function mostrarBoton(){
	echo"<form id='form1' action='seleccionarCiudad.php'>
	<input type='submit' id='boton' name='boton' value='SELECT CITY'>
	</form>";
}

//Para mostrar una ciudad de la zona.
function mostrarBotonZona(){
	echo"<form id='form1' action='ciudadAzarZona.php'>
	<input type='submit' id='boton' name='boton' value='SELECT CITY'>
	</form>";
}

function mostrarPais($pais) {
		echo "<h2>".$pais."</h2><br>";
}
function mostrarCityMaps($ciudad, $pais){

	echo "<section id='googleMaps'><article id='mapa'>";
	echo "<input type='button' value='Ver en mapa' onclick='abrirVentana(ciudad,pais)'>";
	//echo"<a href='https://www.google.es/maps/search/".$ciudad.",+".$pais."' target='blanck'>Ver mapa</a>";
?>
	<script type="text/javascript" >
		ciudad="<?php echo $ciudad; ?>";
		pais="<?php echo $pais; ?>";
	</script>
		<iframe width='560' height='315' src='"https://maps.google.es/maps/search/"+ciudad+"+"+pais' frameborder='0' allowfullscreen></iframe>
		</article>
<?php
	/*echo "<iframe width='560' height='315' src='https://maps.google.es/maps/embed/search/'"+ciudad+'"'+'"'+pais' frameborder='0' allowfullscreen></iframe></article>";
	echo "</section>";*/

}
function mostrarRutaMaps($ciudad, $ciudad2, $ciudad3, $pais){
		echo "<article id='ruta'>";
		echo "<input type='button' value='Buscar ruta' onclick='abrirVentanaRuta(ciudad,ciudad2,ciudad3,pais)'>";
		echo $ciudad.", ".$ciudad2.", ".$ciudad3;
?>
<script type="text/javascript" >
	ciudad="<?php echo $ciudad; ?>";
	ciudad2="<?php echo $ciudad2; ?>";
	ciudad3="<?php echo $ciudad3; ?>";
	pais="<?php echo $pais; ?>";
</script>
<iframe width='560' height='315' src='"https://www.google.es/maps/dir/"+ciudad3+",+"+pais+"/"+ciudad2+",+"+pais+"/"+ciudad+",+"+pais"' frameborder='0' allowfullscreen></iframe>
</article></section>
<?php
		//echo "<a href='https://www.google.es/maps/dir/".$ciudad3.",+".$pais."/".$ciudad2.",+".$pais."/".$ciudad.",+".$pais."' target='blanck'>Buscar ruta</a>";

		//echo "<article><iframe width='560' height='315' src='https://www.google.es/maps/dir/".$ciudad3.",+".$pais."/".$ciudad2.",+".$pais."/".$ciudad.",+".$pais."' frameborder='0' allowfullscreen></iframe></article>";
		//echo "</section>";
}

function mostrarOpcionesZona(){
	
		echo "<section id='mostrarOpcionesZona'>
							<article id='europa'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=EUR'><p>EUROPA</p></a></article>
							<article id='africa'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=ÁF'><p>&Aacute;FRICA</p></a></article>
							<article id='esteAsiaPacifico'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=EST'><p>ESTE DE<br>ASIA Y<br> PAC&Iacute;FICO</p></a></article>
							<article id='surAsia'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=SUR'><p>SUR<br> DE<br>ASIA</p></a></article>
							<article id='norteAmerica'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=NOR'><p>NORTE<br>AM&Eacute;RICA</p></a></article>
							<article id='latinoAmerica'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=LAT'><p>LATINO<br>AM&Eacute;RICA</p></a></article>
							<article id='orienteMedio'><a href='ciudadAzarZona.php?ZONA_CONTINENTE=ORI'><p>ORIENTE<br>MEDIO</p></a></article>
						</section>";
}

function mostrarVideos($ciudad,$pais) {
	//echo "<a href='https://www.youtube.com/results?search_query=".$ciudad.",+".$pais." turismo'>Ver videos</a>";
	//echo "<iframe width='560' height='315' src='https://www.youtube.com/results?search_query=%".$ciudad."%,+%".$pais."%' frameborder='0' allowfullscreen></iframe>";
	echo "<input type='button' value='Ver videos' onClick='abrirVentanaVideo(ciudad,pais)'>"
?>
	<script type="text/javascript" >
		ciudad="<?php echo $ciudad; ?>";
		pais="<?php echo $pais; ?>";
	</script>
		<iframe width='560' height='315' src='"www.youtube.com/results?search_query=%"+ciudad+"%,+%"+pais+"%turismo"' frameborder='0' allowfullscreen></iframe>
		</article>
<?php
}

?>