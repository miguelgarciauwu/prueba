<?php
//Archivos requeridos
require_once("../../modelo/ForosAdminds/Consulta.php");
require_once("../../BsDConexion/adminBD.php");
//Creación de una nueva instancia
    $Foro=new ForosId;
    //Conexion de la BD
    $conexion=adminBD::conectar();
    $resultado=ForosId::getForo($conexion,$Id)
?>
