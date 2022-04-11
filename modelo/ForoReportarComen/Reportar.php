<?php
class ReportarComentario {
    //Atributos
    public $Id_de_comentario;
    public $Id_opcion_comentario;
    //Metodo Constructor
    public function __construct($IDcomentario, $OpcionComen){
        $this->Id_de_comentario = $IDcomentario;
        $this->Id_opcion_comentario = $OpcionComen;
}           
//Funcion para guardar reporte
public static function Reportar($conexion, $IDcomentario, $OpcionComen){
    $ReportarComen = "INSERT INTO registro_de_notificacion_de_comentario 
    (Id_opcion_comentario, Id_de_comentario)
    VALUES
    ($OpcionComen, $IDcomentario)";
    global $Reporte;
    $Reporte = mysqli_query($conexion, $ReportarComen);
    if($Reporte==null){
        echo "El registro No fue insertado".
            'ERROR! CODIGO: ' . mysqli_errno($conexion) . ' mensaje:'  . mysqli_error($conexion);
    }
    else{
        echo"Comentario Reportado";
    }
    return $Reporte;
}
}
?>