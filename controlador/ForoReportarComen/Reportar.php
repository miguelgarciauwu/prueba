<?php
//Conexion con Modelo de Reportar Comentario
require_once ("../../modelo/ForoReportarComen/Reportar.php");
//Archivo para conexion con base de datos
require_once ("../../BsDConexion/adminBD.php");
/* Traer el ID del comentario */
if(isset($_REQUEST['txreporte'])){
    //Id comentario
    $IDcomentario = $_REQUEST['txreporte'];
    //Opcion de reporte
    $OpcionComen = $_POST['OpcionReport'];
    $Reportado = new ReportarComentario($IDcomentario, $OpcionComen);
    $conexion = adminBD::conectar();
    $Reporte = ReportarComentario::Reportar($conexion,$IDcomentario , $OpcionComen);
    if( ($_SESSION['crendenciales']['type'])==4){?>
            <script type="text/javascript">
                alert("COMENTARIO REPORTADO");
                window.close();
            </script>
                
        <?php }else{?>
            <script type="text/javascript">
                alert("COMENTARIO REPORTADO");
                window.close();
            </script> <?php 
            } 
}
?>
