<?php
Class ComentariosId{
  //Funcion para mostrar comentarios en relacion con la entrada de foro
  public static function getComentario($conexion, $Id){
      $consulta="SELECT * FROM comentario, usuario_registrado
      WHERE comentario.Id_usuario=usuario_registrado.Id_usuario and comentario.Id_de_entrada = '$Id'
      ORDER BY Id_de_comentario DESC";
      global $dat;
      $dat = mysqli_query($conexion, $consulta);
      return $dat;
  }
}
?>
