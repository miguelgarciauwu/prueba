<?php
//Archivos requeridos
require_once("../../BsDConexion/adminBD.php");
require_once("../../modelo/NotificacioAdmin/ConsultaNotiComen.php");
    $NotiComen = new NotiComen;
    $conexion= adminBD::conectar();
    //Consulta para traer datos de notificación realizada
    $resultado = NotiComen::TraerInfo($conexion);
    //Si preciona boton trae dato de notificación
    if(isset($_REQUEST['tx'])){
        $IdC = $_REQUEST['tx'];
        $NotiComen = new NotiComen;
        $conexion= adminBD::conectar();
        $QuitarNoti = NotiComen::Quitar1R($conexion, $IdC);
        ?>
        <script type="text/javascript">
                alert("Registro Eliminado");
                window.location.href ='../../vista/NotificacioAdmin/NotiComentarios.php';
        </script>
        <?php
    }
?>