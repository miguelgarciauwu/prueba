<?php

    Class ForosId{

        public static function getDatos($conexion, $Id){
          $consulta="SELECT * FROM usuario_registrado WHERE Id_usuario = '$Id'";
          global $dat;
          $dat = mysqli_query($conexion, $consulta);
          return $dat;
        }

        public static function getForo($Id, $Empezar, $Tamano_paginas){
          $conexion = adminBD::conectar();
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_usuario = '$Id' ORDER BY Id_de_entrada
          DESC LIMIT $Empezar,$Tamano_paginas";
          global $dat1;
          $dat1 = mysqli_query($conexion, $consulta);
          return $dat1;
        }

        public static function getDatoF($conexion, $IdF){
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_de_entrada = '$IdF'";
          global $dat1;
          $dat1 = mysqli_query($conexion, $consulta);
          return $dat1;
        }

        public static function cantidad($conexion,$Id){
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_usuario = '$Id'";
          global $dat2;
          $dat2 = mysqli_query($conexion, $consulta);
          return $dat2;
        }

        public static function estadoF($conexion, $Id){
          $consulta="SELECT * FROM registro_de_notificacion_de_entrada_de_foro WHERE Id_de_entrada = $Id";
          $info = mysqli_query($conexion, $consulta);
          return $info;
        }
      }

?>
