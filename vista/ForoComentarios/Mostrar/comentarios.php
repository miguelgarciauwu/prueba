<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="css/ComentarioMostrar.css">
</head>
<body>
<br>
<div class="cuadro" >
  <br>
  <div class="TituloComentarios">
    <label id="TituloComentarios">Comentarios</label>
  </div>
  <?php
  require_once("../../controlador/ForoComentarios/Mostrar/ComenCon.php");
// LIMITAR MUESTRA DE OPCIONES EN ACCION
if(isset($_SESSION['credenciales'])){
  //COMENTARIOS USUARIOS
  if(($_SESSION['crendenciales']['type'])==1){
    $Idusur=$_SESSION['credenciales']['id']; 

    while($info=mysqli_fetch_array($comentarios)){
      $IdU=$info['Id_usuario'];
      $Id=$info['Id_de_comentario'];
      $nombre=$info['Nombre'];
      echo "<div class='cuadro1'>";
      ?>
      <!-- OPCIONES DE COMENTARIO -->
      <form method="post" target ="_blank" action="../ForoComentarios/ReportarComentario/Reportar.php?txreporte= <?php echo $Id;?>">
              <input type="submit" class="btn-Reportar" value='Reportar' id="ReporteAbrir">
            </form>
            <!-- Mostrar opcion eliminar donde el creador sea igual a su sesion iniciada -->
          <?php
            if($Idusur==$IdU){
              ?>
                  <a  href='../../controlador/ForoEliminar/ControladorDelete.php?txcoment=<?php echo $Id?>'>
                    <input type="button"  value='Eliminar' id="EliminarComen">
                  </a>
              <?php
            }else{
              echo "";
            }
          ?>
      <!-- Información de los comentarios -->
      <b id=Autor><?php echo "Autor: "; ?> <?php echo $nombre?></b><br><br>
      <?php
      $Comen=$info['Cuerpo_del_mensaje'];
      echo $Comen."<br>";
      echo "<br>";
      echo "</div>";
    }
  }//COMENTARIOS ADMINISTRADOR 
  else{isset($_SESSION['crendenciales']['type'])==4;
    while($info=mysqli_fetch_array($comentarios)){
      $Id=$info['Id_de_comentario'];
      $nombre=$info['Nombre'];
      echo "<div class='cuadro1'>";
      ?>
      <!-- OPCIONES DE COMENTARIO -->
            <form method="post" target ="_blank" action="../ForoComentarios/ReportarComentario/Reportar.php?txreporte= <?php echo $Id;?>">
              <input type="submit" class="btn-Reportar" value='Reportar' id="ReporteAbrir">
            </form>
            <a  href='../../controlador/ForoEliminar/ControladorDelete.php?txcoment=<?php echo $Id?>'>
              <input type="button"  value='Eliminar' id="EliminarComen">
            </a>
            
      <!-- Información de los comentarios -->
      <b id=Autor><?php echo "Autor: "; ?> <?php echo $nombre?></b><br><br>
      <?php
      $Comen=$info['Cuerpo_del_mensaje'];
      echo $Comen."<br>";
      echo "<br>";
      echo "</div>";
    }
  }
}else{
  //COMENTARIOS PARA INVITADOS
  while($info=mysqli_fetch_array($comentarios)){
    $Id=$info['Id_usuario'];
    $nombre=$info['Nombre'];
    echo "<div class='cuadro1'>";
    echo "<b>Autor:</b> $nombre<br> <br>";
    $Comen=$info['Cuerpo_del_mensaje'];
    echo "<br>$Comen.<br>";
    echo "<br>";
    echo "</div>";
  }
}
  ?>
</div>
</body>
</html>
