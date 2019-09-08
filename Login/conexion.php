<?php

$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$db_name = "ingdatabase";
$tbl_name1 = "usuar";

//$conexion = new PDO("mysql:host=$host_db; dbname=$db_name", $user_db, $pass_db); 

$conexion = new mysqli($host_db, $user_db, $pass_db, $db_name);

if ($conexion->connect_error) {
    die("La conexion falló: " . $conexion->connect_error);
}

$buscarUsuario = "SELECT * FROM $tbl_name1 WHERE username = '$_POST[Username]'";

$result = $conexion->query($buscarUsuario);

$count = mysqli_num_rows($result);

if ($count == 1) {
    echo "<br />" . "El Nombre de Usuario ya a sido tomado." . "<br />";
    echo "<a href='index.html'>Por favor escoga otro Nombre</a>";
} else {

    /* $clave = $_POST['Contraseña'];
    $clave_cifrada = password_hash($clave, PASSWORD_DEFAULT, array("cost"=>15));
    $insert->bindParam(':clave', $clave_cifrada); */

    $form_pass = $_POST['Contraseña'];
    $hash = password_hash($form_pass, PASSWORD_BCRYPT);

    $query = "INSERT INTO usuar VALUES (NULL,'$_POST[Username]','$_POST[Contraseña]','$_POST[Email]','$_POST[Nombre]','$_POST[Apellido]',3)";
}

if ($conexion->query($query) === TRUE) {
    echo "<br />" . "<h1>" . "Usuario Creado Exitosamente!" . "</h1>";
    echo "<h2>" . "Bienvenido: " . $_POST['Username'] . "</h2>" . "\n\n";
    echo "<h3>" . "Pasar a la plataforma: " . "<a href='../inicio/usuarios.html'>Usuario</a>" . "</h3>";
} else {
    echo "Error al crear el usuario." . $query . "<br>" . $conexion->error;
}

mysqli_close($conexion);

?>