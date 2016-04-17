<?php
/**
*@author Lidia Berzosa Pelegrín
*@copyright 2016
*/

/*
*Inserta el código html.
*/
function insertaHtml(){
	echo"<!DOCTYPE html>
			<html lang='en'>
			<head>
    			<meta charset='UTF-8'>
    			<link rel='stylesheet' href='main2.css'>
    <link rel='stylesheet' media='screen and (max-width:500px)' href='main2_small.css'>
    <link rel='stylesheet' media='screen and (min-width:501px) and (max-width:800px)' href='main2_medium.css'>
    <link rel='stylesheet' media='screen and (min-width:801px)' href='main2_large.css'>
    			<title>CityChooser Admin</title>
			</head>
			<body>
			<nav>
				<ul>

					<li><a href='ciudad.php'>Ciudad</a></li>
					<li><a href='tipo.php'>Tipo</a></li>
					<li><a href='usuario.php'>Usuario</a></li>
					<li><a href='opiniones.php'>Opiniones</a></li>
					<li><a href='agencia.php'>Agencia</a></li>
				</ul>
			</nav>";
}

/*
*Inserta el código html sin navegador para la página de inicio.
*/
function insertaHtmlSinNav(){
	echo"<!DOCTYPE html>
			<html lang='en'>
			<head>
    			<meta charset='UTF-8'>
    			<link rel='stylesheet' href='main2.css'>
    <link rel='stylesheet' media='screen and (max-width:500px)' href='main2_small.css'>
    <link rel='stylesheet' media='screen and (min-width:501px) and (max-width:800px)' href='main2_medium.css'>
    <link rel='stylesheet' media='screen and (min-width:801px)' href='main2_large.css'>
    			<title>CityChooser Admin</title>
			</head>
			<body>";
}


/*
*Cierra el código html.
*/
function cerrarHtml() {
	echo "</body></html>";
}

/*
*Inserta el código html.
*/
function mostrarIniciaSesion(){
	echo "<section id='inicia'><br><br>
			<form id='sesion' method='POST' action='comprueba.php'>
			<table>
			<tr><td><input type='text' placeholder='User' name='user'></td></tr>
			<tr><td><input type='password' placeholder='Password' name='password'></td></tr>
			<tr><td><input type='submit' value='Entrar'></td></tr>
			</table>
			</form>
		</section>";
}

/*
*Muestra el logo de CityChooser.
*/
function mostrarLogo(){
	echo"<section id='corazon'>
			<img src='../imagenes/logoCityChooser.gif' width='50%'>
			</section>";
}

/*
*Muestra la imagen de la tierra con forma de corazón.
*/
function mostrarCorazon(){
	echo"<section id='corazon'>
			<img src='../imagenes/tierra_de_corazon.jpg' width='50%'>
			</section>";
}



/*
------------------------------------------------------------------------------------------------------------------------
Métodos para CIUDAD
------------------------------------------------------------------------------------------------------------------------
*/

/*
*Inserta el aside con el submenú de ciudad.
*/
function asideCiudad() {
	echo "<section id='main'><aside>";
	echo "<a href='Ciudad.php'>Insertar nueva ciudad</a>";
	echo "<a href='ciudadId.php'>Buscar ciudad por ID</a>";
	echo "<a href='ciudadNombre.php'>Buscar ciudad por nombre</a>";
	echo "<a href='ciudadPais.php'>Buscar ciudad por país</a>";
	echo "<a href='ciudadZona.php'>Buscar ciudad por zona/continente</a>";
	echo "<br><h4><a href='desconectar.php'>Desconectar</a></h4>";
	echo "</aside>";
}

/**
*Muestra un formulario para insertar un ID. En este caso el dato debe ser exacto.
*
*@return integer $id_ciudad Número de identificación de la ciudad.
*/
function nombreId(){
	echo"<section id='right'><article>	<table><tr><td><h5>Escriba un ID</h5></td>";
	echo "<form id='buscarCiudad' method='POST' action=''>
	<td><input type='number' name='ID_CIUDAD' placeholder='N&uacute;mero de ID'></td><td>
	<input type='submit' value='Buscar'></td>
	</tr></table>
	</form><br>";
	echo "</article>";
	if(isset($_POST['ID_CIUDAD'])) {
		$id_ciudad=$_POST['ID_CIUDAD'];
		return $id_ciudad;
	}
}

/**
*Muestra un formulario para insertar el nombre o parte del nombre de una ciudad.
*
*@return string $ciudad Parte del nombre o nombre completo de una ciudad.
*/
function nombreCiudad(){
	echo"<section id='right'><article>	<table><tr><td><h5>Escriba una ciudad</h5></td>";
	echo "<form id='buscarCiudad' method='POST' action=''>
	<td><input type='text' name='ciudad' placeholder='Nombre de la ciudad'></td><td>
	<input type='submit' value='Buscar'></td>
	</tr></table>
	</form><br>";
	echo "</article>";
	if(isset($_POST['ciudad'])) {
		$ciudad=$_POST['ciudad'];
		return $ciudad;
	}
}

/**
*Muestra un formulario para insertar el nombre o parte del nombre de un país.
*
*@return string $ciudad Parte del nombre o nombre completo de un país.
*/
function nombrePais(){
	echo"<section id='right'><article><table><tr><td><h5>Escriba un pa&iacute;s</h5></td>";
	echo "<form id='buscarCiudad' method='POST' action=''>
	<td><input type='text' name='pais' placeholder='Nombre del país'></td><td>
	<input type='submit' value='Buscar'></td>
	</tr></table>
	</form><br>";
	echo "</article>";
	if(isset($_POST['pais'])) {
		$ciudad=$_POST['pais'];
		return $ciudad;
	}
}

/**
*Muestra un select con las distintas opciones de zona-continente.
*En la base de datos ZONA-CONTINENTE corresponde a un CHAR de tres dígitos.
*Tras elegir la zona se realiza un substring con las tres primeras letras para que coincida con la base de datos.
*
*@return string $zona Las tres primeras letras de la zona-continente.
*/
function nombreZona(){
		echo"<section id='right'><article><h5><table><tr><td>Seleccione una zona/continente</td></h5>";
	echo "<form id='buscarCiudad' method='POST' action=''>
	<td><select name='zona'>
			<option>EUROPA</option>
			<option>NORTE AM&Eacute;RICA</option>
			<option>LATINO AM&Eacute;RICA</option>
			<option>&Aacute;FRICA</option>
			<option>ORIENTE MEDIO</option>
			<option>ESTE DE ASIA Y PAC&Iacute;FICO</option>
			<option>SUR DE ASIA</option>
	</select></td><td>
	<input type='submit' value='Buscar'></td>
	</tr></table>
	</form><br>";
	echo "</article>";
	if(isset($_POST['zona'])) {
		$continente=$_POST['zona'];
		$zona=substr($continente, 0, 3);
		return $zona;
	}
}

/**
*Muestra un select con las distintos datos por los que ordenar el listado.
*Por defecto ordena la lista por el ID_CIUDAD.
*Nos lleva a la página 'ordernarCiudad.php'.
*/
function mostrarOrdenar(){
	echo "<article><form method='POST' action='ordenarCiudad.php' id='ordenar'>
	<table id='ordena'><tr><td>Ordenar por nombre de: </td>
	<td><select name='ordena'>
	<option value='ID_CIUDAD'>-Selecione-</option>
	<option value='NOMBRE_CIUDAD'>Ciudad</option>
	<option value='PAIS'>Pa&iacute;s</option>
	<option value='ZONA_CONTINENTE'>Zona/Continente</option>
	</select></td>
	<td><input type='submit' value='Ordenar'></td></tr></table>";
}

/**
*Muestra un select con las distintos datos por los que ordenar el listado.
*Aparece cuando se realiza una búsqueda por el nombre de la ciudad.
*Nos lleva a la página 'ordernarCiudadNombre.php'.
*/
function mostrarOrdenarNombre(){
	echo "<article><form method='POST' action='ordenarCiudadNombre.php' id='ordenar'>
	<table id='ordena'><tr><td>Ordenar por nombre de: </td>
	<td><select name='ordena'>
	<option value='ID_CIUDAD'>-Selecione-</option>
	<option value='NOMBRE_CIUDAD'>Ciudad</option>
	<option value='PAIS'>Pa&iacute;s</option>
	<option value='ZONA_CONTINENTE'>Zona/Continente</option>
	</select></td>
	<td><input type='submit' value='Ordenar'></td></tr></table>";
}

/**
*Muestra un select con las distintos datos por los que ordenar el listado.
*Aparece cuando se realiza una búsqueda por el nombre del país.
*Nos lleva a la página 'ordernarCiudadPais.php'.
*/
function mostrarOrdenarPais(){
	echo "<article><form method='POST' action='ordenarCiudadPais.php' id='ordenar'>
	<table id='ordena'><tr><td>Ordenar por nombre de: </td>
	<td><select name='ordena'>
	<option value='ID_CIUDAD'>-Selecione-</option>
	<option value='NOMBRE_CIUDAD'>Ciudad</option>
	<option value='PAIS'>Pa&iacute;s</option>
	<option value='ZONA_CONTINENTE'>Zona/Continente</option>
	</select></td>
	<td><input type='submit' value='Ordenar'></td></tr></table>";
}

/**
*Muestra un select con las distintos datos por los que ordenar el listado.
*Aparece cuando se realiza una búsqueda por el nombre de la zona-continente.
*Nos lleva a la página 'ordernarCiudadZona.php'.
*/
function mostrarOrdenarZona(){
	echo "<article><form method='POST' action='ordenarCiudadZona.php' id='ordenar'>
	<table><tr><td>Ordenar por nombre de: </td>
	<td><select name='ordena'>
	<option value='ID_CIUDAD'>-Selecione-</option>
	<option value='NOMBRE_CIUDAD'>Ciudad</option>
	<option value='PAIS'>Pa&iacute;s</option>
	</select></td>
	<td><input type='submit' value='Ordenar'></td></tr></table>";
}

/**
*Muestra un listado con todos los datos de las ciudades creada a partir de los parámetros elegidos.
*
*@param array $datos Todos los datos de las ciudades.
*/
function mostrarCiudades($datos) {
	echo "<article>";
	echo "<h4>Existen ".count($datos)." ciudades</h4><br>";
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
	echo "</table></article></section></section";
}

/**
*Muestra una ciudad.
*
*@param array $datos Todos los datos de una ciudad.
*/
function mostrarCiudad($datos) {
	echo "<article>";
	echo "<h4>Existe 1 ciudad con el ID ".$datos['ID_CIUDAD']."</h4><br>";
	echo "<table><th><td>NOMBRE CIUDAD</td><td>PAIS</td><td>ZONA-CONTINENTE</td><td>ACTIVO</td><td>MODIFICAR</td><td>ELIMINAR</td></th>";
		$id_ciudad=$datos['ID_CIUDAD'];
		if($datos['ACTIVO']==1) {
			$activo="ACTIVA";
		}else {
			$activo="INACTIVA";
		}
			$zona="";
		$continente=$datos['ZONA_CONTINENTE'];
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
		<td>".$datos['NOMBRE_CIUDAD']."</td>
		<td>".$datos['PAIS']."</td>
		<td>".$zona."</td>
		<td>".$activo."</td>
		<td><a href='modificar.php?ID_CIUDAD=".$id_ciudad."'>Modificar</a></td>
		<td><a href='eliminar.php?ID_CIUDAD=".$id_ciudad."'>Eliminar</a></td>
		</tr>";
		echo "</table></article></section></section";
	}
	
/**
*Muestra un formulario para insertar los datos de una nueva ciudad.
*
*@return array $datos Todos los datos de una ciudad.
*/
function nuevaCiudad(){
	echo"<section id='right'><article><form id='nuevaCiudad' method='POST' action=''>
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
		<tr><td><input type='submit' value='Guardar'></td><tr>
		
		</form></table></article><br><br>";
	if(isset($_POST['ciudad'])) {
		$datos['NOMBRE_CIUDAD']=$_POST['ciudad'];
		$datos['PAIS']=$_POST['pais'];
		$datos['ZONA_CONTINENTE']=$_POST['zona'];
		$datos['ACTIVO']=$_POST['activo'];
	return $datos;
	}
}

/**
*Muestra el formulario para modificar la ciudad con los datos anteriores.
*
*@param array $datos Todos los datos de una ciudad.
*@return array $datos Todos los datos de una ciudad.
*/
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

/*
*Muestra un mensaje de confirmación o cancelación de la eliminación de una ciudad.
*/
function consultaEliminarCiudad($id_ciudad){
	echo "<section id='cancela'><article>
	<h3>¿Está seguro que desea eliminar esta ciudad definitivamente?</h3>
	<table id='cancelar'><tr>
	<td><a href='eliminarDefinitivo.php'>Aceptar</a></td>
	<td><a href='cancelar.php'>Cancelar</a></td></tr></table>";
}


/*
*------------------------------------------------------------------------------------------------------------------------
*Métodos para TIPO
*------------------------------------------------------------------------------------------------------------------------
*/


/*
*------------------------------------------------------------------------------------------------------------------------
*Métodos para USUARIO
*------------------------------------------------------------------------------------------------------------------------
*/


/*
*------------------------------------------------------------------------------------------------------------------------
*Métodos para OPINIONES
*------------------------------------------------------------------------------------------------------------------------
*/


/*
------------------------------------------------------------------------------------------------------------------------
Métodos para AGENCIA
------------------------------------------------------------------------------------------------------------------------
*/
?>