<?php
//Test para crear un foro (Crear Foro)
class Crearforotest {
    public static function GuardarForo($Titulo, $Fecha, $Cuerpo, $Iduser, $conexion){
        $guardar= "INSERT INTO entrada_de_foro (Titulo_de_entrada, Fecha, Cuerpo_del_mensaje_de_entrada,Id_usuario)
        VALUES ('$Titulo', '$Fecha', '$Cuerpo', '$Iduser')";
        $rta= mysqli_query($conexion, $guardar);
        $resultadocrearforo = mysqli_affected_rows($conexion);
        
        return $resultadocrearforo;
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
