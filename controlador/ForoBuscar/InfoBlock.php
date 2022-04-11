<?php
    require_once("../../modelo/ForoBuscar/Consulta.php");
    require_once("../../BsDConexion/adminBD.php");
    $Reportes = new Reportes();
    $conexion=adminBD::conectar();
    $estadoF=Reportes::estadoF($conexion,$Id);

?>