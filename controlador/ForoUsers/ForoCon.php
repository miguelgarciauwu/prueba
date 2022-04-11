<?php
require_once("../../modelo/ForoUsers/Consulta.php");
require_once("../../BsDConexion/adminBD.php");

    $Foro1=new ForosId;
    $conexion=adminBD::conectar();
    $resultado=ForosId::getDatoF($conexion,$Id);

?>
