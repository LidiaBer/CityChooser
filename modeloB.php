<?php
include_once "../modelo/conexion.php";

function getCiudades(){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}
function getCiudadesNombre($nombre){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE NOMBRE_CIUDAD LIKE '%$nombre%'";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}
function getCiudadesPais($nombre){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE PAIS LIKE '%$nombre%'";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}
function getCiudadesZona($nombre){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE ZONA_CONTINENTE='$nombre'";
	$datos=$conexion->Execute($sql)->getRows();
	return $datos;
}
function getCiudad($id_ciudad){
	$conexion=conecta();
	$sql="SELECT * FROM CIUDAD WHERE ID_CIUDAD='$id_ciudad'";
	$datos=$conexion->getRow($sql);
	return $datos;
}

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
function eliminarCiudad($id_ciudad){
	$conexion=conecta();
	$sql="DELETE FROM CIUDAD WHERE ID_CIUDAD=	$id_ciudad";
$conexion->Execute($sql);
?>
<script type="text/javascript" >
alert("Ciudad eliminada correctamente");
window.history.back();
</script>
<?php
}
?>