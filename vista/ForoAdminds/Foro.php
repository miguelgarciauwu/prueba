<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eco-Foro</title>
		<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
	<link rel="stylesheet" href="Css/DisForo.css">
</head>
<body>
	<header>
		<div id="">
			<?php require_once("../navF/nav.php");?>
		</div>
	</header>
	<!-- Seccion de Foro y opciones fijas -->
		<div class="Inicio">
			<h2 id="Titulo">FOROS<img id="eco" src="Imagenes/ecoperri1.png" ></h2>
			<label id="Frase"><i>"Por ti, por nosotros y por todos <br> </i></label>
			<label id="Frase"><i>los Eco-perris"</i></label>
				<div class="mis">
						<?php if(($_SESSION['crendenciales']['type'])==4){?>
							<button class="MisForo">
								<a  id="Misforos" href="../ForoAdminds/idUser.php"><span>Busqueda de Usuario</span></a>
							</button> <?php 
						}else{?>
						<button class="MisForo">
								<a  id="Misforos" href="../ForoUsers/MisForos.php"><span>Mis Foros</span></a>
						</button> 
						<?php 
						} ?>
		<!-- Botones de buscar y crear foro -->
		</div>
			<button class="CrearForo">
				<a href="../ForoCrear/Formulario.php" id="Crear"><span>Crear foro</span></a>
			</button>
			<br>
				<form action="../ForoBuscar/Resultado.php" id="BuscarForo"  method="get">
					<label class="label1">Buscar foro<br></label>
					<input class="texto" type="varchar" name="buscar" placeholder="Titulo Foro">
					<button class="boton" type="submit">
						<img class="Lupa" src="Imagenes/Lupa.png">
					</button>
				</form>
		</div>

<?php
//Recibe el ID de la entrada de foro seleccionada
$Id = $_REQUEST['tx'];
require_once("../../controlador/ForosAdminds/ForoCon.php");
//Se piden datos especificos para mostrar
$info= mysqli_fetch_array($resultado);

  echo "<section class='recuadro'>";

?>
  <div>
  <div class='botones'>
		<form action='' method='post'>
			<a href='../ForoEditar/Formulario.php?tx=<?php echo $Id?>'>
			<input class ="Editar" type='button' value='Editar'></a>
			<input class="Eliminar" type='button' value='Eliminar' id="Abrir">
		</form>
	</div>
		<!-- Animaci??n para asegurarse de la eliminaci??n de la entrada -->
		<div class='overlay' id="overlay">
			<div class='popup' id="popup">
				<h3><b>??SEGURO QUIERE ELIMINAR ESTE FORO?</b></h3>
				<img class="Rasca" src="Imagenes/Rasca.gif">
				<form action="">
					<a href='../../controlador/ForoEliminar/ControladorDelete.php?tx=<?php echo $Id?>'>
					<input type="button" class="btn-submit" value='Eliminar' id="Eliminar"></a>
					<input type="button" class="btn-cancelar" value='Cancelar' id="Cancelar">
				</form>
			</div>
		</div>
	<script src="javascript/popup.js"></script>
<!-- Mostrar el contenido del foro realizado -->
<div class="contenido">
<?php
echo "<div>";
  echo "<h3>".$info['Titulo_de_entrada']."</h3>";
  echo $info['Cuerpo_del_mensaje_de_entrada']."<br><br>";
echo "</div>";
  $img=$info['Imagenes_de_entrada'];
  $vid=$info['Video_de_entrada'];
  if ($img==""){
    echo"";
  }else{
?>
<img class="archivo" src="../../../../intranet/ContenidoForos/<?php echo $img;?>">
<?php }
if ($vid==""){
 echo "";
}else{
?>
<video class="archivo" src="../../../../intranet/ContenidoForos/<?php echo $vid;?>" controls><br>
<?php
 }
echo"</div>";
echo "<br><br>";
//SECCION PARA COMENTAR EL FORO Y MOSTRAR COMENTARIOS
echo "<div class comen>";
require_once("../ForoComentarios/Crear/formulario.php");
echo"<div>";
echo "<div class='comentarios'>";
require_once("../ForoComentarios/Mostrar/comentarios.php");
echo "</div>";
echo "</div>";
echo"</div>";

echo "</section>";

?>
</div>
<div id="footer">
			<?php require "footer.php";?>
	</div>
</body>
</html>
