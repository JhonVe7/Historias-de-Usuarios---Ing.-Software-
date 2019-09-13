<?php

    include './conexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabla de datos</title>
</head>
<body>

    <br>

    <table>
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
        $sql = "SELECT * FROM $tbl_name1";
        $result = $conexion->query($sql);
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
    </table>

</body>
</html>