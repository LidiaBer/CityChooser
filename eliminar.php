<?php
include "cabeceraAdmin.php";
$id_ciudad=$_GET['ID_CIUDAD'];
setcookie('ID_CIUDAD',$id_ciudad);
consultaEliminarCiudad($id_ciudad);
?>

