<?php
include_once "cabecera.php";

mostrarBotonZona();

if(isset($_GET['ZONA_CONTINENTE'])) {
	$continente=$_GET['ZONA_CONTINENTE'];
	setcookie("ZONA_CONTINENTE",$continente);
}else {
	$continente=$_COOKIE['ZONA_CONTINENTE'];
}

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
		
	echo "Buscar ciudad en ".$zona;
	$ciudad=getCityZona($continente);
	$pais=buscaPaisZona($ciudad, $continente);
do {
	$ciudad2=getCityPais($pais);
}while($ciudad2==$ciudad);

do {
	$ciudad3=getCityPais($pais);
}while($ciudad3==$ciudad || $ciudad3==$ciudad2);


mostrarCityAzar($ciudad);
mostrarPais($pais);
mostrarCityMaps($ciudad,$pais);
mostrarRutaMaps($ciudad, $ciudad2, $ciudad3, $pais);
?>