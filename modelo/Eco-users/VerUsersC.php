<?php

// include "DatosConectDB_.php";
//CLASS conexion Data base
require_once("../../BsDConexion/adminBD.php");

    
//Creacion de la clase del para visualizar el contenido oficial
class Ver_users
    {
            //Metodo ver
            public function Verusuarios($Conex)
                {
                    //TAMAÑO DE LAS PÁGINAS
                    $Tam_pag= 10;
                    //ASIGNAR A LA VARIABLE $Pag EL VALOR SELECCIONADO POR EL USUARIO
                    if(isset($_GET['Pag']))
                        {
                            if($_GET['Pag']=="1")
                            {
                                header("location:index.php");
                            }else
                                {
                                    $Pag=$_GET["Pag"];
                                }
                        }else
                            {
                                $Pag= 1;
                            }

                    $empezar_desde= ($Pag - 1)* $Tam_pag;

                    //CONSULTAR CUANTOS REGISTROS HAY EN LA DB
                    $consul = "SELECT Id_usuario, Nombre, Apellidos, Correo, Ciudad, Pais, Institucion_a_la_que_pertenece, Username, Password, Foto, Id_estado
                            FROM usuario_registrado";
                    $conteo = mysqli_query($Conex, $consul);

                    //CONOCER LOS REGISTROS EXISTENTES EN LA BD
                    $Tot_reg= mysqli_num_rows($conteo);


                    //PÁGINAS TOTALES DEL PAGINADO
                    global $Total_pag;
                    $Total_pag=ceil($Tot_reg / $Tam_pag);
                    //INFORMACIÓN DEL PAGINADO
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
                    //EJECUTAR LA CONSULTA SQL LIMITANDO LAS VISUALIZACIONES DE LA MISMA
                    $consul_lim = "SELECT Id_usuario, Nombre, Apellidos, Correo, Ciudad, Pais, Institucion_a_la_que_pertenece, Username, Password, Foto, Id_estado
                    FROM usuario_registrado LIMIT $empezar_desde,$Tam_pag";
                    global $rta;
                    $rta= mysqli_query($Conex,$consul_lim);
                    return $rta;
                }

    }
    //BUSCAR  USERS
    class Buscar
    {
        //ATRIBUTOS
        public $Username;

        //CONSTRUCTOR
        public function __construct($User)
            {
                $this->Username= $User;
            }
        //METODOS
        public function search($Conex)
            {
                $Buscar = "SELECT Id_usuario, Nombre, Apellidos, Correo, Ciudad, Pais, Institucion_a_la_que_pertenece, Username, Password, Foto, Id_estado
                    FROM usuario_registrado WHERE Username = '$this->Username'";
                    global $Ver;
                    $Ver= mysqli_query($Conex,$Buscar);
                    return $Ver;
            }
    }
?>