<?php

class editarUsuario{
public static function editar($conexion,$Nombre, $Apellido, $Correo, $Ciudad, $Pais, $Institucion, $User, $Pass,$Estado, $id_usuario)
                    {
                        $Modificar= "UPDATE usuario_registrado SET Nombre = '$Nombre',
                            Apellidos = '$Apellido',
                            Correo = '$Correo',
                            Ciudad = '$Ciudad',
                            Pais = '$Pais',
                            Institucion_a_la_que_pertenece = '$Institucion',
                            Username = '$User',
                            Password= '$Pass',
                            Id_estado= '$Estado'
                            WHERE Id_usuario = '$id_usuario'";
                            $resultado= mysqli_query($conexion,$Modificar);
                            $Result = mysqli_affected_rows($conexion);
                            return $Result;
                    }
                }

            class adminBD{
                    public static function conectar(){
                        $user = "root";
                        $pass = "";
                        $servidor = "localhost";
                        $db = "ecolombia";
                        $conexion = new mysqli($servidor, $user, $pass, $db);
                        $conexion->set_charset("utf8");
                        if($conexion->connect_error){
                            echo "Error al conectarse!!". connect_errno($conexion);
                            exit();
                        }
                        return $conexion;
                    }
                }
?>