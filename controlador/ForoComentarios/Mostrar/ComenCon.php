<?php
//Archivos requeridos
    require_once("../../modelo/ForoComentarios/Mostrar/mostrar.php");
    require_once("../../BsDConexion/adminBD.php");
//Creacion de nueva instancia
    $comen=new ComentariosId;
    $conexion=adminBD::conectar();
    $comentarios=ComentariosId::getComentario($conexion,$Id)
?>
