<?php 
//Test de Username (Login)
class Validartest{
    public static function confirmar($conexion,$User){
        $Consul_user ="SELECT count(*) FROM usuario_registrado where Username = '$User'";
        $Consul_user_resultado=mysqli_query( $conexion, $Consul_user);
        $Almacen_user_consul= mysqli_fetch_row($Consul_user_resultado);
        $resultado=$Almacen_user_consul[0];
        return $resultado;
    }
}
//Test de contraseña (Login)
class PassTest{
    public static function validar($conexion,$User, $pass){
        $verificar ="SELECT count(*) FROM usuario_registrado where Username = '$User' && password ='$pass'";
                   // Implementación de la consulta
                    $verificarresult=mysqli_query( $conexion, $verificar);
                    //Almacenar la consulta en el array
                    $verificararray=mysqli_fetch_row($verificarresult);
                    $resultadopass=$verificararray[0];
                    return $resultadopass;
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