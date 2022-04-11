<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="../ForoComentarios/Crear/Css/DisComen.css">
</head>
<body>
<div class="cuadro">
<form action="" method="post">
  <label for="mensaje"><b>Comentar</b></label>
    <br>
    <textarea class="cuadroComen" maxlength="250" textarea name='Comentario' 
    placeholder="Deja tu opinion aqui :3" required></textarea>
    <br>
    <input type="reset" value="Restaurar" style="width:100px;height:30px;">
    <input type="submit" name="guardar" value="Comentar" style="background:#39793d; 
    color:#FFFFFF ; width:100px;height:30px;">
</form>
  </div>
    <?php require_once("../../controlador/ForoComentarios/Crear/controlarC.php"); ?>
</body>
</html>
