<!DOCTYPE html>
<html lang="es">
<style>
@import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
</style>
  <head>
    <meta charset="UTF-8">
    <title>Crear Eco-Foro</title>
      <link rel= "shortcut icon" href="Imagenes/iconopag.png" type="imagen/x-icon">
    <meta name="viewport" content="width=device-width, initial=1.0">
    <link rel="stylesheet" href="Css/DisForm.css">
  </head>
  <body>

    <div id="encabezado">
        <?php require_once("../navF/nav.php"); ?>
    </div>

  <div class="tittle">
      <br><br>
      <h1><br> Formulario de creacion para Foro</h1>
  </div>
  <img class="Ecop1" src="Imagenes/EcoPerrinormal.png">
  <img class="Ecop2" src="Imagenes/EcoPerriley.png">
<div class="Form">
  <br><br>
  <h2> Recuerda que los campos con (*) son obligatorios.</h2>
  <br><br>
<form action="" method="post" enctype="multipart/form-data">

    <p>TITULO*</p>
    <label for="TITULO">Ingrese el titulo para su Foro</label>
    <br>
    <input class="ctitulo" type="varchar" maxlength="100" name='Titulo' placeholder="Maximo 100 caracteres permitidos" required>
    <br><br><br>

    <p>IMAGEN</p>
    <label for="imagen">Selecciona una imagen que quieras poner en tu foro</label><br>
    <label for="imagen"> (valido extenciones .png , .jpeg , .jpg y tamaño maximo de 4MG)</label>
    <br><br>
    <input class="archivo" type="file" name='Imagen' accept="image/jpeg, image/png, imagen/jpg">
    <br><br><br>

    <p>VIDEO</p>
    <label for="video">Selecciona un video que quieras poner en tu foro</label><br>
    <label for="video">(valido extenciones .mp4 y tamaño maximo de 45MG)</label>
    <br><br>
    <input class="archivo" type="file" name='Video' accept="video/*">
    <br><br><br>

    <p>CUERPO DEL MENSAJE*</p>
    <label for="mensaje">Mensaje que quiere poner en el foro</label>
    <br>
    <textarea class="cuadro" textarea name='Mensaje' placeholder="Contenido del foro" required></textarea>
    <br><br><br>

    <div class="botones">
    <input type="submit" name="Guardar" value="Guardar" style="background:#39793d; color:#FFFFFF ; width:100px;height:30px;">
    <input type="reset" value="Restaurar" style="width:100px;height:30px;">
          <?php if( ($_SESSION['crendenciales']['type'])==4){?>

      <a href='../../vista/Foros/index.php'><input type="button" type="submit" value="Cancelar" style="background:#92000A ; color:#FFFFFF; width:100px;height:30px;"></a>
          
      <?php }else{?>
      <a href='../../vista/Foros/indexUser.php'><input type="button" type="submit" value="Cancelar" style="background:#92000A ; color:#FFFFFF; width:100px;height:30px;"></a>
          <?php } ?>
  </div>
  <br><br>
</form>
</div>

<br><br>
<div id="footer">
    <?php
    require_once("../../controlador/ForoCrear/controlar.php");
    require "footer.php";
    ?>
</div>
  </body>
</html>
