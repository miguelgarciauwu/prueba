<?php
//CLASE PARA ACTUALIZAR Y VERIFICAR INFORMACIÓN DE FORO
require_once("../../BsDConexion/adminBD.php");
  class Foro{
    public $TituloF;
    public $fechaF;
    public $ImagenF;
    public $VideoF;
    public $MensajeF;
    public $IdusurF;
    public function __construct($Titulo,$fcha,$nombreImg,$nombreVid,$Mensaje){
      $this->TituloF=$Titulo;
      $this->fechaF=$fcha;
      $this->ImagenF=$nombreImg;
      $this->VideoF=$nombreVid;
      $this->MensajeF=$Mensaje;
    }
    public static function VerificarImg(){
      $nombreImg=$_FILES ['imag']['name'];
      $tipoImg=$_FILES ['imag']['type'];
      $tamaImg=$_FILES ['imag']['size'];
      if($tamaImg<=01){
        echo "<br>No se ha cargado Imagen<br>";
      }else{
        if ($tamaImg<=5000000){
          if($tipoImg=="image/jpeg" || $tipoImg=="image/jpg" || $tipoImg=="image/png"){
            echo "<br>Se ha cargado Imagen";
        $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ContenidoForos/';
        move_uploaded_file($_FILES['imag']['tmp_name'] , $destino . $nombreImg);
          return $nombreImg;
        }else{
          echo "1.solo se permiten archivos con extenccion .png , .jpeg , .jpg <br>";
          }
        }else{
          echo"Tamaño de imagen demaciado grande, tamaño permidito es menos de 5mg <br>";
        }
      }
    }
    public static function VerificarVid(){
      $nombreVid=$_FILES ['vid']['name'];
      $tipoVid=$_FILES ['vid']['type'];
      $tamaVid=$_FILES ['vid']['size'];
      if($tamaVid<=01){
        echo "<br>No se ha cargado Video<br>";
      }else{
        if ($tamaVid<=45000000){
          if($tipoVid=="video/mp4"){
            echo "<br>Se ha cargado Video";
            $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ContenidoForos/';
            move_uploaded_file($_FILES['vid']['tmp_name'] , $destino . $nombreVid);
            return $nombreVid;
          }else{
            echo "1.solo se permiten archivos con extenccion .mp4 <br>";
          }
        }else{
          echo"Tamaño de video demaciado grande, tamaño permidito es menos de 50mg <br>";
        }
      }
    }
    public static function FechaCreacion(){
      $fcha = date("Y;m;d");
      return $fcha;
    }
    //Funcion para actualizar foro completo
    public function ActualizarForo($Id){
      $guardar= "UPDATE entrada_de_foro SET
      Titulo_de_entrada='$this->TituloF' ,
      Fecha='$this->fechaF' ,
      Imagenes_de_entrada='$this->ImagenF',
      Video_de_entrada='$this->VideoF' ,
      Cuerpo_del_mensaje_de_entrada='$this->MensajeF'
      WHERE Id_de_entrada = $Id";
        $conex= adminBD::conectar();
        if($conex->query($guardar) === TRUE){
          echo "<h4>Foro actualizado con exito</h4>";
        }else{
          echo "<h4>El foro no se ha actualizado </h4><br>";
        }
        adminBD::conectar($conex);
    }
    //Funcion para actualizar foro sin video e imagen
    public function ActualizarForo0($Id){
      $guardar= "UPDATE entrada_de_foro SET
      Titulo_de_entrada='$this->TituloF',
      Fecha='$this->fechaF',
      Cuerpo_del_mensaje_de_entrada='$this->MensajeF'
      WHERE Id_de_entrada = $Id";
      echo "<br>No se ha actualizado Imagen";
      echo "<br>No se ha actualizado Video<br>";

        $conex= adminBD::conectar();
        if($conex->query($guardar) === TRUE){
          echo "<br><h4>Foro actualizado con exito</h4>";
        }else{
          echo "<br><h4>El foro no se ha actualizado</h4>";
        }
        adminBD::conectar($conex);
    }
    //Funcion para actualizar foro sin imagen
    public function ActualizarForoImg($Id){
      $guardar= "UPDATE entrada_de_foro SET
      Titulo_de_entrada='$this->TituloF' ,
      Fecha='$this->fechaF',
      Video_de_entrada='$this->VideoF' ,
      Cuerpo_del_mensaje_de_entrada='$this->MensajeF'
      WHERE Id_de_entrada = $Id";
      echo "<br>No se ha actualizado Imagen<br>";
        $conex= adminBD::conectar();
        if($conex->query($guardar) === TRUE){
          echo "<br><h4>Foro actualizado con exito</h4><br>";
        }else{
          echo "<h4>El foro no se ha actualizado </h4><br>";
        }
        adminBD::conectar($conex);
    }
    //Función para actualizar foro sin video
    public function ActualizarForoVid($Id){
      $guardar= "UPDATE entrada_de_foro SET
      Titulo_de_entrada='$this->TituloF',
      Fecha='$this->fechaF',
      Imagenes_de_entrada='$this->ImagenF',
      Cuerpo_del_mensaje_de_entrada='$this->MensajeF'
      WHERE Id_de_entrada = $Id";
      echo "<br>No se ha actualizado Video<br>";
        $conex= adminBD::conectar();
        if($conex->query($guardar) === TRUE){
          echo "<br><h4>Foro actualizado con exito</h4><br>";
        }else{
          echo "<br><h4>El foro no se ha actualizado</h4>";
        }
        adminBD::conectar($conex);
    }
  }

?>
