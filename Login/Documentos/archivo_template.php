<?php
    include('./conexion.php');

    session_start();

    if(!isset($_SESSION['nombreSesion'])){
        header("location: ./ValidarLogin.php");
    }

    $iduser = $_SESSION['nombreSesion'];

    $sqlCons = "SELECT id_user,nombre FROM usuar  WHERE id_user ='$iduser' ";

    $resultado = $conexion->query($sqlCons);

    $row = $resultado->fetch_assoc();

?>

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
            <a class="nav-link" href ="CerrarSesion.php">"Cerrar sesion</a>
        </nav> 
        <br>
        <?php
        echo ("bienvenido"); 
        echo utf8_decode($row['nombre']);
        ?>
        <br>
        <div class="container" style="margin-top: 30px;">
            <div class="row">
                <div class="col-6" style="border: 1px solid #47b6ff; padding: 50px;">
                    <h4>SUBIR PDF</h4>
        
                    <form action="archivo.php" method="POST" action="" enctype="multipart/form-data">
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
                        <tr>
                            <td>titulo</td>
                            <td>descripcion</td>
                            <td>tamaño</td>
                            <td>tipo</td>

                            <td>nombre</td>
                        </tr>
                        <?php
                            include 'config.inc.php';
                            $db=new Conect_MySql();
                            $sql = "select * from tbl_documentos where id_documento=".$_GET['id'];
                            $query = $db->execute($sql);
                            if($datos=$db->fetch_row($query)){
                                
                                if($datos['nombre_archivo']==""){?>
                                   <p>NO tiene archivos</p><?php 
                                }else{ ?>
                                <iframe src="archivos/<?php echo $datos['nombre_archivo']; ?>"></iframe>
                                <?php 
                                } 
                            } 
                        ?>
                    </table>
                </div>
            </div>
        </div>
        
    </body>
</html>
