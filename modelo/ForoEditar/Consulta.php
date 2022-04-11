<?php
//CLASE PARA TRAER FORO CON ID
require_once("../../BsDConexion/adminBD.php");
    Class ForosId{
        //Traer la información para poder editarla
        public static function getForo($conexion, $Id){
          $conexion=adminBD::conectar();
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_de_entrada = $Id";
          global $dat;
          $dat = mysqli_query($conexion, $consulta);
          if($dat==null){
            echo "El registro NO fue eliminado".
                'ERROR! CODIGO: ' . mysqli_errno($conexion) . ' mensaje:'  . mysqli_error($conexion);
          }
          return $dat;
        }
    }
?>
