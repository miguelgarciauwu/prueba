<!-- ?php
    //CONEXION A LA BASE DE DATOS
    function conexionDB(){
        $host= "localhost";
        $user= "root";
        $pass = "";
        $NomDB = "eco_lombiav3";
        $conexion= mysqli_connect($host,$user,$pass,$NomDB);
        mysqli_set_charset($conexion,"utf8");
        return $conexion;
    }
    $conexion= conexionDB();
    if($conexion->connect_error)
    {
        echo "Ocurrio un error en la conexión";
        exit();
    }


    //RECIBIR EL ID POR URL
    $Id=$_REQUEST["Fx"];
    $conexion->query("DELETE FROM contenido_oficial_de_la_pagina WHERE Id_cont_oficial={$Id}");
    header("location:Consultar.php");
? -->
<!-- ?php

    // function conexionDB(){
    //     //PARAMETROS
    //         $host= "localhost";
    //         $user= "root";
    //         $pass = "";
    //         $NomDB = "eco_lombiav3";
    //     //CONEXION
    //         $conexion= mysqli_connect($host,$user,$pass,$NomDB);
    //         mysqli_set_charset($conexion,"utf8");
    //     //CONFIRMAR LA CONEXION
    //         if($conexion->connect_error)
    //         {
    //             echo "Ocurrio un error en la conexión";
    //             exit();
    //         }

    //         return $conexion;
    //     }
    // //CONSULTAR LA  VALIDES DE LOS DATOS REGISTRADOS
    // function VerUsuario($conexion $)

?> -->

<?php

include "../../modelo/Eliminar-contOfi/DeleteOfiC.php";
require_once("../../BsDConexion/adminBD.php");
    //COMPROBAR EL CLIC EN EL BOTON
    if(isset($_POST['eliminar_cont_ofi']))
        {
            //COMPROBAR SI LLEGARON LOS DATOS DE FormDelete.php
            if(!isset($_POST['Id_cont_ofi']))
                {
                    echo "No llegaron los datos";
                }else
                    {
                        //DEFINICION DE UNAS VARIABLES
                        $id = $_POST['Id_cont_ofi'];
                        //echo "$id<br>";

                        $Conex= ConexDB::ConexionDB($host, $user, $pass, $NomDB);

                        consulta::consulta($Conex, $id);
                        // $consultar->consulta($Conex);

                        $eliminar= new DeleteOfi($Conex,$id);
                        $eliminar->eliminarO($Conex,$id);



                    }
        }
?>

            <!-- //                 //VERIFICACION DE QUE LOS DATOS QUE SE ELIMINARÁN ESTÁN
            //                 $consultar = "SELECT Id_cont_oficial, Titulo_cont_oficial FROM contenido_oficial_de_la_pagina WHERE Id_cont_oficial = $id";
            //                 $result = $ConexDel->query($consultar);

            //                 if($result != null)
            //                     {
            //                         $eliminar = "DELETE FROM contenido_oficial_de_la_pagina WHERE Id_cont_oficial = $id";

            //                         //SI SE EFECTUO EL DELET
            //                         if($ConexDel->query($eliminar) === TRUE)
            //                             {
            //                                 echo "El registro se elimino satisfactoriamente";
            //                                 header("location:Consultar.php");
            //                             }else
            //                                 {
            //                                     echo "Ocurrio un error al efectuar la eliminacion
            //                                     ERROR CODIGO: ". mysqli_errno($ConexDel). "mensaje: ". mysqli_error($ConexDel);
            //                                 }
            //                     }else
            //                         {
            //                             header("location:Consultar.php");
            //                         }

            //                 }
            //     }

            // //FUNCION PARA CONECTARSE A LA BD
            // function ConectarBD(){
            //     $host ="localhost";
            //     $nomBdD = "eco_lombiav3";
            //     $usuario = "root";
            //     $clave = "";
            //     $ConexDel = new mysqli($host, $usuario, $clave, $nomBdD);
            //     mysqli_set_charset($ConexDel,"utf8");
            //     return $ConexDel;

            // } -->


