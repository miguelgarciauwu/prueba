<?php

// include "DatosConectDB_.php";
//CLASS conexion Data base
require_once("../../BsDConexion/adminBD.php");

ConexDB::ConexionDB($host, $user, $pass, $NomDB);

    //Creacion de la clase del para visualizar el contenido oficial
    class Ver_ContOfi
        {
                //Metodo ver
                public function VerContOfi($Conex)
                    {
                        //CONOCER DATOS IMPORTANTES PARA LA PAGINACIÓN
                        $Tam_pag= 10;

                            if(isset($_GET["pagina"]))
                            {
                                if($_GET["pagina"]=="1")
                                {
                                    header("location:Consultar.php");
                                }else
                                    {
                                        $Pag=$_GET["pagina"];
                                    }
                            }else
                                {
                                    $Pag= 1;
                                }

                        $empezar_desde= ($Pag -1)*$Tam_pag;


                        //CONOCER LA CANTIDAD DE REGISTROS DE LA BASE DE DATOS
                        $consul = "SELECT Id_cont_oficial,Titulo_cont_oficial, Imagenes_cont_oficial, Video_cont_oficial, Cuerpo_del_mensaje_cont_oficial,Id_clasificacion_Ofi
                                FROM contenido_oficial_de_la_pagina";
                        $aplicar = mysqli_query($Conex, $consul);
                        $Tot_reg= mysqli_num_rows($aplicar);


                        
                        global $Total_pag;
                        $Total_pag= ceil($Tot_reg/$Tam_pag);
                        echo "<br>";
                        ?>
                        <Div class="Text">
                        <?php
                        echo "Hay " . $Tot_reg . " registros en total<br>";
                        echo "Se muestran " . $Tam_pag . " registros por página <br>";
                        echo "Página " . $Pag . " de " . $Total_pag . "<br>";
                        ?>
                        </Div>
                        <?php

                        //EJECUTAR LA CONSULTA APLICANDOLE UN LÍMITE A LA MISMA
                        $consul_lim = "SELECT Id_cont_oficial,Titulo_cont_oficial, Imagenes_cont_oficial, Video_cont_oficial, Cuerpo_del_mensaje_cont_oficial,Id_clasificacion_Ofi
                                FROM contenido_oficial_de_la_pagina LIMIT $empezar_desde,$Tam_pag";
                        global $rta;
                        $rta = mysqli_query($Conex, $consul_lim);
                        return $rta;
                    }

        }
    //BUSCAR  ENTRADAS OFICIALES
    class Buscar
    {
        //ATRIBUTOS
        public $titulo;

        //CONSTRUCTOR
        public function __construct($titulo)
            {
                $this->titulo = $titulo;
            }
        //METODOS
        public function search($Conex)
            {
                $Buscar = "SELECT Id_cont_oficial,Titulo_cont_oficial, Imagenes_cont_oficial, Video_cont_oficial, Cuerpo_del_mensaje_cont_oficial,Id_clasificacion_Ofi
                FROM contenido_oficial_de_la_pagina WHERE Titulo_cont_oficial LIKE '%$this->titulo%'";
                global $Ver;
                $Ver= mysqli_query($Conex,$Buscar);
                return $Ver;
            }
}




?>