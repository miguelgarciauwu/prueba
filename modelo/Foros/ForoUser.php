<?php
//Clase para mostrar los cada campo que se registre en la base de datos
require_once ("../../BsDConexion/adminBD.php");
class mostrar{
    //Funcion para traer entradas de foros
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
    //Funcion para mostrar datos con un limite por pagina
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
}
?>
