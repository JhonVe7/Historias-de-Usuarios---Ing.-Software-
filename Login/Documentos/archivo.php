<?php

if(isset($_POST['subir'])){

    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta= $_FILES['archivo']['tmp_name'];
    $destino="archivoos/".$nombre;

    if ($nombre != " ") 
    {
        if (copy($ruta, $destino)) 
        {
                echo "Se guardo correctamente";
            
        }else
        {
            echo "Error";
        }
    }
}
?>
