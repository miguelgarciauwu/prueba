<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="stylesheet" href="Css/EstilosNtF.css">
    <title>Notificaciones Foro</title>
</head>
<body>
    <!--CONECTARSE CON LA BD-->
    <?php
    session_start();
    if(($_SESSION['crendenciales']['type'])==4){

    }else{;
        header("location: ../Eco-principal/");
    }

    //Llamada a las clases
    ?>
    <a class='Botton1' href="../index-admins/">Volver al index</a>

    <!-- REALIZAR LA CONSULTA -->
    <div>
        <table>
        <tr>
            <caption>FOROS NOTIFICADOS</caption>
                <th>ID</th>
                <th>TITULO</th>
                <th>FECHA <br> CREACION</th>
                <th>IMAGENES</th>
                <th>VIDEOS</th>
                <th>CUERPO <br> MENSAJE</th>
                <th>ESTADO</th>
                <th>RAZON DE REPORTE</th>
                <th>OPCION</th>
        </tr>
        <!-- REALIZAR LA CONSULTA SQL -->
        <?php
        require "../../controlador/NotificacioAdmin/NotiForoCtrl.php"; 

        //  MOSTRAR EL CONTENIDO DE LA TABLA
            while($visualizar = mysqli_fetch_array($resultado)){
                $IDforo=$visualizar['Id_de_entrada'];
                $IdR=$visualizar['Id_de_registro_entrada'];

        ?>
        <tr>
                <td class = "id"><?php echo $visualizar['Id_de_entrada']?></td>
                <td class = "titulo" width="100px" heigth="100px"><?php echo $visualizar['Titulo_de_entrada']?></td>
                <td class = "titulo" width="100px" heigth="100px"><?php echo $visualizar['Fecha']?></td>

                <td class="img">
                <?php
                if($visualizar['Imagenes_de_entrada'] == ""){
                    echo "No hay imagen";
                }else{
                ?>
                <img src= "../../../intranet/ContenidoForos/<?php echo $visualizar['Imagenes_de_entrada'];?>" width= "100px" height= "100px">

                <?php } ?>
                </td>

                <td class="vid">
                <?php
                if($visualizar['Video_de_entrada'] == ""){
                    echo "No hay video";
                }else{
                ?>
                <video src= "../../../intranet/ContenidoForos/<?php echo $visualizar['Video_de_entrada'];?>" width= "100px" height= "100px" controls></video>
                <?php }?>
                </td>

                <td class = "cuerpo"><?php echo $visualizar['Cuerpo_del_mensaje_de_entrada']?></td>

                <td class = "titulo" width="100px" heigth="100px"><?php 
                if ($visualizar['Id_accion_entrada']==1){
                    echo "En revision";
                }else{
                    echo "Bloqueado";
                }
                ?></td>
                <td><?php echo $visualizar['categoria'] ?></td>
                <td>
                    <a href="../ForoAdminds/Foro.php?tx=<?php echo $IDforo?>"><button class="btn">Ver en Foros</button></a><br>
                    
                    <?php if(($visualizar['Id_accion_entrada'])==1){ ?>
                    <a href="../../controlador/NotificacioAdmin/BloquearF.php?tx=<?php echo $IDforo; ?>"><button type="sumit" name="btn-Block" class="btn" id="btn-Block">Bloquear</button></a><br>
                    <?php }elseif(($visualizar['Id_accion_entrada'])==2){ ?>
                    <a href="../../controlador/NotificacioAdmin/DesbloquearF.php?tx=<?php echo $IDforo; ?>"><button type="sumit" name="btn-Block" class="btn" id="btn-Block">Desbloquear</button></a><br>
                    <?php } ?>

                    <a href="../ForoEliminar/EliminarForo.php?id=<?php echo $IDforo?>&til=<?php echo $visualizar['Titulo_de_entrada'];?>">
                    <button type="sumit" name="btn-Quitar" class="btn" id="btn-Quitar">Eliminar</button></a><br>

                    <a href="../../controlador/NotificacioAdmin/Quitar1R.php?tx=<?php echo $IdR;?>">
                    <button type="sumit" name="btn-Quitar" class="btn" id="btn-Quitar">Quitar este <br>Reporte</button></a><br>
                    <a href="../../controlador/NotificacioAdmin/QuitarTodoRF.php?tx=<?php echo $IDforo; ?>">
                    <button type="sumit" name="btn-Quitar" class="btn" id="btn-Quitar">Quitar reportes <br>de este Foro</button></a>
                </td>
        <?php } ?>
        </tr>
    </table>

        <?php
        /*//-----------------------------------------PAGINACIÓN---------------------------------------
                    for($i=1; $i <= $Total_pag; $i++)
                        {
                            echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                        }*/
        ?>
    </div>
</body>
</html>