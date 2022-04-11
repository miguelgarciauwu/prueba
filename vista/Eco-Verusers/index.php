<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="stylesheet" href="EstilosConsul.css">
    <title>Consultar usuarios</title>
</head>
<body>
    <?php
    //Llamada a las clases
    session_start();
    if(($_SESSION['crendenciales']['type'])==4){
    }else{
        header("location:../Eco-principal/");
    }
    ?>
    <a class= 'boton'href="../index-admins/">VOLVER AL INDEX</a>

    <!-- REALIZAR LA CONSULTA DEL USUARIO-->
        <!-- FORMULARIO DE BUSQUEDA -->
        <form method="GET" action="">
            <input type="text" id="consulta" name="consulta" placeholder="Username" required>
            <button type="submit" id="buscar" name="buscar"><img src="img/Lupa.png" width="20px" height="15px" alt="Buscar"></button>
            <a id="reset" href="index.php">Reset</a>
        </form>
    <!-- MOSTRAR EL SELECT DE ACUERDO A LA BUSQUEDA -->
    <?php if(isset($_GET['buscar']))
            {?>
                <div>
                <table width="100%">
                <tr>
                    <?echo "CICLO 1";?>
                    <caption>USUARIOS REGISTRADOS</caption>
                    <tr> <th colspan="13"><?php require "../../controlador/Eco-users/VerUsersCtrl.php"; ?></th> </tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>APELLIDOS</th>
                        <th>CORREO</th>
                        <th>CIUDAD</th>
                        <th>PAIS</th>
                        <th>INSTITUCION</th>
                        <th>USERNAME</th>
                        <th>CONTRASEÑA</th>
                        <th>FOTO</th>
                        <th>ESTADO</th>
                        <th>OP 1</th>
                        <th>OP 2</th>
                </tr>
                <?php


                //  MOSTRAR EL CONTENIDO DE LA TABLA SI SE EFECTUA UNA BUSQUEDA
                    while($visualizar = mysqli_fetch_array($Ver))
                        {

                ?>
                        <tr>
                                <td class = "id"><?php echo $visualizar['Id_usuario']?></td>
                                <td class = "nombre" width="70px" heigth="100px"><?php  $Nombre = substr( $visualizar['Nombre'],0,10); echo $Nombre?></td>
                                <td class = "apellido" min-width: 70px><?php $Apellidos = substr( $visualizar['Apellidos'],0,10); echo $Apellidos?></td>
                                <td class = "correo"><?php echo $visualizar['Correo']?></td>
                                <td class = "ciudad"><?php echo $visualizar['Ciudad']?></td>
                                <td class = "pais"><?php echo $visualizar['Pais']?></td>
                                <td class = "institucion"><?php $Institucion = substr( $visualizar['Institucion_a_la_que_pertenece'],0,10); echo $Institucion?></td>
                                <td class = "user"><?php echo $visualizar['Username']?></td>
                                <td class = "pass"><?php echo $visualizar['Password']?></td>
                                <?php $index= $visualizar['Id_usuario'] ?>
                                <td class="img">
                                <?php
                                if($visualizar['Foto'] == ""){
                                    echo "";
                                }else{
                                ?>
                                <img src= "/intranet/imageprofile/<?php echo $visualizar['Foto'];?>" width= "100px" height= "100px">

                                <?php } ?>
                                </td>
                                    <td class = "estado"><?php echo $visualizar['Id_estado']?></td>
                                    <td class ="opcionesConsul1"><a href="../Eco-Editusers/index.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Editar"></a></td>
                                    <td class ="opcionesConsul2"><a href="../EliminarUAdmin/FormDelet.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Eliminar"></a></td>
                <?php }?>
                                </td>
                        </tr>

            </table>
            </div>
            <?php

            //CONSULTA SI NO SE REALIZA UNA BUSQUEDA
            }else
                {
            ?>
                <div>
                    <table width="100%">
                    <tr>
                        <caption>USUARIOS REGISTRADOS</caption>
                        <tr> <th colspan="13"><?php require "../../controlador/Eco-users/VerUsersCtrl.php"; ?></th> </tr>
                            <th>ID</th>
                            <th>NOMBRE</th>
                            <th>APELLIDOS</th>
                            <th>CORREO</th>
                            <th>CIUDAD</th>
                            <th>PAIS</th>
                            <th>INSTITUCION</th>
                            <th>USERNAME</th>
                            <th>CONTRASEÑA</th>
                            <th>FOTO</th>
                            <th>ESTADO</th>
                            <th>OP 1</th>
                            <th>OP 2</th>
                    </tr>
                    <?php
                    //  MOSTRAR TODO EL CONTENIDO DE LA TABLA usuario_registrado
                        while($visualizar = mysqli_fetch_array($rta))
                            {

                    ?>
                            <tr>
                                    <td class = "id"><?php echo $visualizar['Id_usuario']?></td>
                                    <td class = "nombre" width="70px" heigth="100px"><?php  $Nombre = substr( $visualizar['Nombre'],0,10); echo $Nombre?></td>
                                    <td class = "apellido" min-width: 70px><?php $Apellidos = substr( $visualizar['Apellidos'],0,10); echo $Apellidos?></td>
                                    <td class = "correo"><?php echo $visualizar['Correo']?></td>
                                    <td class = "ciudad"><?php echo $visualizar['Ciudad']?></td>
                                    <td class = "pais"><?php echo $visualizar['Pais']?></td>
                                    <td class = "institucion"><?php $Institucion = substr( $visualizar['Institucion_a_la_que_pertenece'],0,10); echo $Institucion?></td>
                                    <td class = "user"><?php echo $visualizar['Username']?></td>
                                    <td class = "pass"><?php echo $visualizar['Password']?></td>
                                    <?php $index= $visualizar['Id_usuario'] ?>
                                    <td class="img">
                                    <?php
                                    if($visualizar['Foto'] == ""){
                                        echo "";
                                    }else{
                                    ?>
                                    <img src= "/intranet/imageprofile/<?php echo $visualizar['Foto'];?>" width= "100px" height= "100px">

                                    <?php } ?>
                                    </td>
                                    <td class = "estado"><?php echo $visualizar['Id_estado']?></td>
                                    <td class ="opcionesConsul1"><a href="../Eco-Editusers/index.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Editar"></a></td>
                                    <td class ="opcionesConsul2"><a href="../EliminarUAdmin/FormDelet.php?fx=<?php echo $index?>"><input type="button" class="Texto" name="Elim" value="Eliminar"></a></td>
                    <?php }?>
                            </tr>
                </table>
                </div>

                <?php
                //--------------------------------------PAGINACIÓN-----------------------------------------------------------

                for($i=1; $i<= $Total_pag; $i++)
                    {
                        echo "<a class='Paginacion' href=' ?Pag=" . $i . "'>" .$i. "</a>";
                    }
            }
?>
</body>
</html>
<?php

?>