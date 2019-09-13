<?php

	include("conexion.php");

	// define datos de entrada a variables
	if(!empty($_POST)){

		$username = mysqli_real_escape_string($conexion, $_POST['Username']);
		$password = mysqli_real_escape_string($conexion,$_POST['Password']);
		$passEncrpit = sha1($password);

		// consulta asignada a una variable
		$sentenciaSQL = "SELECT id_user FROM usuar where username ='$username' AND contraseña ='$password' ";

		//import method 
		$resultados = $conexion->query($sentenciaSQL);
		$rows = $resultados->num_rows;

		if($rows > 0){
			$row = $resultado ->fetch_assoc();
			$_SESSION['nombreSesion'] = $row["id_user"];	
			header ("location: inicio/ValidacionInicio.php");
		}else{
			echo "<script>
					alert('Datos incorrecto, verifique los datos e intente nuevamente.');
					window.location = 'ValidarLogin.php';
				  </script>";
			}
	}
?>
