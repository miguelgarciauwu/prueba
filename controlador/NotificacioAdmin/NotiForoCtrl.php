<?php

    require_once("../../BsDConexion/adminBD.php");
    require_once("../../modelo/NotificacioAdmin/ConsultaNotiForo.php");

    $conex= adminBD::conectar();
    $resultado=NotiF::consulta($conex);

?>