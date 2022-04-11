<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="stylesheet" href="../../vista/Ver-contOfi/EstilosConsul.css">
    <title>Consultar cont_oficial</title>
</head>
<body>
    <!--CONECTARSE CON LA BD-->
    <?php
    session_start();
    if(($_SESSION['crendenciales']['type'])==4){
    }else{;
        header("location:../Eco-principal/");
    }
    ?>
    <!-- REALIZAR LA CONSULTA DEL USUARIO-->
        <!-- FORMULARIO DE BUSQUEDA -->
        <form method="GET" action="">
            <input type="text" id="consulta" name="consulta" placeholder="Título" required>
            <button type="submit" id="buscar" name="buscar"><img src="img/Lupa.png" width="20px" height="15px" alt="Buscar"></button>
            <a id="reset" href="../Ver-contOfi/Consultar.php">Reset</a>
        </form>
    <?php
    //MOSTRAR EL SELECT DE ACUERDO A LA BUSQUEDA
    if(isset($_GET['buscar']))
        {
            //Llamada a las clases
            ?>
            <a class='Botton1' href="../index-admins/">Volver al index</a>
            <a class='Botton2' href="../Insertar-contOfi/index.php"> Crear contenido</a>
            <?php
            ?>
            <!-- REALIZAR LA CONSULTA -->
            <div>
                <table>
                <tr>
                    <caption>CONTENIDO OFICIAL</caption>
                    <tr><th colspan="8"><?php require "../../controlador/Ver-contOfi/visualizarCtrl.php"; ?></th></tr>
                        <th>ID</th>
                        <th>TITULO</th>
                        <th>CUERPO</th>
                        <th>ID_TEMA</th>
                        <th>IMAGENES</th>
                        <th>VIDEOS</th>
                        <th>OP 1</th>
                        <th>OP 2</th>
                </tr>
                <!-- REALIZAR LA CONSULTA SQL -->
                <?php
                //  MOSTRAR EL CONTENIDO DE LA TABLA
                    while($visualizar = mysqli_fetch_array($Ver)){
                ?>
                <tr>
                        <td class = "id"><?php echo $visualizar['Id_cont_oficial']?></td>
                        <td class = "titulo" width="100px" heigth="100px"><?php echo $visualizar['Titulo_cont_oficial']?></td>
                        <td class = "cuerpo"><?php echo $visualizar['Cuerpo_del_mensaje_cont_oficial']?></td>
                        <td class = "id_clasificacion"><?php echo $visualizar['Id_clasificacion_Ofi']?></td>
                        <?php $index= $visualizar['Id_cont_oficial'] ?>
                        <td class="img">
                        <?php
                        if($visualizar['Imagenes_cont_oficial'] == ""){
                            echo "";
                        }else{
                        ?>
                        <img src= "/intranet/ImageContOfi/<?php echo $visualizar['Imagenes_cont_oficial'];?>" width= "100px" height= "100px">
                        <?php } ?>
                        </td>
                        <td class="vid">
                        <?php
                        if($visualizar['Video_cont_oficial'] == ""){
                            echo "no hay nada";
                        }else{
                        ?>
                        <video src= "/intranet/VideosContOfi/<?php echo $visualizar['Video_cont_oficial'];?>" width= "100px" height= "100px" controls></video>
                        <?php }?>
                        </td>
                        <td class ="opcionesConsul1"><a href="../Eco-editar/FormEditar.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Editar"></a></td>
                        <td class ="opcionesConsul2"><a href="../Eliminar-contOfi/FormDelet.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Eliminar"></a></td>
                <?php } ?>
                </tr>

            </table>
            <?php
        //CUANDO NO SE REALIZA UNA BUSQUEDA
        }else
            {
            //Llamada a las clases
            ?>
            <a class='Botton1' href="../index-admins/index.php">Volver al index</a>
            <a class='Botton2' href="../Insertar-contOfi/index.php"> Crear contenido</a>
            <?php
            ?>
            <!-- REALIZAR LA CONSULTA -->
            <div>
                <table>
                <tr>
                    <caption>CONTENIDO OFICIAL</caption>
                    <tr><th colspan="8"><?php require "../../controlador/Ver-contOfi/visualizarCtrl.php"; ?></th></tr>
                        <th>ID</th>
                        <th>TITULO</th>
                        <th>CUERPO</th>
                        <th>ID_TEMA</th>
                        <th>IMAGENES</th>
                        <th>VIDEOS</th>
                        <th>OP 1</th>
                        <th>OP 2</th>
                </tr>
                <!-- REALIZAR LA CONSULTA SQL -->
                <?php
                //  MOSTRAR EL CONTENIDO DE LA TABLA
                    while($visualizar = mysqli_fetch_array($rta)){
                ?>
                <tr>
                        <td class = "id"><?php echo $visualizar['Id_cont_oficial']?></td>
                        <td class = "titulo" width="100px" heigth="100px"><?php echo $visualizar['Titulo_cont_oficial']?></td>
                        <td class = "cuerpo"><?php echo $visualizar['Cuerpo_del_mensaje_cont_oficial']?></td>
                        <td class = "id_clasificacion"><?php echo $visualizar['Id_clasificacion_Ofi']?></td>
                        <?php $index= $visualizar['Id_cont_oficial'] ?>
                        <td class="img">
                        <?php
                        if($visualizar['Imagenes_cont_oficial'] == ""){
                            echo "";
                        }else{
                        ?>
                        <img src= "/intranet/ImageContOfi/<?php echo $visualizar['Imagenes_cont_oficial'];?>" width= "100px" height= "100px">
                        <?php } ?>
                        </td>
                        <td class="vid">
                        <?php
                        if($visualizar['Video_cont_oficial'] == ""){
                            echo "no hay nada";
                        }else{
                        ?>
                        <video src= "/intranet/VideosContOfi/<?php echo $visualizar['Video_cont_oficial'];?>" width= "100px" height= "100px" controls></video>
                        <?php }?>
                        </td>
                        <td class ="opcionesConsul1"><a href="../Eco-editar/FormEditar.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Editar"></a></td>
                        <td class ="opcionesConsul2"><a href="../Eliminar-contOfi/FormDelet.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Eliminar"></a></td>
                <?php } ?>
                </tr>
            </table>
                <?php
                //-----------------------------------------PAGINACIÓN---------------------------------------
                            for($i=1; $i <= $Total_pag; $i++)
                                {
                                    echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                                }
                ?>
            </div>
    <?php } ?>
</body>
</html>
<?php
?>