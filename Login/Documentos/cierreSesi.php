<?php
    include('./conexion.php');

    session_start();

    if(!isset($_SESSION['nombreSesion'])){
        header("location: ../logeo.html");
    }

    $iduser = $_SESSION['nombreSesion'];

    $sqlCons = "SELECT id_user,nombre FROM usuar  WHERE id_user ='$iduser' ";

    $resultado = $conexion->query($sqlCons);

    $row = $resultado->fetch_assoc();


    session_start(); 
    session_destroy();
    header('location: ../logeo.html');


?>