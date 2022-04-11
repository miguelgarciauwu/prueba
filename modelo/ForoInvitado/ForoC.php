<?php
//Clase para mostrar los cada campo que se registre en la base de datos
require_once ("../../BsDConexion/adminBD.php");
class mostrar{

  public static function cantidad(){
      $conexion = adminBD::conectar();
      $notificaciónC =  "SELECT * FROM entrada_de_foro";
      global $ResultadoC;
      $ResultadoC = mysqli_query($conexion, $notificaciónC);
  if($ResultadoC==null){
    echo "El campo de entrada no se muestra".
        'ERROR! CODIGO: ' . mysqli_errno($conexion) . ' mensaje:'  . mysqli_error($conexion);
  }
      return $ResultadoC;
  }


    public static function MostrarDatos($Empezar,$Tamano_paginas){
        $conexion = adminBD::conectar();
        $notificación =  "SELECT * FROM entrada_de_foro,usuario_registrado
        where entrada_de_foro.Id_usuario=usuario_registrado.Id_usuario
        ORDER BY Id_de_entrada DESC LIMIT $Empezar,$Tamano_paginas";

        global $Resultado;
        $Resultado = mysqli_query($conexion, $notificación);
		if($Resultado==null){
			echo "El campo de entrada no se muestra".
				  'ERROR! CODIGO: ' . mysqli_errno($conexion) . ' mensaje:'  . mysqli_error($conexion);
    }
        return $Resultado;
    }






/*class  ForoC {

    //Atributos
    public $Id_de_entrada;
    public $Titulo_de_entrada;
    public $Fecha;
    public $Imagenes_de_entreda;
    public $Video_de_entreda;
    public $Cuerpo_del_mensaje_de_entrada;
    public $Id_usuario;

    //Cada atributo hace referencia al campo exacto de la tabla en base de datos (Ecolombia) -> entrada_de_foro

    //Metodo Constructor
    public function __construct($Identrada, $Titulo, $Fech, $Img, $Vid, $CuerpoMensaje, $Iduser){
        $this->$Id_de_entrada = $Identrada;
        $this->$Titulo_de_entrada = $Titulo;
        $this->$Fecha = $Fech;
        $this->$Imagenes_de_entreda = $Img;
        $this->$Video_de_entreda = $Vid;
        $this->$Cuerpo_del_mensaje_de_entrada = $CuerpoMensaje;
        $this->$Id_usuario = $Iduser;
    }
}*/



    //Funcion para mostrar
    /*public function MostrarDatosAssoc(){
        $Resultado = mysqli_query($conexion, $notificación);
        while($mostrar = mysqli_fetch_assoc($Resultado)){
            $Id =  $mostrar["Id_de_entrada"];
            $Titul = $mostrar["Titulo_de_entrada"];
            $Fech = $mostrar["Fecha"];
        }
        return array($Id,$Titul,$Fech);
    }*/


}



?>
