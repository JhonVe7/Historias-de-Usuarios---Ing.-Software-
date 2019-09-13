<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        include 'documentos.php';
        $db=new Conect_MySql();
            $sql = "select*from tbl_documentos where id_documentos=".$_GET['id'];
            $query = $db->execute($sql);
            if($datos=$db->fetch_row($query)){
                if($datos['nombre']==""){?>
                    <p>NO tiene archivos</p>
                    <?php }else{ ?>
                <iframe src="archivoos/<?php echo $datos['nombre']; ?>"></iframe>
                
                <?php } } ?>
    </body>
</html>