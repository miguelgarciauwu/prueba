<?php 

// -> Foros
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

// -> Modelo/Eco.EditUsers/EditUsuariosC.php
// -> Modelo/Ecoregister/ClassRegistroUs.php
// -> Modelo/Eco-users/VerUsersC.php
// -> Modelo/editar-conOfic.php
// -> Modelo/Eliminar-contOfi/DeleteOfiC.php
// -> Modelo/EliminarUadmin/EliminarUserC.php
// -> Modelo/Insertar-contOfi/Eco-CrearOfic.php
        $host = "localhost";
        $user = "root";
        $pass = "";
        $NomDB = "ecolombia";
class ConexDB
{
    //Atributos Conexion Data Base
    public $host;
    public $user;
    public $pass;
    public $NomDB;

    //Construct
    public function __construct($host, $user, $pass, $NomDB)
        {
            $this->host  = $host = "localhost";
            $this->user  = $user = "root";
            $this->pass  = $pass = "";
            $this->NomDB = $NomDB = "ecolombia";
            
        }
        
    //Metodo conexion
    public static function ConexionDB($host, $user, $pass, $NomDB)
    {
        global $Conex;
        $Conex = mysqli_connect($host, $user, $pass, $NomDB);
        mysqli_set_charset($Conex, "utf8");

        if($Conex->connect_error)
            {
                echo "Ocurrio un error en la conexión";
                exit();
            }
            return ($Conex);
    }
}



// -> Modelo/Eco-login/Prueba.php - Conexion_DB.php
$host="localhost";
$root="root";
$db="ecolombia";
$pass="";
// -> Modelo/Eco-aprende/Eco-aprendeC.php
// -> Modelo/Eco-perfil/perfilmod.php
class conectar{
    public $host = "localhost";
    public $root = "root";
    public $NomDB = "ecolombia";
    public $pass = "";
    public static function conectarse($host, $root, $pass, $NomDB){
        global $conex;
        $conex = mysqli_connect($host, $root, $pass, $NomDB);
        mysqli_set_charset($conex,"utf8");
        if(mysqli_connect_errno()){
            echo '<script language="javascript">alert("Error al conectarse con la base de datos");</script>';
            exit();
        }
        return($conex);

    }
}


?>