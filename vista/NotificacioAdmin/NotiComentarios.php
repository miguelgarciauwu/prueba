<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="stylesheet" href="Css/EstilosNtF.css">
    <title>Notificación Comentarios</title>
</head>
<body>
    <!--CONECTARSE CON LA BD-->
    <?php
    //Confirmar si la sesion es de administrador
    session_start();
    if(($_SESSION['crendenciales']['type'])==4){
    }else{;
        header("location: ../Eco-principal/");
    }
    ?>
    <a class='Botton1' href="../index-admins/">Volver al index</a>
    <!-- DATOS QUE MUESTRA -->
    <div>
        <table>
        <tr>
            <caption>COMENTARIOS NOTIFICADOS</caption>
                <th>ID</th>
                <th>COMENTARIO</th>
                <th>FECHA <br> CREACION</th>
                <th>ID FORO</th>
                <th>USUARIO</th>
                <th>ESTADO</th>
                <th>RAZON DE REPORTE</th>
                <th>OPCION</th>
        </tr>
        <!-- REALIZAR LA CONSULTA SQL -->
        <?php
        require_once ("../../controlador/NotificacioAdmin/NotiComenCtrl.php") ;

        //  MOSTRAR EL CONTENIDO DE LA TABLA
            while($mostrar = mysqli_fetch_array($resultado)){
                if($mostrar['Id_accion_comentario']==2){
                    echo "Nada";
                }else
                
                ?>
                <tr>    
                    <td class="id"><?php echo $mostrar['Id_de_registro_com']?>  </td>
                    <td class = "titulo" width="100px" heigth="100px"><?php echo $mostrar['Cuerpo_del_mensaje']?></td>
                    <td class = "titulo" width="100px" heigth="100px"><?php echo $mostrar['Fecha']?></td>
                    <td class="id"><?php echo $mostrar['Id_de_entrada']; ?>  </td>
                    <td class="id"><?php echo $mostrar['Id_usuario']; ?> </td>
                    <td class="titulo" width="100px" heigth="100px" ><?php
                    if($mostrar['Id_accion_comentario']==1 ){
                        echo "En revision";
                    }else{
                        echo "Bloqueado";
                    }
                    // VARIABLES ASIGNADAS
                    $Id = $mostrar['Id_de_comentario'];
                    $IdC = $mostrar['Id_de_registro_com'];
                    $IDforo = $mostrar['Id_de_entrada'];
                    ?>
                    </td>
                    <td><?php echo $mostrar['categoria'] ?></td>
                    <!-- Acciones que se pueden realizar en la notificación -->
                    <td>
                    <a target ="_blank" href="../ForoAdminds/Foro.php?tx=<?php echo $IDforo?>"><button class="btn">Ver Comentario</button></a><br>
                    <!--NICE-->
                    <a  href='../../controlador/ForoEliminar/ControladorDelete.php?txcoment=<?php echo $Id?>'>
                    <button type="submit" name="btn-Quitar" class="btn" id="btn-Quitar">Eliminar</button></a><br>

                    <a href="../../controlador/NotificacioAdmin/NotiComenCtrl.php?tx=<?php echo $IdC;?>">
                    <button type="sumit" name="btn-Quitar" class="btn" id="btn-Quitar">Quitar este <br>Reporte</button></a><br>
                    </td>
                </tr>
                <?php
            }
?>
</body>
</html>