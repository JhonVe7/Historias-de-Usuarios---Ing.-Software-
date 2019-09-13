<?php

	include("conexion.php");

	$username = mysqli_real_scape_string($Conexion, $_POST['Username']);
	$password = mysqli_real_scape_string($Conexion,$_POST['Password']);
	$passEncrpit = = shal($password);

	// consulta asignada a una variable
	$sentenciaSQL = "SELECT id_user FROM usuar where username ='$username' AND contraseña ='$password' ";

	//import method 
	$resultados = $conexion->query($sentenciaSQL);
	$rows = $resultados->num_rows;

		if($rows > 0){
			$row = $resultado ->fetch_assoc();
			$_SESSION['nombreSes'] = $row['usuar'];	
			header ('location: inicio/ValidacionInicio.php');
		/*	
			while($registros = $resultados->fetch_array()){
			$nombre = $registros['nombre'];
			$_SESSION['nombreSes'] = $nombre;
			header ('location: inicio/ValidacionInicio.php');
			}
		*/
			
		}else{
			echo "<script>
				alert('Datos incorrecto, verifique los datos e intente nuevamente.');
				window.location ='ValidarLogin.php';
			      </script>";
		}
		
?>
