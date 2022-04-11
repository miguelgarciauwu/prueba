
<?php require_once("../navF/nav.php");
        include "../../controlador/Eco-editar/EditarOfiCtrl.php";
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="stylesheet" href="css/FormEdit.css">
    <title>Formulario editar</title>
</head>
<body>


<?php

    if(($_SESSION['crendenciales']['type'])==4){


    }else{
        header("location:../Eco-principal");

    }
    if(empty($_REQUEST['fx'])){
        echo "No se recibió ningun dato";

    }else
        {
            //ALMACENAMOS EL $_REQUEST EN UNA VARIABLE
            $id = $_REQUEST['fx'];
            //CONEXION CON LA BD
                require_once("../../BsDConexion/adminBD.php");
                $conexion= mysqli_connect($host,$user,$pass,$NomDB);
                mysqli_set_charset($conexion,"utf8");
            //COMPROBAR EL ESTADO DE LA CONEXION
            if($conexion->connect_error)
            {
                echo "Ocurrio un error en la conexión";
                exit();
            }


        $consulta = "SELECT * FROM contenido_oficial_de_la_pagina WHERE Id_cont_oficial =$id";
        $Resul = $conexion->query($consulta);

        if($Resul->num_rows > 0)
        {
            while($ver= $Resul->fetch_assoc())
                {
                    $id_contenido = ($ver['Id_cont_oficial']);
                    $titulo = ($ver['Titulo_cont_oficial']);
                    $cuerpo = ($ver['Cuerpo_del_mensaje_cont_oficial']);
                    $imagen = ($ver['Imagenes_cont_oficial']);
                    $video = ($ver['Video_cont_oficial']);
                    $id_clasificacion = ($ver['Id_clasificacion_Ofi']);
                }
        }else
            {
                echo "El registro no existe en la base de datos
                ERROR CODIGO: ". mysqli_errno($conexion). "Mensaje: ". mysqli_error($conexion);
            }
            $conexion->close();
        }


?>

        <!-- CREACION DEL FORMULARIPO PARA LA VISUALIZACION DE LOS DATOS -->

            <form action="../../controlador/Eco-editar/EditarOfiCtrl.php" method="POST" class="form" enctype="multipart/form-data">
                <!-- campo del id -->
                <input type="hidden" name="Id_cont_ofi" value="<?php echo $id_contenido;?>">
                <!-- campo del título -->
                <label>Título</label><br>
                    <input type="text" id="input_titulo" name="titulo_cont_ofi" maxlength="100" value="<?php echo $titulo;?>"><br>
                <!-- campo del  cuerpo-->
                <label>Cuerpo</label><br>
                    <textarea id="input_cuerpo" name="cuerpo_cont_ofi" maxlength="65535" rows="20" cols="90" ><?php echo $cuerpo;?></textarea><br>
                <!-- campo de la imagen-->
                <label>Nombre de la imagen</label><br>
                    <input type="text" id="input_imagen" name="imagen_cont_ofi_Ver" readonly="readonly" value="<?php echo $imagen;?>"><br>
                    <input type ="file" id="input_imagen2" name="imagen_cont_ofi" value="<?php echo $imagen;?>"  accept="image/jpeg, image/png, imagen/jpg"><br>
                    <!-- Definir la ruta en la que se almacenará la imagen insertada -->
                    <?php $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ImageContOfi/'; ?>
                <!-- campo del  video-->
                <label>Nombre del video</label><br>
                    <input type="text" id="input_video" name="video_cont_ofi_Ver" readonly="readonly" value="<?php echo $video;?>"><br>
                    <input type ="file" id="input_video2" name="video_cont_ofi" value="<?php echo $video;?>"  accept="video/*"><br>
                    <!-- Definir la ruta que almacenará el video insertado -->
                    <?php $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/VideosContOfi/';
                            ?>
                    <!-- campo de la clasificación-->
                <label>Clasificación</label><br>
                    <input type="text" id="input_id_class" name="clasificacion_cont_ofi" value="<?php echo $id_clasificacion;?>"><br>
                <!-- Botones -->
                <button type = "submit" name="actualizar_cont_ofi">Actualizar entrada</button>
                <!-- <a href = "Consultar.php" class ="text_cancelar"><input type="button" name= "cancelar-delet" id="cancelar-delet" value="Cancelar">cancelar</a> -->
                <a href = "../Ver-contOfi/Consultar.php" class ="text_cancelar">cancelar</a>
            </form>

</body>
</html>