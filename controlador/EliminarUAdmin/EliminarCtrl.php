<?php

include "../../modelo/EliminarUAdmin/EliminarUserC.php";
    //COMPROBAR EL CLIC EN EL BOTON
    if(isset($_POST['eliminar_user']))
        {
            //COMPROBAR SI LLEGARON LOS DATOS DE FormDelete.php
            if(!isset($_POST['Id_user']))
                {
                    echo "No llegaron los datos";
                }else
                    {
                        //DEFINICION DE UNAS VARIABLES
                        $id = $_POST['Id_user'];
                        //echo "$id<br>";
                        require_once("../../BsDConexion/adminBD.php");
                        $Conex= ConexDB::ConexionDB($host, $user, $pass, $NomDB);

                        consulta::consulta($Conex, $id);

                        $eliminar= new DeleteUser($Conex,$id);
                        $eliminar->eliminarU($Conex,$id);



                    }
        }
?>