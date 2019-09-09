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
?>