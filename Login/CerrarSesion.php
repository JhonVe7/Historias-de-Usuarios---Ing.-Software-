<?php
session_start();
error_reporting(0);
	$varSesion = $_SESSION['nombreSes'];

	if($varSesion == null || $varSesion == ''){
		echo "error 404, por favor hablar con su administrador";
		die();
	} 
session_destroy();
header('location: logeo.html');
?>