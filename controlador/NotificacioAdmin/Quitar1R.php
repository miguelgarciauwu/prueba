<?php

    require_once("../../BsDConexion/adminBD.php");
    require_once("../../modelo/NotificacioAdmin/ConsultaNotiForo.php");

    $conex= adminBD::conectar();
    $Id=$_REQUEST['tx'];
    $resultado=NotiF::Quitar1R($conex, $Id);

?>
<script type="text/javascript">
     window.location.href ='../../vista/NotificacioAdmin/NotiForos.php'
</script>