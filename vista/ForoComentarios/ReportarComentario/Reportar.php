<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Reportar Comentario</title>
	<link rel= "shortcut icon" href="../Imagenes/iconopag.png" type="imagen/x-icon">
    <link rel="stylesheet" href="../css/DisForo.css">
    <link rel="stylesheet" href="../css/Reporte.css">
    <link rel="stylesheet" href="../css/ComentarioMostrar.css">
</head>
<body>
<!-- Recuadro para reporte -->
<section class='recuadro'>
    <?php
    //Se recibe el ID del comentario a reportar
    if(isset($_REQUEST['txreporte'])){
        $Id = $_REQUEST['txreporte'];
    ?>  <img id="Rasca" src="../Imagenes/Rasca.gif" >
    <img id="Rasca2" src="../Imagenes/Rasca.gif" >
            <b class="TextReporte"> REPORTAR COMENTARIO </b>
                
                <!-- Formulario de opciones -->
                <form method="post" action="../../../controlador/ForoReportarComen/Reportar.php?txreporte= <?php echo $Id;?>">
                    <select  multiple name="OpcionReport"class="Opciones" size="6" >
                        <option disabled="">SELECCIONA UNA OPCION</option>
                        <option value="1">Contenido Inapropiado</option>
                        <option value="2"> Lenguaje Grosero</option>
                        <option value="3">Mal Clasificado</option>
                        <option value="4">En otro Idioma</option>
                        <option value="5">Mala Redaccion </option></h3>
                    </select>  
                        <input type="submit" class="btn-Reportado" value='Aceptar' 
                            id="ReporteAbrir">
                </form>
    <?php }?>
</section>
</body>