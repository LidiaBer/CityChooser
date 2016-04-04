<?php
include_once "cabeceraAdmin.php";
asideCiudad();
$datos=getCiudades();
mostrarCiudades($datos);
?>