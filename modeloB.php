<?php
/**
*@author Lidia Berzosa Pelegrín
*@copyright 2016
*/

include_once "../modelo/conexion.php";

/**
Comprueba usuario y contraseña del administrador.
*
*@param String 
*/
function comprueba($user,$password){	
	if($user=='admin' && $password=='admin') {
		session_start();
		$_SESSION['login']=$user;
		header("Location:ciudad.php");
	}else {
?>
		<script type="text/javascript" >
			alert("Email y/o password incorrectos");
			location.replace("index.php");
		</script>
<?php
	}
}

/*
*------------------------------------------------------------------------------------------------------------------------
*Métodos para CIUDAD
*------------------------------------------------------------------------------------------------------------------------
*/


/**
*Consigue una ciudad por su ID. En este caso el dato debe ser exacto.
*
*@param integer $id_ciudad Número de identificación de la ciudad.
*@return array $datos Ciudad con ese ID.
*/
function getCiudad($id_ciudad){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE ID_CIUDAD='$id_ciudad'";
	$datos=$conexion->getRow($sql);
	return $datos;
}

/**
*Consigue TODAS LAS CIUDADES de cualquier parte del mundo.
*
*@return array $datos Todas las ciudades de nuestra base de datos.
*/
function getCiudades(){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Consigue TODAS LAS CIUDADES de cualquier parte del mundo ORDENADAS por el dato que seleccionemos (ciudad, país o zona-continente).
*
*@param string $dato Parámetro por el que vamos a ordenar el listado.
*@return array $datos Todas las ciudades de nuestra base de datos ordenadas.
*/
function getCiudadesOrdenadas($dato){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD ORDER BY $dato";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Consigue todas las ciudades QUE CONTENGAN en el NOMBRE el texto que introduzcamos.
*
*@param string $nombre Parte del nombre o el nombre de la ciudad.
*@return array $datos Ciudades con ese nombre o que contengan ese nombre.
*/
function getCiudadesNombre($nombre){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE NOMBRE_CIUDAD LIKE '%$nombre%'";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Consigue todas las ciudades QUE CONTENGAN en el NOMBRE el texto que introduzcamos ORDENADAS por el parámetro que seleccionemos (ciudad, país o zona-continente).
*
*@param string $nombre Parte del nombre o el nombre de la ciudad.
*@param string $dato Parámetro por el que vamos a ordenar el listado.
*@return array $datos Ciudades con ese nombre o que contengan ese nombre ordenadas.
*/
function getCiudadesNombreOrdenadas($nombre,$dato){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE NOMBRE_CIUDAD LIKE '%$nombre%' ORDER BY $dato";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Consigue todas las ciudades cuyo país CONTENGA en el NOMBRE el texto que introduzcamos.
*
*@param string $nombre Parte del nombre o el nombre del pais.
*@return array $datos Ciudades de país/es encontrados.
*/
function getCiudadesPais($nombre){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE PAIS LIKE '%$nombre%'";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Consigue todas las ciudades cuyo país CONTENGA en el NOMBRE el texto que introduzcamos, ORDENADAS por el parámetro que seleccionemos (ciudad, país o zona-continente).
*
*@param string $nombre  Parte del nombre o el nombre del país.
*@param string $dato Parámetro por el que vamos a ordenar el listado.
*@return array $datos Ciudades de ese país/es ordenadas.
*/
function getCiudadesPaisOrdenadas($nombre,$dato){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE PAIS LIKE '%$nombre%' ORDER BY $dato";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Consigue todas las ciudades que PERTENEZCAN a la ZONA-CONTINENTE seleccionada.
*
*@param string $nombre Zona-continente seleccionada.
*@return array $datos Ciudades de esa zona-continente.
*/
function getCiudadesZona($nombre){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE ZONA_CONTINENTE='$nombre'";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Consigue todas las ciudades que PERTENEZCAN a la ZONA-CONTINENTE seleccionada, ORDENADAS por el parámetro que seleccionemos (ciudad o país).
*En este caso SOLO PODEMOS SELECCIONAR UNA zona-continente, ya que elegimos entre las opciones que muestra.
*Por tanto, SE OMITE el parámetro ZONA-CONTINENTE de las opciones para ordenar, ya que en el listado aparecerá una sola zona-continente.
*
*@param string $nombre Zona-continente.
*@param string $dato Parámetro por el que vamos a ordenar el listado.
*@return array $datos Ciudades de esa zona-continente ordenadas.
*/
function getCiudadesZonaOrdenadas($nombre,$dato){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE ZONA_CONTINENTE='$nombre' ORDER BY $dato";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}

/**
*Inserta una nueva ciudad. Comprueba que no exista previamente.
*
*@param array $datos Datos de la ciudad que hemos insertado mediante formulario.
*/
function insertarCiudad($datos){
	$conexion=conecta();
	$ciudad=$datos['NOMBRE_CIUDAD'];
	$pais=$datos['PAIS'];
	$zona=$datos['ZONA_CONTINENTE'];
	
	if($datos['ACTIVO']=="SI") {
			$activo=1;
	}else {
			$activo=0;
	}
	
	$sql="SELECT * FROM CIUDAD WHERE NOMBRE_CIUDAD='$ciudad' AND PAIS='$pais'";
	$datos=$conexion->getRow($sql);
	
	if(count($datos)>0) {
?>
		<script type="text/javascript" >
			alert("Esta CIUDAD ya existe para ese PAÍS.");
			window.history.back();
		</script>
<?php
	}else {
		$sql2="INSERT INTO CIUDAD VALUES (NULL,'$ciudad','$pais','$zona','$activo')";
		$conexion->Execute($sql2);
		?>
		<script type="text/javascript" >
			alert("CIUDAD insertada correctamente.");
			window.history.back();
		</script>
<?php
	}
}

/**
*Modifica los datos de una ciudad.
*
*@param array $datos Datos ya modificados mediante formulario
*/
function modificaCiudad($datos){
	$conexion=conecta();
	foreach ($datos as $dato){
		$id_ciudad=$datos['ID_CIUDAD'];
		$nombre=$datos['NOMBRE_CIUDAD'];
		$pais=$datos['PAIS'];
		$zona=$datos['ZONA_CONTINENTE'];
		
		if($datos['ACTIVO']=="SI") {
				$activo=1;
		}else {
				$activo=0;
		}
	}
	$sql="UPDATE ciudad SET NOMBRE_CIUDAD='$nombre', PAIS='$pais', ZONA_CONTINENTE='$zona', ACTIVO=$activo WHERE ID_CIUDAD=$id_ciudad";
$conexion->Execute($sql);

?>
<script type="text/javascript" >
alert("Ciudad actualizada correctamente");
window.history.back();
window.history.back();
document.reload();
</script>
<?php
}

/**
*Elimina los datos de una ciudad.
*
*@param $id_ciudad Número de identificación de la ciudad.
*/
function eliminarCiudad($id_ciudad){
	$conexion=conecta();
	$sql="DELETE FROM CIUDAD WHERE ID_CIUDAD=	$id_ciudad";
$conexion->Execute($sql);
?>
<script type="text/javascript" >
alert("Ciudad eliminada correctamente");
window.history.back();
window.history.back();
</script>
<?php
}

/**
*Vuelve a la página donde estaba antes de que apareciera la opción de aceptar o cancelar.
*/
function cancelar(){
	echo "<script type='text/javascript'>
				window.history.back();
				window.history.back();
			</script>";
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
