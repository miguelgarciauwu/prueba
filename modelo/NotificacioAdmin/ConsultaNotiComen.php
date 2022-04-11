<?php

Class NotiComen{
    //Traer la información en relacion con comentario y entrada de foro
    public static function TraerInfo($conexion){
        $Traer = "SELECT * FROM comentario, registro_de_notificacion_de_comentario, opcion_notificacion_comentario, 
        entrada_de_foro
        WHERE registro_de_notificacion_de_comentario.Id_de_comentario = comentario.Id_de_comentario
        AND registro_de_notificacion_de_comentario.Id_opcion_comentario = opcion_notificacion_comentario.Id_opcion_comentario 
        AND entrada_de_foro.Id_de_entrada = comentario.Id_de_entrada
        ORDER BY registro_de_notificacion_de_comentario.Id_de_comentario";
        $resultado = mysqli_query($conexion, $Traer);
        return $resultado;
    }
    //Eliminar registro de notificación del comentario
    public static function EliminarTodo($conex, $IDcomentario){
        $Delete="DELETE registro_de_notificacion_de_comentario
        WHERE Id_de_comentario=$IDcomentario";
        $ejecutar=mysqli_query($conex, $Delete);
        
    }
    //Eliminar registro de notificacion realizado
    public static function Quitar1R($conexion, $Id){
        $quitar="DELETE FROM registro_de_notificacion_de_comentario
        WHERE Id_de_registro_com = $Id";
        $ejecutar=mysqli_query($conexion, $quitar);
    }
}
?>