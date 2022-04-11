
<?php
    // CLASS CONECTION
    require_once("../../BsDConexion/adminBD.php");
        //CLASE INSERTAR CONTENIDO OFICIAL
        class crearContOfi
            {
                //Atributos
                public $Titulo_cont_oficial;
                public $Imagen_cont_oficial;
                public $Video_cont_oficial;
                public $Cuerpo_del_mensaje_cont_oficial;
                public $Id_clasificacion_Ofi;
                public $Id_usuario;

                //Constructor
                public function __construct($Titulo, $Img, $Vid, $Cuerpo, $clasificacion ,$usuario)
                    {
                        $this->Titulo_cont_oficial  = $Titulo;
                        $this->Imagen_cont_oficial  = $Img;
                        $this->Video_cont_oficial  = $Vid;
                        $this->Cuerpo_del_mensaje_cont_oficial  = $Cuerpo;
                        $this->Id_clasificacion_Ofi  = $clasificacion;
                        $this->Id_usuario = $usuario;
                    }

                //Metodos
                public function insertarOfi()
                    {
                        $Conex = ConexDB::ConexionDB("localhost", "root","","ecolombia");
                        $insert = "INSERT INTO contenido_oficial_de_la_pagina(Titulo_cont_oficial, Imagenes_cont_oficial, Video_cont_oficial, Cuerpo_del_mensaje_cont_oficial, Id_clasificacion_Ofi, Id_usuario)
                        VALUES (
                            '$this->Titulo_cont_oficial',
                            '$this->Imagen_cont_oficial',
                            '$this->Video_cont_oficial',
                            '$this->Cuerpo_del_mensaje_cont_oficial',
                            '$this->Id_clasificacion_Ofi',
                            '$this->Id_usuario')";
                        // echo "Esta fue la insercion " . $insert;
                        $resultado = mysqli_query ($Conex, $insert);
                        if($resultado){
                            mysqli_close($Conex);
                            ?>
                            <script language="javascript">alert("Entrada registrada exitosamente, para mayor información puede buscarla en la visualización de entradas")
                            window.location = "../../vista/Ver-contOfi/Consultar.php"; </script>';
                            <?php

                        }else
                            {
                                ?>
                                <h3 class= "Error">Ocurrió un error verifique que llenó todos los campos</h3>
                                <?php
                            }
                    }
            }



?>