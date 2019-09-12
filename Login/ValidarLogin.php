<?php

	session_start();
	include_once 'conexion.php';

	$username = mysqli_real_scape_string($Conexion, $_POST['Username']);
	$password = mysqli_real_scape_string($Conexion,$_POST['Password']);
	$passEncrpit = = shal($password);

	//comparar sentencia 
	$sentenciaSQL = "SELECT * FROM usuar where username ='$username' AND contraseña ='$password' ";

	//import method 
	$resultados = $conexion->query($sentenciaSQL);
	$rows = $resultados->num_rows;

		if($rows > 0){
			$row = $resultado -> 
			while($registros = $resultados->fetch_array()){
		///
			$nombre = $registros['nombre'];
			
			$_SESSION['nombreSes'] = $nombre;
			header ('location: inicio/ValidacionInicio.php');

			}

		}else{

			echo "Datos incorrecto, verifique los datos e intente nuevamente. ";

		}

?>
