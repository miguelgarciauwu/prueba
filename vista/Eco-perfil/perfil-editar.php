<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/perfil.css">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
	<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
</head>
<div class="nav">

		<?php //session_start();
        require_once("../navF/nav.php");
        require 'sesion.php';
        // require 'Conexion_DB.php';
        require '../../controlador/Eco-perfil/perfilctrl.php';
        // conectar::conectarse($host, $root,$pass,$db);
        if(isset($_SESSION['credenciales'])==false){header("location: http://localhost/ejercicios/ecolombia/vista/Eco-principal/");}
        //consulta de datos
        $verperfil = new perfil($userv);
        $verperfil->consulta($conex,$verperfil->user);
            ?>
	</div>
</head>
<body>
<div class="contenido">
<div class=contenido-perfil>
    <form class="datos-perfil" method="POST" enctype="multipart/form-data" action="../../controlador/Eco-perfil/perfilctrl.php">
    <div class="foto-content">
        <input type="hidden"  name="sesion"value=" <?php echo $userv; ?>">
        <label id="profile">foto</label><div class="foto">
        <?php
                if(empty($verperfil->resultado[0])){
                    ?>
                    <div class="foto"><img src="Imagenes/IconoUsser.png" id="img">
                <?php
                }else
                    { ?>
                        <div class="foto"><img src="../../../../intranet/imageprofile/<?php echo  $verperfil->resultado[0];?>" id="img">
                <?php } ?>
    </div>
        <input type="hidden" name="fotoa" value="<?php echo  $verperfil->resultado[0];?>">
        <input type='file' id="bot"  name='foto' >
        <input type="submit" class="guardar-perfil" name='submit'  value ="" id="guardar-perfil">
    </div>
    <div class=nombrep><label>Nombre</label><input type="text" class="form-datos" name='nombre' value="<?php echo $verperfil->resultado[1];?>"></div>
    <div class=apellidos><label>Apellidos</label><input type="text"  class="form-datos" name='apellido' value="<?php echo $verperfil->resultado[2];?>"></div>
    <div class=correo><label>Correo</label><input type="text"  readonly="readonly" name='correo'class="form-datos" value="<?php echo $verperfil->resultado[3];?>"></div>
    <div class=ciudad><label>Ciudad</label><input type="text" class="form-datos" name='ciudad'value="<?php echo $verperfil->resultado[4];?>"></div>
    <div class=pais><label>Pais</label><input type="text"  class="form-datos" name='pais'value="<?php echo $verperfil->resultado[5];?>"></div>
    <div class=institucion><label>Institucion</label><input type="text" class="form-datos" name='institucion'value="<?php echo $verperfil->resultado[6];?>"></div>
    <div class=password><label>contraseña</label><input type="text" class="form-datos" name='password' value="<?php echo $verperfil->resultado[7];?>"></div>
    </form>
</div>

<form class="delete" method="POST" action="../../controlador/Eco-perfil/perfilctrl.php">
<div class="del" id="msgdel" >
    <input type="hidden"  name="sesion"value=" <?php echo $userv; ?>">
    <input type="submit" name="dele"class="dele"  value="" >

</div>
</form>


</div>
<div class="fondo-contenido"></div>
<div class="footer">
		<?php require 'footer.php'?>
	</div>
<script src="javascript/perfil.js"></script>
</body>
</html>