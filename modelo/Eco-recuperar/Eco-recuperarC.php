<!-- CONEXION CON LA HOJA DE ESTILOS -->
    <link rel="stylesheet" href="Ecoestilos.css">
    <meta charset= "UTF-8">
<?php
require_once("../../BsDConexion/adminBD.php");
// INICIALIZAR VARIABLE DE SESSION
class passnew{
    public $email;
    function __construct($m)
    {
        $this->email = $m;
    }
    public function createpass($conex){
        //verificar primero si existe un usuario con ese correo;
        echo $this->email;
        $consul_mail = "SELECT count(*) from usuario_registrado where Correo ='$this->email' ";
        $consul_mail_resultado=mysqli_query($conex, $consul_mail);
        $almacen_mail_consul= mysqli_fetch_row($consul_mail_resultado);
        if(($almacen_mail_consul[0])==0){
            echo '<script language="javascript">alert("No existe una cuenta asociado a el correo ingresado por favor ingrese uno valido")
                        window.location = "../../vista/Eco-recuperar/eco-recuperar.php"; </script>';
            exit();
        }else{
            echo"si hay uno uwu";
            $charpass ='aAbBcCdDeEfFgGhHiIjJkKLlmMnNoOPpQQqRrSsTtuUVvZz0123456789-';
            $longitud = 15;
            $passant = substr( str_shuffle($charpass),0,$longitud);
            global $code;
            $code = "eco".$passant;

            $update_pass_consul="UPDATE usuario_registrado SET Password = '$code' Where Correo ='$this->email'";
            echo $update_pass_consul;
            $updare_pass_consul_ejec= mysqli_query($conex, $update_pass_consul);
            if((mysqli_affected_rows($conex))>0){
                echo"<h1>uuuuuy se actualizo mi pex</h1>";
                header("location:../../vista/Eco-login/index.php");
            }
        }
    }
    public function recuperarUser($conex){
        $consul_user ="SELECT Username from usuario_registrado where Correo ='$this->email'";
        $consul_user_resultado= mysqli_query($conex, $consul_user);
        $almacen_consul_user= mysqli_fetch_row($consul_user_resultado);
        global $user;
        $user = $almacen_consul_user[0];
    }
}
?>
