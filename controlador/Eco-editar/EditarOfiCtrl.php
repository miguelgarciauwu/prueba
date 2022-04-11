<?php
    include "../../modelo/Editar-contOfi/editar-contOfic.php";
    require_once("../../BsDConexion/adminBD.php");
    ConexDB::ConexionDB("localhost", "root","","ecolombia");
    //VALIDAR EL CLIC EN EL BOTON
    if(isset($_POST['actualizar_cont_ofi']))
    {   
        //COMPROBAR SI LLEGARON LOS DATOS DE FormEditar.php
        if(!isset($_POST['Id_cont_ofi']))
            {
                echo "No llegaron los id";
            }else
                {
                    if(($_FILES['imagen_cont_ofi']['name'])== "" || ($_FILES['video_cont_ofi']['name']== ""))
                        {
                            echo "OuO";
                                //CARGAR LAS VARIABLES
                                $Id_cont_ofi = $_POST['Id_cont_ofi'];
                                $Titulo = $_POST['titulo_cont_ofi'];
                                $Cuerpo = $_POST['cuerpo_cont_ofi'];
                                // $ImagenVer = $_POST['imagen_cont_ofi_Ver'];

                                $NomIMgV = $_POST['imagen_cont_ofi_Ver'];
                                $Video = $_POST['video_cont_ofi_Ver'];
                                $Clasificacion = $_POST['clasificacion_cont_ofi'];

                                $editar = new editarOfi($Id_cont_ofi, $Titulo, $NomIMgV, $Video, $Cuerpo, $Clasificacion);
                                $editar->editarContOfi();
                        }
                    if(($_FILES['imagen_cont_ofi']['name']) || ($_FILES['video_cont_ofi']['name']))
                        {
                                //CARGAR LAS VARIABLES
                                $Id_cont_ofi = $_POST['Id_cont_ofi'];
                                $Titulo = $_POST['titulo_cont_ofi'];
                                $Cuerpo = $_POST['cuerpo_cont_ofi'];
                                // $Imagen = $_POST['imagen_cont_ofi'];
                                //Datos imagen
                                $NomIMg = $_FILES['imagen_cont_ofi']['name'];
                                $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ImageContOfi/';
                                move_uploaded_file($_FILES['imagen_cont_ofi']['tmp_name'] , $destino . $NomIMg);
                                //Datos video
                                $nombreVid=$_FILES ['video_cont_ofi']['name'];
                                $destinoV=$_SERVER['DOCUMENT_ROOT'] . '/intranet/VideosContOfi/';
                                move_uploaded_file($_FILES['video_cont_ofi']['tmp_name'] , $destinoV . $nombreVid);

                                $Clasificacion = $_POST['clasificacion_cont_ofi'];

                                $editar = new editarOfi($Id_cont_ofi, $Titulo, $NomIMg, $nombreVid, $Cuerpo, $Clasificacion);
                                $editar->editarContOfi();
                                }
                    if(($_FILES['imagen_cont_ofi']['name']) || ($_FILES['video_cont_ofi']['name']== ""))
                        {
                                //CARGAR LAS VARIABLES
                                $Id_cont_ofi = $_POST['Id_cont_ofi'];
                                $Titulo = $_POST['titulo_cont_ofi'];
                                $Cuerpo = $_POST['cuerpo_cont_ofi'];
                                // $Imagen = $_POST['imagen_cont_ofi'];
                                //Datos imagen
                                $NomIMg = $_FILES['imagen_cont_ofi']['name'];
                                $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ImageContOfi/';
                                move_uploaded_file($_FILES['imagen_cont_ofi']['tmp_name'] , $destino . $NomIMg);
                                //Datos video
                                $Video = $_POST['video_cont_ofi_Ver'];

                                $Clasificacion = $_POST['clasificacion_cont_ofi'];

                                $editar = new editarOfi($Id_cont_ofi, $Titulo, $NomIMg, $Video, $Cuerpo, $Clasificacion);
                                $editar->editarContOfi();
                                }
                    if(($_FILES['imagen_cont_ofi']['name']== "") || ($_FILES['video_cont_ofi']['name']))
                    {
                            //CARGAR LAS VARIABLES
                            $Id_cont_ofi = $_POST['Id_cont_ofi'];
                            $Titulo = $_POST['titulo_cont_ofi'];
                            $Cuerpo = $_POST['cuerpo_cont_ofi'];
                            // $Imagen = $_POST['imagen_cont_ofi'];
                            //Datos imagen
                            $NomIMgV = $_POST['imagen_cont_ofi_Ver'];
                            //Datos video
                            $nombreVid=$_FILES ['video_cont_ofi']['name'];
                            $destinoV=$_SERVER['DOCUMENT_ROOT'] . '/intranet/VideosContOfi/';
                            move_uploaded_file($_FILES['video_cont_ofi']['tmp_name'] , $destinoV . $nombreVid);

                            $Clasificacion = $_POST['clasificacion_cont_ofi'];

                            $editar = new editarOfi($Id_cont_ofi, $Titulo, $NomIMgV, $nombreVid, $Cuerpo, $Clasificacion);
                            $editar->editarContOfi();
                            }
                }



        }



        //REALIZAMOS LA MODIFICACIÓN EN LA BD
    //     $Modificar= "UPDATE contenido_oficial_de_la_pagina
    //                 SET Titulo_cont_oficial = '$Titulo', Imagenes_cont_oficial  = '$Imagen', Video_cont_oficial = '$Video',
    //                 Cuerpo_del_mensaje_cont_oficial = '$Cuerpo', Id_clasificacion_Ofi = '$Clasificacion'
    //                 WHERE Id_cont_oficial = $Id_cont_ofi";
    //     //VERIFICAR SI SE REALIZÓ CORRECTAMENTE EL CAMBIO
    //     $ConexMod= ConectarBD();
    //     if($ConexMod->query($Modificar) === TRUE)
    //         {
    //             echo "Se realizo el cambio satisfactoriamente";
    //             header("location: Consultar.php");
    //         }else
    //             {
    //                 echo "Ocurrio un error al efectuar la modificación
    //                 ERROR CODIGO: ". mysqli_errno($ConexMod). "mensaje: ". mysqli_error($ConexMod);
    //             }
    // }
    //FUNCION PARA CONECTARSE A LA BD
    // function ConectarBD(){
    //     $host ="localhost";
    //     $nomBdD = "eco_lombiav3";
    //     $usuario = "root";
    //     $clave = "";
    //     $ConexMod = new mysqli($host, $usuario, $clave, $nomBdD);
    //     mysqli_set_charset($ConexMod,"utf8");
    //     return $ConexMod;

    // }

    // //COMPROBAR SI SE CONECTO CORRECTAMENTE
    // if($ConexMod->connect_error)
    // {
    //     echo "Ocurrio un error en la conexión";
    //     exit();
    // }







?>