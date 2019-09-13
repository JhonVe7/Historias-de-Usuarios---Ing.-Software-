<?php
include_once 'documentos.php';
if(isset($_POST['subir'])){

    $nombre = $_FILES['archivo']['name'];
    $tipo = $_FILES['archivo']['type'];
    $tamanio = $_FILES['archivo']['size'];
    $ruta= $_FILES['archivo']['tmp_name'];
    $destino="archivoos/".$nombre;
    $db_name= $_FILES;

    if ($nombre != "")
    {
        if (copy($ruta, $destino))
        {
            $titulo = $_POST['titulo'];
            $bd= new Conect_MySql();
            $sql = "INSERT INTO tbl_documentos(titulo, tamanio, tipo, nombre, id_documentos) VALUES ('$titulo', '$tamanio','$tipo','$nombre',NULL)";
            $query = $bd->execute($sql);
            if ($query)
            {
                header('Location: archivo_template.php');
                echo "Se guardo correctamente";
            }
        }else
        {
            echo "Error";
        }
    }
}
?>
