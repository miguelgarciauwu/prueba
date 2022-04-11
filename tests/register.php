<?php
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
public static function desConectar($conexionP){
    global $conexion;
    $conexionP->close();
    echo "BD Desconectada!!";
}
}
// $conexion=adminBD::conectar();
// $Username="qweadasqqdd";
// $Password="qw";
// $Nombre="qweqwe";
// $Apellido="qweqweqwe";
// $Correo="qweqweaaqasdsdasd";
class Testregistro {
    public static function registrar($conexion,$Username,$Password,$Nombre,$Apellido,$Correo){
        $consulta = "INSERT INTO usuario_registrado(Nombre, Apellidos, Correo, Username, Password)
        VALUES ('$Nombre','$Apellido', '$Correo','$Username','$Password')";
        $rta= mysqli_query($conexion, $consulta);
        $resultado = mysqli_affected_rows($conexion);
        
        return $resultado;
}
}
// $prueba=Testregistro::registrar($conexion,$Username,$Password,$Nombre,$Apellido,$Correo);
// printf (mysql_affected_rows());
?>