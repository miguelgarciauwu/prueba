<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eco-Foro</title>
		<link rel= "shortcut icon" href="Imagenes/iconopag.png" type="imagen/x-icon">
	<link rel="stylesheet" href="css/DisForo.css">
</head>
<body>
	<header>

		<div id="encabezado">
	 		 <?php require_once("../navF/nav.php");?>
	  </div>

	</header>

		<div class="Inicio">
			<section>
			<h2 id="Titulo">FOROS<img id="eco" src="Imagenes/ecoperri1.png" ></h2>
			<label id="Frase"><i>"Por ti, por nosotros y por todos <br> </i></label>
			<label id="Frase1"><i>los Eco-perris"</i></label>
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
			</section>
		</div>


<?php
error_reporting(0);
$Id = $_REQUEST['tx'];
require_once ("../../controlador/ForoBuscar/InfoBlock.php");
//$infoF= mysqli_fetch_array($estadoF);


$infoF = mysqli_fetch_assoc($estadoF);
	if($infoF['Id_accion_entrada'] == 2){

		echo "<section class='recuadro'>
		<div class='centrar'>
		<img class='leer' src='Imagenes/leer.gif'><br>
		<h1>FORO NO DISPONIBLE</h1><br>
		<h3>Este foro ha sido bloqueado por infringrir nuestras normas</h3>
		</div>
		</section>";
	}
	else{
	require_once ("../../controlador/ForoBuscar/ForoCon.php");

	$info= mysqli_fetch_array($resultadoF);

	echo "<section class='recuadro'>";
	
	if( ($_SESSION['crendenciales']['type'])==4)
	{
	?>
	<div>
	<div class='botones'>
		<form action='' method='post'>
			<a href='../ForoEditar/Formulario.php?tx=<?php echo $Id?>'>
			<input class ="Editar" type='button' value='Editar'></a>
			<input class="Eliminar" type='button' value='Eliminar' id="Abrir">
		</form>
	</div>

		<div class='overlay' id="overlay">
			<div class='popup' id="popup">
				<h3><b>¿SEGURO QUIERE ELIMINAR ESTE FORO?</b></h3>
				<img class="Rasca" src="Imagenes/Rasca.gif">
				<form action="">
					<a href='../../controlador/ForoEliminar/ControladorDelete.php?tx=<?php echo $Id?>'>
					<input type="button" class="btn-submit" value='Eliminar' id="Eliminar"></a>
					<input type="button" class="btn-cancelar" value='Cancelar' id="Cancelar">
				</form>
			</div>
		</div>
	<script src="javascript/popup.js"></script>
	<div class="contenido">
<?php
}else{echo "";}?>
<div class="BReport">
<button class='Report' id="Report">
	<img class="ImgR" onmouseout="this.src='Imagenes/RDesactive.png';" onmouseover="this.src='Imagenes/RActive.png';" src="Imagenes/RDesactive.png">
</button>
</div>
	<?php
  $IDforo=$info['Id_de_entrada'];
  echo "<div class='botones'>";
  echo "</div>";

  echo "<h3>".$info['Titulo_de_entrada']."</h3>";
  echo $info['Cuerpo_del_mensaje_de_entrada']."<br><br>";
  $img=$info['Imagenes_de_entrada'];
  $vid=$info['Video_de_entrada'];
	echo "<div>";
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
<div class='overlay' id="overlay1">
	<div class='popup' id="popup1">
		<h3><b>¿QUIERE REPORTAR ESTE FORO?</b></h3>
		<h4>¿Por que motivo quiere reportar <br> el foro?</h4>
		<form method="post" action="../../controlador/ForoBuscar/Reportar.php?tx=<?php echo $IDforo?>">
			<label class="label">seleccione una opcion: </label><br>
			<div class="seleccion">
			<select multiple name="reporte" id="clasification" size="5" required>
					<option name="1" value="1">Contenido inapropiado</option>
					<option name="2" value="2">Lenguaje grosero</option>
					<option name="3" value="3">Mal clasificado</option>
					<option name="4" value="4">En otro idioma</option>
					<option name="5" value="5">Mala redaccion</option>
			</select>
		</div>
			<input type="submit" name="Reportar" class="btn-Report" value='Reportar' id="Reportar">
			<input type="button" class="btn-cancelar" value='Cancelar' id="Cancelar1">
		</form>
	</div>
</div>

<script src="javascript/popupReport.js"></script>

<?php 
	}

?>

<div id="footer">
			<?php
			require "footer.php";?>
	</div>
</body>
</html>

