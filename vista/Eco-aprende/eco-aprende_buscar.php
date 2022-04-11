<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/eco-aprende_buscar.css">
	<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
<title>Eco - Busqueda</title>
</head>
<?php
require "../../controlador/Eco-aprende/Eco-aprendectrl.php";
if(isset($_POST['enviar'])){

?> <h3>Resultados de aprende a reciclar para <b><?php echo $_POST['busqueda']?></b></h3>
<div class="Bloque">
    <?php
        while($verb=mysqli_fetch_array($consultar9)){
    ?>
        <form method='post' target="_blank"action="../Ver-aprende/Ver-aprende.php">
            <input type="hidden" name="id_entrada" value=<?php echo $verb['id_cont_oficial'];?>>
            <input type="submit" class="title" id="boton_title"value="<?php  echo $verb['Titulo_cont_oficial'];?>">
        </form>
        <hr>
    <?php
    }
?>
</div>
<?php
}
?> 