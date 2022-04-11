<?php
//Archivo requerido -> Base de datos.
require_once("../../BsDConexion/adminBD.php");
    Class ForosId{

        public $Idusur;
        // Seleccionar los foros de un usuario
        public static function getDatos($conexion, $Id){
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_usuario = '$Id'";
          global $dat;
          $dat = mysqli_query($conexion, $consulta);
          return $dat;
        }
        
        //Traer la entrada de foro con el id seleccionado
        public static function getForo($conexion, $Id){
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_de_entrada = '$Id'";
          global $dat;
          $dat = mysqli_query($conexion, $consulta);
          return $dat;
        }
        //Traer todos los foros con el mismo usuario
        public static function cantidad($conexion,$Id){
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_usuario = '$Id'";
          global $dat2;
          $dat2 = mysqli_query($conexion, $consulta);
          return $dat2;
        }
      }

?>
