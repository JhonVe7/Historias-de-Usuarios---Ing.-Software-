<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Subir archivos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    </head>
    <body>
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="nav-link active" href="usuario_basico.html">Inicio</a>
            <a class="nav-link" href="archivos.html">Archivos</a>
        </nav> 
        <br>
        <br>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-6" style="border: 1px solid #47b6ff; padding: 50px;">
                    <h4>SUBIR PDF</h4>
        
                    <form action="conex.php" method="POST" action="" enctype="multipart/form-data">
                        <table>
                            <tr>
                                <td>
                                    <input type="text" name="titulo"> 
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="file" name="archivo">
                                </td>
                                
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="subir" name="subir">
                                </td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div class="col-6"style="border: 1px solid #47b6ff; padding: 10px;">
                    <h4>ARCHIVOS</h4>
                    <table>
                        <!-- <tr>
                            <td>titulo</td>
                            <td>descripcion</td>
                            <td>tamaño</td>
                            <td>tipo</td>

                            <td>nombre</td>
                        </tr> -->
                        <?php
                            include 'documentos.php';
                            $db=new Conect_MySql();
                            $sql = "SELECT * FROM tbl_documentos ";
                            $query = $db->execute($sql);
                            while($datos=$db->fetch_row($query)){?>
                                <tr>
                                    <?php 
                                    echo $datos['titulo']; 
                                    echo $datos['tamanio'];
                                    echo $datos['tipo']; 
                                    echo $datos['nombre'];
                                    ?>
                                    <a href="archivo.php ? id=<?php echo $datos['id_documentos']?>">
                                        <?php 
                                            echo $datos['nombre']; 
                                        ?>
                                    </a>
                                </tr>
                            <?php  }?>
                        
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>
