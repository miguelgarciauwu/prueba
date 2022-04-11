<?php
    include "../../modelo/Eco-users/VerUsersC.php";
    ConexDB::ConexionDB("localhost", "root", "", "ecolombia");


    if(isset($_GET['buscar']))
        {
            if(empty($_GET['consulta']))
                {
                    //CONSULTA GENERAL
                    $consulta = new Ver_users;
                    $consulta->Verusuarios($Conex);
                }else
                    {
                        $Username = $_GET['consulta'];
                        //CONSULTA EN BASE A LA BUSQUEDA
                        $buscar = new Buscar($Username);
                        $buscar->search($Conex);
                    }
        }else
            {
                //CONSULTA GENERAL
                $consulta = new Ver_users;
                $consulta->Verusuarios($Conex);
            }

?>