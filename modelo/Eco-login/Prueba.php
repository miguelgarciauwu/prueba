<!-- CONEXION CON LA HOJA DE ESTILOS -->
    <link rel="stylesheet" href="Ecoestilos.css">
<?php
require_once("../../BsDConexion/adminBD.php");
?>

<?php
// INICIALIZAR VARIABLE DE SESSION
session_start();
    conectar::conectarse($host, $root,$pass,$NomDB);
    class Validar{
        public $user;
        public $pass;

        function __construct($u,$p)
        {
            $this->user = $u;
            $this->pass = $p;
        }
        public function confirmar($conex){
                $Consul_user ="SELECT count(*) FROM usuario_registrado where Username = '$this->user'";
                $Consul_user_resultado=mysqli_query( $conex, $Consul_user);
                $Almacen_user_consul= mysqli_fetch_row($Consul_user_resultado);
                if(($Almacen_user_consul[0])==0){
                    echo '<script language="javascript">alert("No existe un ususairo con dichas credenciales")
                    window.location = "../../vista/Eco-login/"; </script>';
                }else{
                    //Consulta sql a la basa de datos
                    $verificar ="SELECT count(*) FROM usuario_registrado where Username = '$this->user' && password ='$this->pass'";
                   // Implementación de la consulta
                    $verificarresult=mysqli_query( $conex, $verificar);
                    //Almacenar la consulta en el array
                    $verificararray=mysqli_fetch_row($verificarresult);
                   // ASIGNACION DE VALORES AL SESSION Y CREACION DEL SESSION
                        if(($verificararray[0])==1){
                    //creacion del array SESSION
                        $_SESSION['credenciales'] = array();
                    //Asignacion de datos al array SESSION
                        $_SESSION['credenciales']['user'] = $this->user;
                        $_SESSION['credenciales']['pass'] = $this->pass;
                    //CONSULTAR EL TIPO DE USUARIO QUE INGRESO AL SITIO WEB
                    $tipoconsulta = "SELECT Id_estado  FROM usuario_registrado where  Username ='$this->user'";
                    //Implementación de la consulta
                    $consultatipo=mysqli_query($conex, $tipoconsulta);
                    //Almacenar la consulta en el array
                    $tipo = mysqli_fetch_row($consultatipo);
                    //Guardar el tipo de usuario en el array SESSION
                    $_SESSION['crendenciales']['type']= $tipo[0];
                    //ESTADO DE BLOQUEADO
                    if(($_SESSION['crendenciales']['type']== 2))
                        {
                            echo '<script language="javascript">alert("SU CUENTA A SIDO BLOQUEADA POR INFRINGIR LAS NORMAS DE LA WEB, POR LO QUE NO PODRÁ ACCEDER A ELLA.")
                                    window.location = "../../vista/Eco-login/"</script>';
                                    session_destroy();
                            exit;
                        }
                    //EXTRAER EL ID DEL USER
                    $extraer_id = "SELECT Id_usuario FROM usuario_registrado WHERE Username = '$this->user' && password = '$this->pass'";
                    //Implementar la consulta
                    $extraer=mysqli_query($conex, $extraer_id);
                    //Almacenar el if
                    $guardar= mysqli_fetch_row($extraer);
                    $_SESSION['credenciales']['id'] = $guardar[0];
                    //Redirección a la interfaz inicial
                    header("location:../../vista/Eco-principal/index.php");
                    }else{
                        echo '<script language="javascript">alert("Los datos ingresado son incorrectos")
                                    window.location = "../../vista/Eco-login/"</script>';
                    }
                }
        }
    }




?>