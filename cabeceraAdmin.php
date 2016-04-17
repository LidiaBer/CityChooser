<?php
session_start();
include_once "modelo/modeloB.php";
include_once "vista/vistaB.php";

if(!isset($_SESSION['login'])) {
?>
		<script type="text/javascript" >
			alert("Debe iniciar session.");
			window.history.back();
		</script>
<?php
}else {
	insertaHtml();
}
?>