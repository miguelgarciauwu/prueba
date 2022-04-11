<?php
//session_start();
//require "../../vista/Eco-perfil/nav.php";
//require "../../vista/Eco-perfil/Conexion_DB.php";
require "../../modelo/Eco-perfil/perfilmod.php";
require_once("../../BsDConexion/adminBD.php");
conectar::conectarse("localhost", "root", "", "ecolombia");
//$userv = ($_SESSION['credenciales']['user']);
//echo "el que estaba xd ".$userv;
if(isset($_POST['dele']))
{   session_start();
    $usera = trim($_POST['sesion']);
    $eliminar= new eliminar($usera);
    $eliminar->eliminaru($conex);
}
//  $verperfil = new perfil($userv);



    
    if(isset($_POST['submit'])){
        if(($_FILES['foto']['name'])== "" )
        {
            echo " sin foto";
            
            //CARGAR LAS VARIABLES
            $sesion= trim($_POST['sesion']);
            $nombre = $_POST['nombre'];
            $apellidos= $_POST['apellido'];
            $correo = $_POST['correo'];
            $ciudad = $_POST['ciudad'];
            $pais = $_POST['pais'];
            $institucion = $_POST['institucion'];
            $pass = $_POST['password'];
            $foto = $_POST['fotoa'];
            echo $nombre."<hr>";
            echo  $foto;
            echo "uwu este es el usuario pasado por el form ".$sesion;
            $editperfil = new editarperfil($nombre,$apellidos, $correo, $ciudad, $pais, $institucion, $pass, $foto,$sesion);
            $editperfil->actualizar($conex);
            echo "<hr>" .$editperfil->user;
            header("location: ../../vista/Eco-perfil/perfil.php");
        } else {
            echo"con foto";
            $sesion= trim($_POST['sesion']);
            $nombre = $_POST['nombre'];
            $apellidos= $_POST['apellido'];
            $correo = $_POST['correo'];
            $ciudad = $_POST['ciudad'];
            $pais = $_POST['pais'];
            $institucion = $_POST['institucion'];
            $pass = $_POST['password'];
            $nombrei= $_FILES['foto']['name'];
            $size= $_FILES['foto']['size'];
            $type= $_FILES['foto']['type'];
            $destinoi=$_SERVER['DOCUMENT_ROOT'] . '/intranet/imageprofile/';
            move_uploaded_file($_FILES['foto']['tmp_name'] , $destinoi . $nombrei);
            $editperfil = new editarperfil($nombre,$apellidos, $correo, $ciudad, $pais, $institucion, $pass, $nombrei,$sesion);
            $editperfil->actualizar($conex);
            header("location: ../../vista/Eco-perfil/perfil.php");
        }



    }


?>