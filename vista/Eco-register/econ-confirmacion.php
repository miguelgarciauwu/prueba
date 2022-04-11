<?php 
//RECIVIR LOS DATOS DEL FORMULARIO
    if (isset($_POST['boton_enviar']))
        {
        if (strlen($_POST['nombres']) >= 1 &&           /*El strlen sirve para detectar la cantidad de caracteres ingresados*/
            strlen($_POST['apellidos']) >= 1 &&
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['ciudad']) >= 1 &&
            strlen($_POST['pais']) >= 1 &&
            strlen($_POST['username']) >= 1 &&
            strlen($_POST['contraseña']) >= 1 ){

                /*Variables que almacenen los datos del formulario */
                $nombres = trim($_POST['nombres']);   /*trim sirve para remover el espacio del inicio y del final*/
                $apellidos = trim($_POST['apellidos']);
                $correo = trim($_POST['correo']);
                $ciudad = trim($_POST['ciudad']);
                $pais = trim($_POST['pais']);
                $institucion = trim($_POST['institucion']);
                $username = trim($_POST['username']);
                $contraseña = trim($_POST['contraseña']);
            }
        }
?>