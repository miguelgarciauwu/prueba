<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="../Proyecto/css/nav.css">
    <script src="../Proyecto/javascript/nav.js"></script>
    <?php require_once("../navF/nav.php"); ?>
    <link rel="stylesheet" href="css/FormDelete.css">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Eliminar usuario</title>
</head>
<?php
    require "../../controlador/EliminarUAdmin/EliminarCtrl.php";
    require_once("../../BsDConexion/adminBD.php");

    $Conex= ConexDB::ConexionDB($host, $user, $pass, $NomDB);
    if(($_SESSION['crendenciales']['type'])==4){
        

    }else{;
        header("location:../Eco-principal/");
    }

    //COMPROBAR SI SE RECIBIERON DATOS

    if(empty($_REQUEST['fx']))
        {
            echo "No se recibió ningun dato";
        }else
            {
                $id= $_REQUEST['fx'];

                $result= consulta::consulta($Conex, $id);

                if($result->num_rows > 0)
                    {
                    // conexDB::ConexionDB("localhost","root","","eco_lombiav3");
                        while($traer = mysqli_fetch_array($result))
                        {
                        $id_usuario = $traer['Id_usuario'];
                        $Username = $traer['Username'];
                        $index= $traer['Id_usuario'];
                        }
                    }else
                        {
                            echo "El registro no existe en la base de datos
                            ERROR CODIGO: ". mysqli_errno($Conex). "Mensaje: ". mysqli_error($Conex);
                        $Conex->close();
                        }
            }



?>
    <!-- CREACIÓN DEL FORMULARIO PARA VISUALIZAR LOS DATOS A ELIMINAR -->
    <form action="../../controlador/EliminarUAdmin/EliminarCtrl.php" method="POST" class="FormDelete" >
        <h3 class="h3_delete">El usuario a eliminar</h3><br>
    <label>Id del usuario a eliminar</label>
        <input type="text" name="Id_user" readonly="readonly" value="<?php echo $id_usuario;?>"><br>
    <label>Username del usaurio</label>
        <input type="text" id="input_titulo" name="Username" readonly="readonly" value ="<?php echo $Username;?>"><br>
        <button type = "submit" name="eliminar_user">Eliminar usuario</button>
        <a href = "../Eco-Verusers/index.php" class="text_cancelar">Cancelar</a>
    </form>