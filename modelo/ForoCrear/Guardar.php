<?php
require_once("../../BsDConexion/adminBD.php");
  class Foro{

    public $TituloF;
    public $fechaF;
    public $ImagenF;
    public $VideoF;
    public $MensajeF;
    public $IdusurF;

    public function __construct($Titulo,$fcha,$nombreImg,$nombreVid,$Mensaje,$Idusur){

      $this->TituloF=$Titulo;
      $this->fechaF=$fcha;
      $this->ImagenF=$nombreImg;
      $this->VideoF=$nombreVid;
      $this->MensajeF=$Mensaje;
      $this->IdusurF=$Idusur;

    }

    public static function VerificarImg(){

      $nombreImg=$_FILES ['Imagen']['name'];
      $tipoImg=$_FILES ['Imagen']['type'];
      $tamaImg=$_FILES ['Imagen']['size'];

      if($tamaImg<=01){
        echo "<br>No se ha cargado Imagen";
      }else{
        if ($tamaImg<=5000000){
          if($tipoImg=="image/jpeg" || $tipoImg=="image/jpg" || $tipoImg=="image/png"){
            echo "<br>Se ha cargado Imagen";
        $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ContenidoForos/';
        move_uploaded_file($_FILES['Imagen']['tmp_name'] , $destino . $nombreImg);
          return $nombreImg;
        }else{
          echo "<br>1.solo se permiten archivos con extenccion .png , .jpeg , .jpg <br>";
          }
        }else{
          echo"<br>Tamaño de imagen demaciado grande, tamaño permidito es menos de 5mg <br>";
        }
      }
    }

    public static function VerificarVid(){

      $nombreVid=$_FILES ['Video']['name'];
      $tipoVid=$_FILES ['Video']['type'];
      $tamaVid=$_FILES ['Video']['size'];

      if($tamaVid<=01){
        echo "<br>No se ha cargado Video";
      }else{
      if ($tamaVid<=45000000){
        if($tipoVid=="video/mp4"){
          echo "<br>Se ha cargado Video";
      $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ContenidoForos/';
      move_uploaded_file($_FILES['Video']['tmp_name'] , $destino . $nombreVid);
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

    public function GuardarForo(){

      $guardar= "INSERT INTO entrada_de_foro (Titulo_de_entrada, Fecha, Imagenes_de_entrada,Video_de_entrada, Cuerpo_del_mensaje_de_entrada,Id_usuario)
      VALUES
      ( '$this->TituloF',
        '$this->fechaF',
        '$this->ImagenF',
        '$this->VideoF',
        '$this->MensajeF',
        '$this->IdusurF')";

        $conex= adminBD::conectar();
        if($conex->query($guardar) === TRUE){
          echo "<br><h4><b>Foro guardado con exito</h4></b>";
        }else{
          echo "<br><h4><b>Error al guardar Foro</b></h4><br>";
        }
        adminBD::conectar($conex);
    }

  }

?>
