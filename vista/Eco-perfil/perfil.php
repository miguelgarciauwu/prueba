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

		<?php session_start();
        require_once("../navF/nav.php");
        require 'sesion.php';
        require '../../controlador/Eco-perfil/perfilctrl.php';
        if(isset($_SESSION['credenciales'])==false){header("../Eco-principal/");}
        //consulta de datos
        $verperfil = new perfil($userv);
        $verperfil->consulta($conex,$verperfil->user);
        $Foto = $verperfil->resultado[0];
        ?>
	</div>
</head>
<body>

<div class="contenido">
<div class=contenido-perfil>
    <form class="datos-perfil">
    <div class="foto-content">
        <input type="hidden" name="sesion" value=" >">
        <label  id="profile">Foto</label>
            <?php
                if(empty($Foto)){
                    ?>
                    <div class="foto"><img src="Imagenes/IconoUsser.png" id="img">
                    <input type='image' readonly='readonly' value=''>
                <?php
                }else
                    { ?>
                        <div class="foto"><img src="../../../../intranet/imageprofile/<?php echo $Foto; ?>" id="img">
                    <?php } ?>
            <input type='image' readonly='readonly' value=''>

            <a href="perfil-editar.php"> <img class="editar-perfil"  id="editar-perfil" src="Iconos/lapiz.png" width="70px" height="50px" >
            </a>
    </div>
    <div class=nombrep><label>Nombre</label><input type="text" readonly="readonly"class="form-datos" value="<?php echo $verperfil->resultado[1];?>"></a></div>
    <div class=apellidos><label>Apellidos</label><input type="text" readonly="readonly" class="form-datos" value="<?php echo $verperfil->resultado[2]?>"></div>
    <div class=correo><label>Correo</label><input type="text" readonly="readonly" class="form-datos" value="<?php  echo $verperfil->resultado[3]?>"></div>
    <div class=ciudad><label>Ciudad</label><input type="text" readonly="readonly" class="form-datos" value="<?php  echo $verperfil->resultado[4]?>"></div>
    <div class=pais><label>Pais</label><input type="text" readonly="readonly" class="form-datos" value="<?php echo $verperfil->resultado[5]?>"></div>
    <div class=institucion><label>Institucion</label><input type="text" readonly="readonly" class="form-datos" value="<?php echo $verperfil->resultado[6]?>"></div>
    <div class=password><label>contraseña</label><input type="text" readonly="readonly" class="form-datos" value="<?php echo $verperfil->resultado[7]?>"></div>
    </form>
</div>
</div>
<div class="fondo-contenido"></div>
<div class="footer">
		<?php require 'footer.php'?>
	</div>
<script src="javascript/perfil.js"></script>
</body>