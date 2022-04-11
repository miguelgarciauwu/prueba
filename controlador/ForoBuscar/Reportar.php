<?php
//Archivos requeridos
    require_once("../../modelo/ForoBuscar/Consulta.php");
    require_once("../../BsDConexion/adminBD.php");
        //Opción seleccionada ->
        $Report=$_POST['reporte'];
        //ID de entrada de Foro ->
        $IDforo=$_REQUEST['tx'];
        $GuardarR=new Report($IDforo, $Report);
        $GuardarR->Reportar();
?>
<script type="text/javascript">
    alert("Se ha reportado este foro correctamente");
     window.location.href ='../../vista/ForoBuscar/Foro.php?tx=<?php echo $IDforo?>';
</script>
