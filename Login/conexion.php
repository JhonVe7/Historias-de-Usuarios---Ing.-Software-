<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "ingdatabase";
$tbl_name1 = "usuar";

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$buscarUsuario = "SELECT * FROM $tbl_name1
WHERE username = '$_POST[Username]' ";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<br />" . "El Nombre de Usuario ya a sido tomado." . "<br />";
    echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
} else {

    $form_pass = $_POST['Contraseña'];
    $hash = password_hash($form_pass, PASSWORD_BCRYPT);
    $query = "INSERT INTO usuar VALUES (NULL,'$_POST[Username]','$_POST[Contraseña]','$_POST[Email]','$_POST[Nombre]','$_POST[Apellido]',3)";
}

if ($conexion->query($query) === TRUE) {
    echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
    echo "<h4>" . "Bienvenido: " . $_POST['Username'] . "</h4>" . "\n\n";
    echo "<h5>" . "Pasar a la plataforma: " . "<a href='./usuarios.html'>Usuario</a>" . "</h5>";
} else {
    echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
}

mysqli_close($conexion);

?>