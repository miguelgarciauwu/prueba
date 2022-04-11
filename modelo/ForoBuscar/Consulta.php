<?php

    Class ForosId{

        public static function cantidad($conexion,$Busqueda){
          $consulta="SELECT * FROM entrada_de_foro,usuario_registrado
          WHERE entrada_de_foro.Id_usuario=usuario_registrado.Id_usuario
          and entrada_de_foro.Titulo_de_entrada LIKE '%$Busqueda%' ";
          global $dat1;
          $dat1 = mysqli_query($conexion, $consulta);
          return $dat1;
        }

        public static function getDatos($conexion,$Busqueda,$Empezar,$Tamano_paginas){
          $consulta="SELECT * FROM entrada_de_foro,usuario_registrado
          WHERE entrada_de_foro.Id_usuario=usuario_registrado.Id_usuario
          and entrada_de_foro.Titulo_de_entrada LIKE '%$Busqueda%' ORDER BY Id_de_entrada DESC LIMIT $Empezar,$Tamano_paginas";
          global $dat;
          $dat = mysqli_query($conexion, $consulta);
          return $dat;
        }

        public static function getForo($conexion, $Id){
          $consulta="SELECT * FROM entrada_de_foro WHERE Id_de_entrada = '$Id'";
          global $dat;
          $dat = mysqli_query($conexion, $consulta);
          return $dat;
      }
}
?>
<?php
Class Report{
  public $IDforo;
  public $Report;
  public function __construct($IDforo, $Report){
    $this->IDforo=$IDforo;
    $this->Report=$Report;
  }
  //Funcion para insertar el reporte de foro
  public function Reportar(){
    $guarda="INSERT INTO registro_de_notificacion_de_entrada_de_foro (Id_opcion_entrada, Id_de_entrada)
    VALUES
    ('$this->Report',
    '$this->IDforo')";
    //Conexion a base de datos
    $conex= adminBD::conectar();
    $ejecutar=mysqli_query($conex, $guarda);      
  }
}
?>
<?php
Class Reportes {
    public static function estadoF($conexion, $Id){
      $consulta="SELECT * FROM registro_de_notificacion_de_entrada_de_foro WHERE Id_de_entrada = $Id";
      $info = mysqli_query($conexion, $consulta);
      return $info;
    }

}

?>
