<?php 
//SESION INICIADA
 session_start();
// Archivos requeridos
require_once ("../../modelo/ForoEliminar/EliminarC.php");
require_once ("../../BsDConexion/adminBD.php");
    //Si oprimen boton eliminar 
    if(isset($_REQUEST['tx'])){
        //Recibe el ID del foro a eliminar
        $IDforo = $_REQUEST['tx'];
        $Eliminado = new Eliminados($IDforo);
        $conexion = adminBD::conectar();
        $Resultado = Eliminados::EliminarDato($conexion,$IDforo);
        if( ($_SESSION['crendenciales']['type'])==4){?>
            <script type="text/javascript">
                alert("Foro Eliminado exitosamente");
                window.location.href ='../../vista/Foros/index.php';
            </script>
                
        <?php }else{?>
            <script type="text/javascript">
                alert("Foro Eliminado exitosamente");
                window.location.href ='../../vista/ForoUsers/MisForos.php';
            </script> <?php 
        } 
    }
?>

<?php

    if(isset($_REQUEST['idF'])){
        $IDforo = $_REQUEST['idF'];
        $Eliminado = new Eliminados($IDforo);
        $conexion = adminBD::conectar();
        $Resultado = Eliminados::EliminarDato($conexion,$IDforo);
        if( ($_SESSION['crendenciales']['type'])==4){?>
            <script type="text/javascript">
                alert("Foro Eliminado exitosamente");
                window.location.href ='../../vista/NotificacioAdmin/NotiForos.php';
            </script>  
        <?php } 
    }
?>


<?php

    if(isset( $_REQUEST['txcoment'])){
        $IDcomentario = $_REQUEST['txcoment'];
        $Eliminar = new EliminarComentario($IDcomentario);
        $conexion = adminBD::conectar();
        $ResultadoComen = EliminarComentario::Eliminar($conexion,$IDcomentario);
        if( ($_SESSION['crendenciales']['type'])==4){?>
            <script type="text/javascript">
                alert("Comentario Eliminado exitosamente");
                window.location.href ='../../vista/Foros/index.php';
            </script>
                
        <?php }else{?>
            <script type="text/javascript">
                alert("Comentario Eliminado exitosamente");
                window.location.href ='../../vista/ForoUsers/MisForos.php';
            </script> <?php 
              } 
    }
    ?>



    <?php if( ($_SESSION['crendenciales']['type'])==4){?>
        <script type="text/javascript">
            alert("Eliminado exitosamente");
            window.location.href ='../../vista/Foros/index.php';
        </script>
            
    <?php }else{?>
        <script type="text/javascript">
                alert("Eliminado exitosamente");
                window.location.href ='../../vista/ForoUsers/MisForos.php';
            </script> <?php 
          } ?>

	
