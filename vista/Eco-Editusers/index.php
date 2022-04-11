<?php require_once("../navF/nav.php");
        include "../../controlador/Eco-Editusers/EditarusuariosCtrl.php";
        require_once("../../BsDConexion/adminBD.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/FormEdit.css">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Editar usuario</title>
</head>
<body>


<?php

if(($_SESSION['crendenciales']['type'])==4){


}else{;
    header("location: ../Eco-principal");
}
    if(empty($_REQUEST['fx'])){
        echo "No se recibió ningun dato";

    }else
        {
            //ALMACENAMOS EL $_REQUEST EN UNA VARIABLE
            $id = $_REQUEST['fx'];
            //CONEXION CON LA BD
                require_once("../../BsDConexion/adminBD.php");
                $conexion= mysqli_connect($host,$root,$pass,$NomDB);
                mysqli_set_charset($conexion,"utf8");
            //COMPROBAR EL ESTADO DE LA CONEXION
            if($conexion->connect_error)
            {
                echo "Ocurrio un error en la conexión";
                exit();
            }


        $consulta = "SELECT * FROM usuario_registrado WHERE Id_usuario =$id";
        $Resul = $conexion->query($consulta);

        if($Resul->num_rows > 0)
        {
            while($ver= $Resul->fetch_assoc())
                {
                    $id_usuario = ($ver['Id_usuario']);
                    $Nombre = ($ver['Nombre']);
                    $Apellido = ($ver['Apellidos']);
                    $Correo = ($ver['Correo']);
                    $Ciudad = ($ver['Ciudad']);
                    $Pais = ($ver['Pais']);
                    $Institucion = ($ver['Institucion_a_la_que_pertenece']);
                    $User = ($ver['Username']);
                    $Pass = ($ver['Password']);
                    $Foto = ($ver['Foto']);
                    $Estado = ($ver['Id_estado']);
                }
        }else
            {
                echo "El registro no existe en la base de datos
                ERROR CODIGO: ". mysqli_errno($conexion). "Mensaje: ". mysqli_error($conexion);
            }
            $conexion->close();
        }


?>

        <!-- CREACION DEL FORMULARIPO PARA LA VISUALIZACION DE LOS DATOS -->

            <form action="../../controlador/Eco-Editusers/EditarusuariosCtrl.php" method="POST" class="form" enctype="multipart/form-data">
                <!-- campo del id -->
                <input type="hidden" name="Id_user" value="<?php echo $id_usuario;?>">
                <!-- campo del nombre -->
                <label>Nombre</label><br>
                    <input type="text" id="input_nombre" name="Nombre" value="<?php echo $Nombre;?>" maxlength="30"><br>
                <!-- campo del  apellido-->
                <label>Apellidos</label><br>
                    <input type="text" id="input_apellido" name="Apellidos" value="<?php echo $Apellido;?>"maxlength="30"><br>
                <!-- campo del  correo-->
                <label>Correo</label><br>
                    <input type="text" id="input_correo" name="Correo" value="<?php echo $Correo;?>"maxlength="30"><br>
                <!-- campo de la ciudad-->
                <label>Ciudad</label><br>
                    <input type="text" id="input_ciudad" name="Ciudad" value="<?php echo $Ciudad;?>"maxlength="50"><br>
                <!-- campo del pais-->
                <label>Pais</label><br>
                    <input type="text" id="input_pais" name="Pais" value="<?php echo $Pais;?>"maxlength="50"><br>
                <!-- campo de la institucion-->
                <label>Institución</label><br>
                    <input type="text" id="input_institucion" name="Institucion" value="<?php echo $Institucion;?>"maxlength="100"><br>
                <!-- campo del username -->
                <label>Username</label><br>
                    <input type="text" id="input_user" name="User" value="<?php echo $User;?>"maxlength="30"><br>
                <!-- campo de la contraseña-->
                <label>contraseña</label><br>
                    <input type="text" id="input_contraseña" name="Contraseña" value="<?php echo $Pass;?>"maxlength="20"><br>
                <!-- campo de la foto-->
                <label>Nombre foto de perfil</label><br>
                    <input type="text" id="input_imagen" name="imagen_usuarioVer" readonly="readonly" value="<?php echo $Foto;?>"><br>
                    <input type ="file" id="input_imagen2" name="imagen_usuario" value="<?php echo $Foto;?>"  accept="image/jpeg, image/png, imagen/jpg"><br>
                    <!-- Definir la ruta en la que se almacenará la imagen insertada -->
                    <?php $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/imageprofile/'; ?>
                <!-- campo del estado-->
                <label>Estado</label><br>
                    <select name="Estado" Id="Opciones">
                        <option value="<?php echo $Estado;?>">
                            <?php
                                switch($Estado)
                                    {
                                        case 1: echo "ACTUAL (Activo)"; break;
                                        case 2: echo "ACTUAL (Bloqueado)"; break;
                                        case 4: echo "ACTUAL (Admin)"; break;
                                    }
                            ?>
                        </option>
                        <option value= 1>Activo</option>
                        <option value= 2>Bloqueado</option>
                        <option value= 4>Admin</option>
                    </select>
                    <!-- <input type="text" id="input_estado" name="Estado" value="<?php echo $Estado;?>"><br> -->
                <!-- Botones -->
                <button type = "submit" name="actualizar_usuario">Actualizar usuario</button>
                <!-- <a href = "Consultar.php" class ="text_cancelar"><input type="button" name= "cancelar-delet" id="cancelar-delet" value="Cancelar">cancelar</a> -->
                <a href = "../Eco-Verusers/index.php" class ="text_cancelar">cancelar</a>
            </form>

</body>
</html>