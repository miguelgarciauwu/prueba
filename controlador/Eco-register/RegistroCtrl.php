<?php

    //Incluir la clase al archivo
    include("../../modelo/Eco-register/ClassRegistroUs.php");

    //Incluir la clase de conexion con la BD
    // include "../CRUD_cont_ofi/CRUDCont-ofiClas.php";

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
            //CARGAR LOS DATOS EN UNA INSTANCIA PARA ENVIARLOS A LA CLASE
            $Prueba = new InsertarUsuario($nombres,$apellidos,$correo,$ciudad,$pais,$institucion,$username,$contraseña);
            $Prueba->insertarU();
            // $Cone= ConexionDB:: ConexionDB('localhost','root','','eco_lombiav3');
        }else{
            ?>
            <h3 class="bad">Campos faltantes por completar</h3>
            <?php
            }
        if(strlen($_POST['nombres']) < 1 ){
        ?>
            <h3 class="bad_input"> nombres </h3><br>
            <?php
        }
        if(strlen($_POST['apellidos']) < 1 ){
                ?>
                <br><h3 class="bad_input"> apellidos </h3>
                <?php
        }
        if(strlen($_POST['correo']) < 1 ){
                ?>
                <h3 class="bad_input"> correo</h3><br>
                <?php
        }
        if(strlen($_POST['username']) < 1 ){
                ?>
                <h3 class="bad_input"> username</h3><br>
                <?php
        }
        if(strlen($_POST['contraseña']) < 1 ){
                ?>
                <h3 class="bad_input"> contraseña </h3><br>
                <?php
            }
}
?>