<!DOCTYPE HTML>
<!--Conexion con la base de datos-->
<?php
        include("../../controlador/Eco-register/RegistroCtrl.php");

        ?>
<html lang="es">
    <head>
        <meta charset= "UTF-8">
        <meta http equiv="X-UA-compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
        <link rel="stylesheet" href="estilos-register.css">
        <title>Eco-register</title>
    </head>
    <body>
        <!--Formulario del register-->

        <div class="register">
            <form method= "post"class="form" accept-charset="utf-8" action="">
                <label>Nombres*</label>
                    <input type = "text" id="input-nombre" name = "nombres" maxlength="30" placeholder="Nombre" autocomplete="off" ><br>
                <label>Apellidos*</label>
                    <input type = "text" id= "input-apellidos" name = "apellidos"  maxlength="30"  placeholder="Apellidos" autocomplete="off"><br>
                <label>Correo*</label>
                    <input type = "email" id="input-correo" name = "correo" readonly="readonly" maxlength="30" value="<?php echo $_POST['correo'];?>" placeholder="Solo_un_correo@gmail.com" autocomplete="off"><br>
                <label>Ciudad</label>
                    <input type = "text" id="input-ciudad" name = "ciudad" maxlength="50"  placeholder="ciudad"><br>
                <label>Pais</label>
                    <input type = "text" id="input-pais" name = "pais" maxlength="50"  placeholder="Pais"><br>
                <label>Institución </label>
                    <input type ="text" id="input-institucion" name = "institucion" maxlength="100"  placeholder="Solo si pertenece a alguna" ><br>
                <label>Username* </label>
                    <input type ="text" id="input-institucion" name = "username" maxlength="30"  placeholder="Nombre para su usario" autocomplete="off"><br>
                <label>Contraseña para el ingreso*</label>
                    <input type ="password" id="input-contraseña" name = "contraseña" maxlength="20"  placeholder="contraseña" autocomplete="off"><br>

                <button type ="submit"  name="boton_enviar" value="Registrar"> Registrar</button><br>
            </form>

        </div>
        
        
        <!--Inserción imágen eco.perri-->
        <img src="img/ecoperri.png" id="eco-perri2">

        <!--Boton regresar-->
        <div class="Boton_regreso">
            <a href="../Eco-principal/index.php" class="regresar_h3"><h3>Regresar </h3></a>
        </div>

    </body>


</html>


<!-- <label>Foto</label>
<input type="file" id="input-foto" name = "Foto" ><br>-->

<!--<h1 class='ok'>¡Felicidades ya te registraste! </h1> -->