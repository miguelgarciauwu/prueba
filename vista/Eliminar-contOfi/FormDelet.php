<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="stylesheet" href="../Proyecto/css/nav.css">
    <title>Eliminar Cont_Oficial</title>
</head>
<script src="../Proyecto/javascript/nav.js"></script>
<?php require_once("../navF/nav.php"); ?>
<link rel="stylesheet" href="css/FormDelete.css">
<?php
    require "../../controlador/Eliminar-contOfi/DeleteCtrl.php";
    require_once("../../BsDConexion/adminBD.php");

    $Conex= conexDB::ConexionDB($host, $user, $pass, $NomDB);
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
                        $id_cont_ofi = $traer['Id_cont_oficial'];
                        $titulo_cont_ofi = $traer['Titulo_cont_oficial'];
                        $index= $traer['Id_cont_oficial'];
                        }
                    }else
                        {
                            echo "El registro no existe en la base de datos
                            ERROR CODIGO: ". mysqli_errno($conexion). "Mensaje: ". mysqli_error($conexion);
                        $conexion->close();
                        }

            }



?>
    <!-- CREACIÓN DEL FORMULARIO PARA VISUALIZAR LOS DATOS A ELIMINAR -->
    <form action="../../controlador/Eliminar-contOfi/DeleteCtrl.php" method="POST" class="FormDelete" >
        <h3 class="h3_delete">El formulario a eliminar</h3><br>
    <label>Id de la entrada a eliminar</label>
        <input type="text" name="Id_cont_ofi" readonly="readonly" value="<?php echo $id_cont_ofi;?>"><br>
    <label>Titulo de la entrada a eliminar</label>
        <input type="text" id="input_titulo" name="titulo_cont_ofi" readonly="readonly" value ="<?php echo $titulo_cont_ofi;?>"><br>
        <button type = "submit" name="eliminar_cont_ofi">Eliminar entrada</button>
        <a href = "../Ver-contOfi/Consultar.php" class="text_cancelar">Cancelar</a>
        </form>


