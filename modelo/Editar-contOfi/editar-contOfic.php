<?php
        class editarOfi
            {
                //atributos
                public $Id_cont_oficial;
                public $Titulo_cont_oficial;
                public $Imagenes_cont_oficial;
                public $Video_cont_oficial;
                public $Cuerpo_del_mensaje_cont_oficial;
                public $Id_clasificacion_Ofi;

                public function __construct($Id, $Titulo, $Img, $Vid, $Cuerpo, $clasificacion)
                    {
                        $this->Id_cont_oficial  = $Id;
                        $this->Titulo_cont_oficial  = $Titulo;
                        $this->Imagenes_cont_oficial  = $Img;
                        $this->Video_cont_oficial  = $Vid;
                        $this->Cuerpo_del_mensaje_cont_oficial  = $Cuerpo;
                        $this->Id_clasificacion_Ofi  = $clasificacion;
                    }

                public function editarContOfi()
                    {
                        require_once("../../BsDConexion/adminBD.php");
                        $Conex = ConexDB::ConexionDB("localhost","root","","ecolombia");
                        $Modificar= "UPDATE contenido_oficial_de_la_pagina
                        SET Titulo_cont_oficial = '$this->Titulo_cont_oficial', Imagenes_cont_oficial  = '$this->Imagenes_cont_oficial', Video_cont_oficial = '$this->Video_cont_oficial',
                        Cuerpo_del_mensaje_cont_oficial = '$this->Cuerpo_del_mensaje_cont_oficial', Id_clasificacion_Ofi = '$this->Id_clasificacion_Ofi'
                        WHERE Id_cont_oficial = $this->Id_cont_oficial";



                    //VERIFICAR SI SE REALIZÓ CORRECTAMENTE EL CAMBIO
                    if($Conex->query($Modificar) === TRUE)
                        {
                            echo "Se realizo el cambio satisfactoriamente";
                            header("location: ../../vista/Ver-contOfi/Consultar.php");
                        }else
                            {
                                echo "Ocurrio un error al efectuar la modificación
                                ERROR CODIGO: ". mysqli_errno($Conex). "mensaje: ". mysqli_error($Conex);
                            }
                    }
            }

?>