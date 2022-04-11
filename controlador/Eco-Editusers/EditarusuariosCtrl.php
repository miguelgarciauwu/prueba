<?php
    include "../../modelo/Eco-Editusers/EditusuariosC.php";
    require_once("../../BsDConexion/adminBD.php");
    ConexDB::ConexionDB("localhost", "root","","ecolombia");
    //VALIDAR EL CLIC EN EL BOTON
    if(isset($_POST['actualizar_usuario']))
    {
        //COMPROBAR SI LLEGARON LOS DATOS DE FormEditar.php
        if(!isset($_POST['Id_user']))
            {
                echo "No llegaron los id";
            }else
                {
                    if(($_FILES['imagen_usuario']['name'])== "" )
                        {
                            echo "OuO ";
                                //CARGAR LAS VARIABLES
                                $Id_usuario = $_POST['Id_user'];
                                $Nombre = $_POST['Nombre'];
                                $Apellidos = $_POST['Apellidos'];
                                $Correo = $_POST['Correo'];
                                $Ciudad = $_POST['Ciudad'];
                                $Pais = $_POST['Pais'];
                                $Institucion = $_POST['Institucion'];
                                $User = $_POST['User'];
                                $Contraseña = $_POST['Contraseña'];
                                $FotoV = $_POST['imagen_usuarioVer'];
                                $Estado = $_POST['Estado'];
                                echo "ESTE ES EL DATO QUE LLEGA ". $Estado. "<br>";

                                $editar = new editarUser($Id_usuario, $Nombre, $Apellidos, $Correo, $Ciudad, $Pais, $Institucion, $User, $Contraseña, $FotoV, $Estado);
                                $editar->editarUsuario();
                        }
                        if(($_FILES['imagen_usuario']['name']))
                        {
                            echo "UwU ";
                                //CARGAR LAS VARIABLES
                                $Id_usuario = $_POST['Id_user'];
                                $Nombre = $_POST['Nombre'];
                                $Apellidos = $_POST['Apellidos'];
                                $Correo = $_POST['Correo'];
                                $Ciudad = $_POST['Ciudad'];
                                $Pais = $_POST['Pais'];
                                $Institucion = $_POST['Institucion'];
                                $User = $_POST['User'];
                                $Contraseña = $_POST['Contraseña'];
                                //Datos foto
                                $NomIMg = $_FILES['imagen_usuario']['name'];
                                $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/imageprofile/';
                                move_uploaded_file($_FILES['imagen_usuario']['tmp_name'] , $destino . $NomIMg);

                                $Estado = $_POST['Estado'];

                                $editar = new editarUser($Id_usuario, $Nombre, $Apellidos, $Correo, $Ciudad, $Pais, $Institucion, $User, $Contraseña, $NomIMg, $Estado);
                                $editar->editarUsuario();
                        }
                }



        }

?>