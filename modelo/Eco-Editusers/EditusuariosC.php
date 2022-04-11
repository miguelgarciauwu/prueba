<?php
require_once("../../BsDConexion/adminBD.php");

        class editarUser
            {
                //atributos
                    public $id_usuario;
                    public $Nombre;
                    public $Apellido;
                    public $Correo;
                    public $Ciudad;
                    public $Pais;
                    public $Institucion;
                    public $User;
                    public $Pass;
                    public $Foto;
                    public $Estado;

                public function __construct($Id, $Nombre, $Apellido, $Correo, $Ciudad, $Pais, $Institucion, $User, $Pass, $Foto, $Estado)
                    {
                        $this->id_usuario = $Id;
                        $this->Nombre = $Nombre;
                        $this->Apellido = $Apellido;
                        $this->Correo = $Correo;
                        $this->Ciudad = $Ciudad;
                        $this->Pais = $Pais;
                        $this->Institucion = $Institucion;
                        $this->User = $User;
                        $this->Pass = $Pass;
                        $this->Foto = $Foto;
                        $this->Estado = $Estado;
                    }

                public function editarUsuario()
                    {
                        
                        $Conex = ConexDB::ConexionDB("localhost", "root","","ecolombia");
                        $Modificar= "UPDATE usuario_registrado SET Nombre = '$this->Nombre',
                            Apellidos = '$this->Apellido',
                            Correo = '$this->Correo',
                            Ciudad = '$this->Ciudad',
                            Pais = '$this->Pais',
                            Institucion_a_la_que_pertenece = '$this->Institucion',
                            Username = '$this->User',
                            Password= '$this->Pass',
                            Foto= '$this->Foto',
                            Id_estado= '$this->Estado' 
                            WHERE Id_usuario = '$this->id_usuario'";



                    //VERIFICAR SI SE REALIZÓ CORRECTAMENTE EL CAMBIO
                    if($Conex->query($Modificar) === TRUE)
                        {
                            echo "Se realizo el cambio satisfactoriamente";
                            header("location: ../../vista/Eco-Verusers/");
                        }else
                            {
                                echo "Ocurrio un error al efectuar la modificación
                                ERROR CODIGO: ". mysqli_errno($Conex). "mensaje: ". mysqli_error($Conex);
                            }
                    }
            }

?>