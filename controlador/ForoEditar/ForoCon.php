<?php
//CONTROLADOR PARA MOSTRAR INFORMACIÓN
    //Archivos requeridos 
        require_once("../../modelo/ForoEditar/Consulta.php");
        require_once("../../BsDConexion/adminBD.php");
    //Instancia Nueva
        $Foro=new ForosId;
        $conexion=adminBD::conectar();
        $resultado=ForosId::getForo($conexion,$Id);
?>
