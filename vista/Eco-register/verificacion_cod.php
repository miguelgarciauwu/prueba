<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset= "UTF-8">
        <meta http equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <link rel="stylesheet" href="../../vista/Eco-register/verificacion_cod.css">
        <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
        <title>Verificar Corrreo</title>
    </head>
<?php

if (isset($_POST['siguiente']))
    {
        if (
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['codigo']) >= 1
        )
        {
        ?>

        <form method='post' id="form" action="../../controlador/Eco-register/verificacion_codCtrl.php">
        <label>Ingrese el codigo enviado a su correo</label><input type="text" name="code" id="code"value="" maxlength ="4"placeholder="XXXX">
            <input type="hidden" name="correo" value=<?php echo $_POST['correo'];?>>
            <input type="hidden" name="codigo" value=<?php echo $_POST['codigo'];?>>
        <input type="submit" name="verificar" class="verificar" id="verificar"value="verificar">
        </form>
        <?php
        }
    }
?>