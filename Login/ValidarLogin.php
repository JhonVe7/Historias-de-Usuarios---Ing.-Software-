<?php

	session_start();
	include_once 'conexion.php';

	$username = $_POST['Username'];
	$password = $_POST['Password'];

	//comparar sentencia 
	$sentenciaSQL = "SELECT * FROM usuar where username ='$username' AND contraseña ='$password' ";

	//import method 
	$resultados = $conexion->query($sentenciaSQL);

		if($resultados->num_rows()>0){

			while($registros = $resultados->fetch_array()){
		
			$nombre = $registros['nombre'];
			
			$_SESSION['nombreSes'] = $nombre;
			header ('location: inicio/ValidacionInicio.php');

			}

		}else{

			echo "Datos incorrecto, verifique los datos e intente nuevamente. ";

		}

?>
