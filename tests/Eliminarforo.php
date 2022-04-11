<?php
class Eliminados 
{
    Public static function EliminarDato($conexion,$IDforo)
    {
            $eliminar = "DELETE FROM entrada_de_foro WHERE Id_de_entrada = $IDforo";
            global $Resultado;
            $Resultado = mysqli_query($conexion, $eliminar);
            $Result = mysqli_affected_rows($conexion);
            return $Result;
    }
}
//CONEXION A BD
class adminBD{
    public static function conectar(){
        $user = "root";
        $pass = "";
        $servidor = "localhost";
        $db = "ecolombia";
        $conexion = new mysqli($servidor, $user, $pass, $db);
        $conexion->set_charset("utf8");
        if($conexion->connect_error){
            echo "Error al conectarse!!". connect_errno($conexion);
            exit();
        }
        return $conexion;
    }

}
?>