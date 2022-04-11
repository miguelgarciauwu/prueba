<?php
    require_once("../../modelo/ForoBuscar/Consulta.php");
    require_once("../../BsDConexion/adminBD.php");
    $Foro=new ForosId;
    $conexion=adminBD::conectar();
    $resultadoF=ForosId::getForo($conexion,$Id)
?>
