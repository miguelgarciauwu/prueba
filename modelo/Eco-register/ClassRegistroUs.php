<link rel="stylesheet" href="../../vista/Eco-register/estilos-register.css">
<?php



//CREACION DE LA CLASE QUE INSERTARÁ LOS DATOS A LA BD
class InsertarUsuario
    {
        //Atributos
        public $Nombre;
        public $Apellido;
        private $Correo;
        private $Ciudad;
        public $Pais;
        public $Institucion_a_la_que_pertenece;
        public $Username;
        public $Password;
        public $code;

        //Constructor
        public function __construct($Nom,$Ape,$Correo,$Ciudad,$Pais,$Institucion,$User,$Pass)
            {
                $this->Nombre =$Nom;
                $this->Apellido =$Ape;
                $this->Correo =$Correo;
                $this->Ciudad =$Ciudad;
                $this->Pais =$Pais;
                $this->Institucion_a_la_que_pertenece =$Institucion;
                $this->Username =$User;
                $this->Password =$Pass;
            }

        //Inserción de datos
      
        public function insertarU()
            {
                require_once("../../BsDConexion/adminBD.php");
                $Conex = ConexDB::ConexionDB($host, $user, $pass, $NomDB);

                $consulta = "INSERT INTO usuario_registrado(Nombre, Apellidos, Correo, Ciudad, Pais, Institucion_a_la_que_pertenece, Username, Password)
                VALUES ('$this->Nombre','$this->Apellido', '$this->Correo','$this->Ciudad','$this->Pais','$this->Institucion_a_la_que_pertenece','$this->Username','$this->Password')";
                $rta= mysqli_query($Conex, $consulta);

                if($rta == True){
                    ?>
                    <script>
                            alert('¡Te has registrado exitosamente!');
                            window.location="../../vista/Eco-principal/index.php";
                        </script>
                    <?php
                }else{
                    ?>
                    <h3 class="bad">Ese username ya esta en uso</h3>
                    <?php
                }


                // if($rta == true)
                //     {
                //         echo "Registro correcto";
                //     }else
                //         {
                //             echo "Registro incorrecto";
                //         }
            }
    }


?>