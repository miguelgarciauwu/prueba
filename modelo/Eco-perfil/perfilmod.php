<?php
require_once("../../BsDConexion/adminBD.php");

Class perfil{
    // almacena el user
    var $user;
    var $resultado;

    //asignar el valor del session ala variable
    function __construct($userv){
        $this->user=$userv;
    }
    //metodos
    public function consulta($conex ,$user){
        $consultaperfil = "SELECT Foto,Nombre,Apellidos, Correo, Ciudad,Pais,Institucion_a_la_que_pertenece,Password FROM usuario_registrado where Username ='$this->user'";
        $ejeconsultaperfil=mysqli_query($conex, $consultaperfil);
        $almacenarconsultaperfil=mysqli_fetch_row($ejeconsultaperfil);
        //guardar la consulta en una variable
        $this->resultado=$almacenarconsultaperfil;
    }



    }

class editarperfil{
      //datos del formulario del perfil
        public $user;
    public $foto;
    public $nombre;
    public $apellidos;
    public $correo;
    public $ciudad;
    public $pais;
    public $institucion;
    public $pass;
    function __construct($nombre,$apellidos, $correo, $ciudad, $pais, $institucion, $pass, $foto,$user ){
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->correo = $correo;
        $this->ciudad = $ciudad;
        $this->pais = $pais;
        $this->institucion = $institucion;
        $this->pass = $pass;
        $this->foto = $foto;
        $this->user = $user;
    }
    public function actualizar($conex)
    {
        echo "<hr>quiero actualizar uwu";
        echo"<br>". $this->nombre;
        echo"<br>". $this->apellidos;
        echo"<br>". $this->correo;
        echo"<br>". $this->ciudad;
        echo"<br>". $this->pais;
        echo"<br>". $this->institucion;
        echo"<br>". $this->pass;
        echo"<br>". $this->foto;
        echo"<br> este es el hpta user". $this->user;
        //,Apellidos ='$this->apellidos',Ciudad = '$this->ciudad', Pais = '$this->pais', Institucion_a_la_que_pertenece = '$this->institucion',Password ='$this->pass',Foto = '$this->foto'
        $modificar ="UPDATE usuario_registrado SET Nombre ='$this->nombre' ,Apellidos ='$this->apellidos',Ciudad = '$this->ciudad', Pais = '$this->pais', Institucion_a_la_que_pertenece = '$this->institucion',Password ='$this->pass',Foto = '$this->foto'
        WHERE Username ='$this->user'";
        echo "<hr>".$modificar;
        $modify = mysqli_query($conex, $modificar);
        if((mysqli_affected_rows($conex))>0){
            echo"<h1>uuuuuy se actualizo mi pex</h1>";
            header("location:../../vista/Eco-perfil/perfil.php");
        }else
        echo "Ocurrio un error al efectuar la modificación
        ERROR CODIGO: ". mysqli_errno($conex). "mensaje: ". mysqli_error($conex);
        }
}
class eliminar{
    public $user;
    function __construct($user){
        $this->user = $user;
    }
    function eliminaru($conex){
    $delete = "DELETE  FROM usuario_registrado WHERE Username = '$this->user' ";
    $ejecdel= mysqli_query($conex, $delete);
    echo" se jue";
    session_destroy();
    header("location:../../vista/Eco-principal/index.php");
}
}



?>