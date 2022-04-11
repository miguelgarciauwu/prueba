<?php
require_once("../../modelo/ForoUsers/Consulta.php");
require_once("../../BsDConexion/adminBD.php");

$conexion=adminBD::conectar();
$estadoF=ForosId::estadoF($conexion,$Id);

?>