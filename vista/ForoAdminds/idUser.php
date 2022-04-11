<?php
  //SESION DE ADMINISTRADOR INICIADA 
    session_start();
?>
<!-- INTERFAZ PARA BUSCAR USUARIO POR ID -->
<!DOCTYPE html>
<html>
<style>
@import url('https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap');
</style>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Css/DisId.css">
  <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
</head>
<body>
	<header>
		<div id="encabezado">
      <?php require_once("../navF/nav.php");?>
    </div>
    <div class="formulario">
        <!-- Este formulario envia el ID ingresado -->
        <form class="form" action="BuscarForosUsers.php" method="get">
          <h2>Escriba la id del usuario que desea buscar</h2>
          <input type="number" class="cuadro" name="Id" min="1" required>
          <input type="submit" value="Siguiente" class="boton" name="siguiente" style="background:#39793d; color:#FFFFFF ; width:100px;height:30px;">
        </form>
    </div>
    <div id="footer">
      <?php require "footer.php";?>
    </div>
  </body>
  </html>
