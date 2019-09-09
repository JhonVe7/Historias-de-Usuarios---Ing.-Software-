<?php

	include_once 'conexion.php';

	$username = $_POST['Username'];
	$password = $_POST['contraseña'];

	//comparar sentencia 
	$sentenciaSQL = "SELECT * FROM usuar where username ='$usuario' AND contraseña ='$password' ";

	//import method 
	$resultados = $conexion ->query($sentenciaSQL);

		if($resultados->num_rows>0){
			while($registros = $resultados->fetch_array()){
		
			$Nombre = $registros['Nombre'];
			 
			}
		}else{

			echo "Datos incorrecto, verifique los datos e intente nuevamente. ";
		}
?>
