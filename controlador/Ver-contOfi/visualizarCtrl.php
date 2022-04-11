<?php
    include "../../modelo/Ver-contOfi/CRUDCont-ofiClas.php";
    if(isset($_GET['buscar']))
        {
            if(empty($_GET['consulta']))
                {
                    //CONSULTA GENERAL
                    $consulta = new Ver_ContOfi;
                    $consulta->VerContOfi($Conex);
                }else
                    {
                        $titulo = $_GET['consulta'];
                        //CONSULTA EN BASE A LA BUSQUEDA
                        $buscar = new Buscar($titulo);
                        $buscar->search($Conex);
                    }
        }else
            {
                //CONSULTA GENERAL
                $consulta = new Ver_ContOfi;
                $consulta->VerContOfi($Conex);
            }

?>