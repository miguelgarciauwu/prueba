<!DOCTYPE html>
<html lang="es">
<style>
@import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
</style>
  <head>
    <meta charset="UTF-8">
    <title>Editar Eco-Foro</title>
      <link rel= "shortcut icon" href="Imagenes/iconopag.png" type="imagen/x-icon">
    <meta name="viewport" content="width=device-width, initial=1.0">
    <link rel="stylesheet" href="Css/DisEditar.css">
  </head>
  <body>

    <div id="encabezado">
        <?php require_once("../navF/nav.php"); ?>
    </div>
  <!-- Inicio de formulario para editar -->
  <div class="tittle">
      <br><br>
      <h1><br> Formulario actualizacion de Foro </h1>
  </div>
  <img class="Ecop1" src="Imagenes/EcoPerrinormal.png">
  <img class="Ecop2" src="Imagenes/EcoPerriley.png">
<div class="Form">
  <br><br>
  <h2> Recuerda que los campos con (*) son obligatorios.</h2>
  <br><br>

  <?php
    //ID DE LA ENTRADA DE FORO A EDITAR
    $Id = $_REQUEST['tx'];
    require_once("../../controlador/ForoEditar/ForoCon.php");
    $Datos = mysqli_fetch_array($resultado);
    //Datos principales, Titulo y cuerpo.
    $Titulo=$Datos['Titulo_de_entrada'];
    $Cuerpo = $Datos['Cuerpo_del_mensaje_de_entrada'];
  ?>
<form action="" method="post" enctype="multipart/form-data">
    <p>TITULO*</p>
    <label for="TITULO">Ingrese el titulo para su Foro</label>
    <br>
    <input class="ctitulo" type="varchar" maxlength="100" name='titulo' placeholder="Maximo 100 caracteres permitidos" 
    value="<?php echo $Titulo;?>"required>
    <br><br><br>

    <!-- No se muestran las imagenes o videos, solo se muestran opciones de actualización -->
    <p>IMAGEN</p>
    <label for="imagen">Selecciona una imagen que quieras poner en tu foro</label><br>
    <label for="imagen"> (valido extenciones .png , .jpeg , .jpg y tamaño maximo de 4MG)</label>
    <br><br>
    <input class="archivo" type="file" name='imag' accept="image/jpeg, image/png, imagen/jpg">
    <br><br><br>
    <p>VIDEO</p>
    <label for="video">Selecciona un video que quieras poner en tu foro</label><br>
    <label for="video">(valido extenciones .mp4 y tamaño maximo de 45MG)</label>
    <br><br>
    <input class="archivo" type="file" name='vid' accept="video/*">
    <br><br><br>

    <p>CUERPO DEL MENSAJE*</p>
    <label for="mensaje">Mensaje que quiere poner en el foro</label>
    <br>
    <textarea class="cuadro" name='mensaje' placeholder="Contenido del foro" required><?php echo $Cuerpo;?></textarea>
    <br><br><br>
    <!-- Botones para confirmar -->
    <div class="botones">
    <input type="submit" value="Actualizar" name="actualizar" style="background:#39793d; color:#FFFFFF ; width:100px;height:30px;">
    <input type="reset" value="Restaurar" style="width:100px;height:30px;">
    <?php if( ($_SESSION['crendenciales']['type'])==4){?>
            <a href="../Foros/index.php">
            <input type="button" value="Cancelar" style="background:#92000A ; color:#FFFFFF; width:100px;height:30px;">
            </a> <?php 
          }else{?>
          <a href="../ForoUsers/MisForos.php">
            <input type="button" value="Cancelar" style="background:#92000A ; color:#FFFFFF; width:100px;height:30px;">
            </a> <?php 
          } ?>
  </div>
  <br><br>
</form>
</div>
<!-- Pie de pagina  -->
<br><br>
<div id="footer">
    <?php
    require_once("../../controlador/ForoEditar/controlar.php");
    require "footer.php";
    ?>
</div>
<script src="javascript/popup.js"></script>
  </body>
</html>
