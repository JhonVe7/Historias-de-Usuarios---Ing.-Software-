<?php

	include './conexion.php';
    session_start();

//login

	// define datos de entrada a variables
	if(!empty($_POST)){

		$username = mysqli_real_escape_string($conexion, $_POST['Username']);
		$password = mysqli_real_escape_string($conexion, $_POST['Password']);
		$passEncrpit = sha1($password);

		// consulta asignada a una variable
		//$sentenciaSQL = "SELECT * FROM $tbl_name1 WHERE username ='$username' AND contraseña ='$password'";
		//$sentenciaSQL = "SELECT * FROM $tbl_name1";
		//$sentenciaSQL = "SELECT * FROM $tbl_name1 LIMIT 3";
		$sentenciaSQL = "SELECT * FROM usuar WHERE username ='$username' AND contrasena ='$password'";

		//import method 
		//$resultados = mysqli_query($conexion,$sentenciaSQL);
		$result = $conexion->query($sentenciaSQL);
		$rows = $result->num_rows;
		//$count = mysqli_num_rows($resultados);
		//echo "Filas" + ($count);

		if($rows > 0){
			$row = $result ->fetch_assoc();
			$_SESSION['nombreSesion'] = $row["id_user"];	
			header ("location: ./Documentos/usuario_basico.html");
		}else{
			echo "<script>
					alert('Datos incorrecto, verifique los datos e intente nuevamente.');
				  </script>";
				  header ("location: ../login/logeo.html");
			}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Vista encontrada</title>
</head>
<body>
	<br>
	<!-- <table>
        <tr>
            <td>id</td>
            <td>username</td>
            <td>contraseña</td>
            <td>email</td>
            <td>nombre</td>
            <td>apellido</td>
            <td>id rol</td>
        </tr>

        <?php
        while($mostrar=mysqli_fetch_array($result)){
        ?>

        <tr>
            <td><?php echo $mostrar['id_user']?></td>
            <td><?php echo $mostrar['username']?></td>
            <td><?php echo $mostrar['contrasena']?></td>
            <td><?php echo $mostrar['email']?></td>
            <td><?php echo $mostrar['nombre']?></td>
            <td><?php echo $mostrar['apellido']?></td>
            <td><?php echo $mostrar['id_rol']?></td>
        </tr>
        <?php
        }
        ?>
    </table> -->
</body>
</html>
