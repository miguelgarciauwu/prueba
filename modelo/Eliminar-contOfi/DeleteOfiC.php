<?php
require_once("../../BsDConexion/adminBD.php");
        conexDB::ConexionDB($host, $user, $pass, $NomDB);

            //Consulta a la base de datos para efectuar la elminación
            class consulta
            {
                //Atributo
                public $Id_cont_oficial;


                    //Construct
                    public function __construct($Id)
                        {
                            $this->Id_cont_oficial = $Id;
                            // echo "Este es el id $Id";
                        }
                public static function consulta($Conex,$Id)
                {
                    $consultar = "SELECT Id_cont_oficial, Titulo_cont_oficial FROM contenido_oficial_de_la_pagina WHERE Id_cont_oficial = '$Id'";
                    // global $result;
                    $result = mysqli_query($Conex, $consultar);
                    return $result;

                }
            }
            class DeleteOfi
                {
                    //Atributos
                    public $Id_cont_oficial;


                    //Construct
                    public function __construct($Id)
                        {
                            $this->Id_cont_oficial = $Id;
                            // echo "Este es el id $Id";
                        }

                    //metodos
                    public function eliminarO($Conex,$Id)
                        {
                            // $result = DeleteOfi::consulta($this->Id_cont_oficial);
                            $result= consulta::consulta($Conex,$Id);
                            // $result->consulta($Conex);
                            if($result != null)
                            {
                                $eliminar = "DELETE FROM contenido_oficial_de_la_pagina WHERE Id_cont_oficial =  $Id";

                                //SI SE EFECTUO EL DELET
                                if($Conex->query($eliminar) === TRUE)
                                    {
                                        echo "El registro se elimino satisfactoriamente";
                                        header("location:../../vista/Ver-contOfi/Consultar.php");
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