<?php
require_once("../../BsDConexion/adminBD.php");
        ConexDB::ConexionDB("localhost", "root", "", "ecolombia");

            //Consulta a la base de datos para efectuar la elminación
            class consulta
            {
                //Atributo
                public $Id_usuario;


                    //Construct
                    public function __construct($Id)
                        {
                            $this->Id_usuario = $Id;

                        }
                public static function consulta($Conex,$Id)
                {
                    $consultar = "SELECT Id_usuario, Username FROM usuario_registrado WHERE Id_usuario = $Id";
                    // echo $consultar;
                    $result = mysqli_query($Conex, $consultar);
                    // echo "El id del construct $this->Id_usuario";
                    return $result;


                }
            }
            // echo consulta::consulta($Conex,$Id);
            class DeleteUser
                {
                    //Atributos
                    public $Id_user;


                    //Construct
                    public function __construct($Id)
                        {
                            $this->Id_user = $Id;

                        }

                    //metodos
                    public function eliminarU($Conex,$Id)
                        {
                            $result= consulta::consulta($Conex,$Id);
                            if($result != null)
                            {
                                $eliminar = "DELETE FROM usuario_registrado WHERE Id_usuario =  $Id";

                                //SI SE EFECTUO EL DELET
                                if($Conex->query($eliminar) === TRUE)
                                    {
                                        echo "El usuario se elimino satisfactoriamente";
                                        header("location:../../vista/Eco-Verusers/index.php");
                                    }else
                                        {
                                            echo "Ocurrio un error al efectuar la eliminacion
                                            ERROR CODIGO: ". mysqli_errno($Conex). "mensaje: ". mysqli_error($ConexDel);
                                        }
                            }else
                                {
                                    echo "No existe dicho registro en la base de datos";
                                    //header("location:Consultar.php");
                                }
                        }
                }




?>