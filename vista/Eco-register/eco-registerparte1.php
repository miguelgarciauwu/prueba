<!DOCTYPE HTML>
<html lang="es">
    <head>
        <meta charset= "UTF-8">
        <meta http equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <link rel="stylesheet" href="estilos-register.css">
        <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
        <title>Eco-register</title>
    </head>
    <body>
        <!--Formulario del register-->
        <div class="register">
            <form method= "post"class="email" accept-charset="utf-8" action="">
                <label>Correo</label>
                    <input type = "email" id="input-correo" name = "correo"  maxlength="30"  placeholder="Solo_un_correo@gmail.com" autocomplete="off"><br>
                <button type ="submit"  name="boton_enviar" value="Registrar"> Registrar</button><br>
            </form>

        </div>
        <!--Conexion con la base de datos-->
        <?php
        include("../../controlador/Eco-register/Registroparte1Ctrl.php");
        ?>
        <!--Inserción imágen eco.perri-->
        <img src="img/ecoperri.png" id="eco-perri">

        <!--Boton regresar-->
        <div class="Boton_regreso">
            <a href="../Eco-principal/index.php" class="regresar_h3"><h3>Regresar </h3></a>
        </div>

    </body>


</html>


<!-- <label>Foto</label>
<input type="file" id="input-foto" name = "Foto" ><br>-->

<!--<h1 class='ok'>¡Felicidades ya te registraste! </h1> -->