<?php

    require_once("../../BsDConexion/adminBD.php");
    require_once("../../modelo/NotificacioAdmin/ConsultaNotiForo.php");

    $conex= adminBD::conectar();
    $IdF=$_REQUEST['tx'];
    $resultado=NotiF::Desbloquear($conex, $IdF);

?>
<script type="text/javascript">
     window.location.href ='../../vista/NotificacioAdmin/NotiForos.php'
</script>