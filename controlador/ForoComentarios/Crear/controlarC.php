<?php
//ID de la session que esta iniciada
$Idusur=$_SESSION['credenciales']['id'];
//Archivos requeridos
require_once("../../modelo/ForoComentarios/Crear/Guardar.php");
require_once("../../BsDConexion/adminBD.php");
//Si se oprimio "Comentar" realiza dicha accion
if(isset($_POST['guardar'])){
  $fcha=Comentario::FechaCreacion();
  $Comen=$_POST['Comentario'];
  $Comentario =new Comentario($fcha,$Comen,$Id,$Idusur);
  $Comentario->GuardarComentario();
}
?>
