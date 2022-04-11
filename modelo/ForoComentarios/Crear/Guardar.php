<?php

  class Comentario{

    public $fechaC;
    public $MensajeC;
    public $IdentradaC;

    public function __construct($fcha,$Comen,$IDforo,$Idusur){

      $this->fechaC=$fcha;
      $this->MensajeC=$Comen;
      $this->IdentradaC=$IDforo;
      $this->IdU=$Idusur;

    }

    public static function FechaCreacion(){
      $fcha = date("Y;m;d");
      return $fcha;
    }

    public function GuardarComentario(){

      require_once("../../BsDConexion/adminBD.php");

      $guardar= "INSERT INTO comentario (Fecha, Cuerpo_del_mensaje,Id_de_entrada,Id_usuario)
      VALUES
      ( '$this->fechaC',
        '$this->MensajeC',
        '$this->IdentradaC',
        '$this->IdU')";

        $conex= adminBD::conectar();
        if($conex->query($guardar) == TRUE){
          echo "Comentario Enviado";
        }else{
          echo "Comentario no enviado <br>";
        }
        adminBD::conectar($conex);
    }

  }

?>
