<?php
include_once "cabeceraAdmin.php";
session_destroy();
?>
<script type="text/javascript">
		alert("Usuario desconectado");
		location.replace("index.php");
</script>