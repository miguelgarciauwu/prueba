<?php
class Eliminados {
    //Atributos
    public $Id_de_entrada;
    //Metodo Constructor
    public function __construct($IDforo){
        $this->Id_de_entrada = $IDforo;
    }
    //Funcion para eliminar entrada de foro
    Public static function EliminarDato($conexion,$IDforo){
        $eliminar = "DELETE FROM entrada_de_foro WHERE Id_de_entrada = $IDforo";
        global $Resultado;
        $Resultado = mysqli_query($conexion, $eliminar);
		if($Resultado==null){
            echo "El registro NO fue eliminado".
                'ERROR! CODIGO: ' . mysqli_errno($conexion) . ' mensaje:'  . mysqli_error($conexion);
		}
        else{
            echo"ELIMINADO";
        }
        return $Resultado;
    }
}
?>
<?php
class EliminarComentario {

    //Atributos
    public $Id_de_comentario;

    //Metodo Constructor
    public function __construct($IDcomentario){
        $this->Id_de_comentario = $IDcomentario;
    }

    public static function Eliminar($conexion,$IDcomentario){
        $eliminarcoment = "DELETE FROM comentario WHERE Id_de_comentario = $IDcomentario";
        global $ResultadoComen;
        $ResultadoComen = mysqli_query($conexion, $eliminarcoment);
        if($ResultadoComen==null){
			echo "El registro NO fue eliminado".
				  'ERROR! CODIGO: ' . mysqli_errno($conexion) . ' mensaje:'  . mysqli_error($conexion);
		}
        else{
            echo"Comentario Eliminado";
        }
        return $ResultadoComen;
    }
}

?>
