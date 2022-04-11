<?php

Class NotiF{

    public static function consulta($conex){

        $consulta="SELECT * FROM entrada_de_foro, registro_de_notificacion_de_entrada_de_foro,opcion_notificacion_entrada
        WHERE registro_de_notificacion_de_entrada_de_foro.Id_de_entrada=entrada_de_foro.Id_de_entrada
        and registro_de_notificacion_de_entrada_de_foro.Id_opcion_entrada=opcion_notificacion_entrada.Id_opcion_entrada
        ORDER BY registro_de_notificacion_de_entrada_de_foro.Id_de_entrada";
        $Dat= mysqli_query($conex, $consulta);
        return $Dat;

    }

    public static function Bloquear($conex, $IdF){
        $Block="UPDATE registro_de_notificacion_de_entrada_de_foro
        SET Id_accion_entrada=2 WHERE Id_de_entrada=$IdF";
        $ejecutar=mysqli_query($conex, $Block);
        
    }

    public static function Desbloquear($conex, $IdF){
        $Block="UPDATE registro_de_notificacion_de_entrada_de_foro
        SET Id_accion_entrada=1 WHERE Id_de_entrada=$IdF";
        $ejecutar=mysqli_query($conex, $Block);

    }

    public static function Quitar1R($conex, $Id){
        $quitar="DELETE FROM registro_de_notificacion_de_entrada_de_foro
        WHERE Id_de_registro_entrada = $Id";
        $ejecutar=mysqli_query($conex, $quitar);

    }

    public static function QuitarallR($conex, $IdF){
        $quitar="DELETE FROM registro_de_notificacion_de_entrada_de_foro 
        WHERE Id_de_entrada = $IdF";
        $ejecutar=mysqli_query($conex, $quitar);

    }

}


?>