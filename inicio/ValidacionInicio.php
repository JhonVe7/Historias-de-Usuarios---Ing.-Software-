<?php
	
	session_start();
	error_reporting(0);
	$varSesion = $_SESSION['nombreSes'];

	if($varSesion == null || $varSesion == ''){
		echo "error 404, por favor hablar con su administrador";
		die();
	} 

	

?>
<!DOCTYPE html>
<html lang = "es">
	<head>
		<meta charset="utf-8">
		<title>	Inicio de Sesión</title>
	</head>

	<body>
		<?php

		echo "bienvenido a su página <strong>".$_SESSION['nombreSes']."</strong>";

		?>
		<br></br>
		
		<a href="cerrarSesion.php">Salir del Sistema</a>
	</body>

</html>