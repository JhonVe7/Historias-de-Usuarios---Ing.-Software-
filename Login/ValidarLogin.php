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
				echo $registros['nombre']. <br/>;
				echo $registros['apellido']. <br/>;
				echo $registros['email']. <br/>;
				echo $registros['username']. <br/>;
				echo $registros['nombre']. <br/>;
				echo $registros['id_user']. <br/>;

			}
		}else{

			echo "Datos incorrecto, verifique los datos e intente nuevamente. ";
		}
?>
