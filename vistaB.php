<?php
function insertaHtml(){
	echo"<!DOCTYPE html>
			<html lang='en'>
			<head>
    			<meta charset='UTF-8'>
    			<link rel='stylesheet' href='main2.css'>
    <link rel='stylesheet' media='screen and (max-width:400px)' href='main2_small.css'>
    <link rel='stylesheet' media='screen and (min-width:401px) and (max-width:800px)' href='main2_medium.css'>
    <link rel='stylesheet' media='screen and (min-width:801px)' href='main2_large.css'>
    			<title>CityChooser Administrador</title>
			</head>
			<body>
			<nav>
				<ul>
					<li><a href='index.php'>Inicio</a></li>
					<li><a href='ciudad.php'>Ciudad</a></li>
					<li><a href='tipo.php'>Tipo</a></li>
					<li><a href='usuario.php'>Usuario</a></li>
					<li><a href='opiniones.php'>Opiniones</a></li>
					<li><a href='blog.php'>Blog</a></li>
					<li><a href='agencia.php'>Agencia</a></li>
				</ul>
			</nav>";
}
function asideCiudad() {
	echo "<section><aside id='asideCiudad'>";
	echo "<a href='Ciudad.php'>Insertar nueva ciudad</a><br>";
	echo "<a href='ciudadNombre.php'>Buscar ciudad por nombre</a><br>";
	echo "<a href='ciudadPais.php'>Buscar ciudad por país</a><br>";
	echo "<a href='ciudadZona.php'>Buscar ciudad por zona/continente</a><br>";
	echo "</aside>";
}
function nombreCiudad(){
	echo"<section id='seleccione'><h5>Escriba una ciudad</h5>";
	echo "<form id='buscarCiudad' method='POST' action=''>
	<input type='text' name='ciudad' placeholder='Nombre de la ciudad'>
	<input type='submit' value='Buscar'>
	</form>";
	echo "</section>";
	if(isset($_POST['ciudad'])) {
		$ciudad=$_POST['ciudad'];
		return $ciudad;
	}
}
function nombrePais(){
	echo"<section id='seleccione'><h5>Escriba un pa&iacute;s</h5>";
	echo "<form id='buscarCiudad' method='POST' action=''>
	<input type='text' name='pais' placeholder='Nombre del país'>
	<input type='submit' value='Buscar'>
	</form>";
	echo "</section>";
	if(isset($_POST['pais'])) {
		$ciudad=$_POST['pais'];
		return $ciudad;
	}
}
function nombreZona(){
		echo"<section id='seleccione'><h5>Seleccione una zona/continente</h5>";
	echo "<form id='buscarCiudad' method='POST' action=''>
	<select name='zona'>
			<option>EUROPA</option>
			<option>NORTE AM&Eacute;RICA</option>
			<option>LATINO AM&Eacute;RICA</option>
			<option>&Aacute;FRICA</option>
			<option>ORIENTE MEDIO</option>
			<option>ESTE DE ASIA Y PAC&Iacute;FICO</option>
			<option>SUR DE ASIA</option>
	</select>
	<input type='submit' value='Buscar'>
	</form>";
	echo "</section>";
	if(isset($_POST['zona'])) {
		$continente=$_POST['zona'];
		$zona=substr($continente, 0, 3);
		return $zona;
	}
}

function mostrarCiudades($datos) {
	echo "<article id='mostrarCiudades'>";
	echo "<h4>Existen ".count($datos)." ciudades</h1>";
	echo "<table><th><td>NOMBRE CIUDAD</td><td>PAIS</td><td>ZONA-CONTINENTE</td><td>ACTIVO</td><td>MODIFICAR</td><td>ELIMINAR</td></th>";
	foreach($datos as $dato){
		$id_ciudad=$dato['ID_CIUDAD'];
		if($dato['ACTIVO']==1) {
			$activo="ACTIVA";
		}else {
			$activo="INACTIVA";
		}
		$continente=$dato['ZONA_CONTINENTE'];
		Switch ($continente) {
			case 'EUR':
				$zona="EUROPA";
				break;
			case 'NOR':
				$zona="NORTE AMÉRICA";
				break;
			case 'LAT':
				$zona="LATINO AMÉRICA";
				break;
			case 'ÁF':
				$zona="ÁFRICA";
				break;
			case 'ORI':
				$zona="ORIENTE MEDIO";
				break;
			case 'EST':
				$zona="ESTE DE ASIA Y PACÍFICO";
				break;
			case 'SUR':
				$zona="SUR DE ASIA";
				break;
			Default:
				break;
		}
		echo"<tr>
		<td>".$id_ciudad."</td>
		<td>".$dato['NOMBRE_CIUDAD']."</td>
		<td>".$dato['PAIS']."</td>
		<td>".$zona."</td>
		<td>".$activo."</td>
		<td><a href='modificar.php?ID_CIUDAD=".$id_ciudad."'>Modificar</a></td>
		<td><a href='eliminar.php?ID_CIUDAD=".$id_ciudad."'>Eliminar</a></td>
		</tr>";
	}
	echo "</table></article></section>";
}
function nuevaCiudad(){
	echo"<form id='nuevaCiudad' method='POST' action=''>
	<table>
		<tr><td><input type='text' name='ciudad' placeholder='Nombre de la ciudad' required></td></tr>
		<tr><td><input type='text' name='pais' placeholder='Pais' required></td></tr>
		<tr><td><select name='zona' id='zona' required>
			<option>EUROPA</option>
			<option>NORTE AM&Eacute;RICA</option>
			<option>LATINO AM&Eacute;RICA</option>
			<option>&Aacute;FRICA</option>
			<option>ORIENTE MEDIO</option>
			<option>ESTE DE ASIA Y PAC&Iacute;FICO</option>
			<option>SUR DE ASIA</option>
		</select></td></tr>
		<tr><td>Activa<select name='activo' id='activo' required>
			<option>SI</option>
			<option>NO</option>
			</select></td></tr>
		<tr><td><input type='submit' value='Guardar'>
		</form>";
	if(isset($_POST['ciudad'])) {
		$datos['NOMBRE_CIUDAD']=$_POST['ciudad'];
		$datos['PAIS']=$_POST['pais'];
		$datos['ZONA_CONTINENTE']=$_POST['zona'];
		$datos['ACTIVO']=$_POST['activo'];
	return $datos;
	}
}
function mostrarModificaCiudad($datos){
		$ciudad=$datos['NOMBRE_CIUDAD'];
		$pais=$datos['PAIS'];
	echo"<form id='modificaCiudad' method='POST' action=''>
	<table>
		<tr><td>Nombre de la ciudad</td><td><input type='text' name='ciudad' value=".$ciudad."   required></td></tr>
		<tr><td>Pais</td><td><input type='text' name='pais' value=".$pais." required></td></tr>
		<tr><td>Zona/Continente</td><td><select name='zona' id='zona' required>
			<option>EUROPA</option>
			<option>NORTE AM&Eacute;RICA</option>
			<option>LATINO AM&Eacute;RICA</option>
			<option>&Aacute;FRICA</option>
			<option>ORIENTE MEDIO</option>
			<option>ESTE DE ASIA Y PAC&Iacute;FICO</option>
			<option>SUR DE ASIA</option>
		</select></td></tr>
		<tr><td>Activa</td><td><select name='activo' id='activo' required>
			<option>SI</option>
			<option>NO</option>
			</select></td></tr>
		<tr><td><input type='submit' value='Guardar'>
		</form>";
	if(isset($_POST['ciudad'])) {
		$datos['NOMBRE_CIUDAD']=$_POST['ciudad'];
		$datos['PAIS']=$_POST['pais'];
		$datos['ZONA_CONTINENTE']=$_POST['zona'];
		$datos['ACTIVO']=$_POST['activo'];
	return $datos;
	}
}
?>