<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eco-Foro</title>
		<link rel= "shortcut icon" href="Imagenes/iconopag.png" type="imagen/x-icon">
	<link rel="stylesheet" href="Css/DisForo.css">
</head>
<body>
	<header>

		<div id="encabezado">
	 		 <?php require_once("../navI/navInvi.php");?>
	  </div>

	</header>

		<div class="Inicio">
			<div class="verdecito">
		<h2 id="Titulo">FOROS<img id="eco" src="Imagenes/ecoperri1.png" ></h2>
		<label id="Frase"><i>"Por ti, por nosotros y por todos <br> </i></label>
		<label id="Frase1"><i>los Eco-perris"</i></label>
		<label id="Frase"><i></i></label>
		<div class="mis">
		<button class="MisForo" id="Abrir">
		<a  id="Misforos"><span>Mis Foros</span></a>
		</button>
		</div>

		<button class="CrearForo" id="Abrir1">
		<a id="Crear"><span>Crear foro</span></a>
		</button>
		<br>

			<form action="../ForoBuscar/ResultadoInvi.php" id="BuscarForo" method="get">
				<label class="label1">Buscar foro<br></label>
				<input class="texto" type="varchar" name="buscar" placeholder="Titulo Foro">
				<button class="boton" type="submit">
					<img class="Lupa" src="Imagenes/Lupa.png">
				</button>
			</form>
			</div>
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
	<script src="Css/popup.js"></script>
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

echo "<div class comen >";
require_once("../ForoComentarios/Crear/formularioInvi.php");
echo"<div>";
echo "<div class='comentarios' >";
require_once("../ForoComentarios/Mostrar/comentarios.php");
echo "</div>";
echo "</div>";
echo"</div>";

echo "</section>";

?>

<div class='overlayi' id="overlay">
		 <div class='popupi' id="popup">
			 <h3><b>NO ESTAS CONECTADO</b></h3>
			 <h4>Para poder acceder a tus foros <br> inicia sesion o registrate</h4>
			 <img class="gif" src="Imagenes/Eco-Baile.gif">
			 <form action="">
				 <a href="../Eco-login/index.php">
				 <input type="button" class="btn-Ingresar" value='Ingresar' id="Ingresar"></a>
				 <a href="../Eco-register/eco-register.php">
				 <input type="button" class="btn-Registrar" value='Registrarse' id="Registrar"></a>
				 <input type="button" class="btn-cancelar" value='Cancelar' id="Cancelar">
			 </form>
		 </div>
	 </div>

	 <div class='overlayi' id="overlay1">
		 <div class='popupi' id="popup1">
			 <h3><b>NO ESTAS CONECTADO</b></h3>
			 <h4>Para poder crear un foro <br> inicia sesion o registrate</h4>
			 <img class="gif" src="Imagenes/Eco-Baile.gif">
			 <form action="">
				 <a href="../Eco-login/index.php">
				 <input type="button" class="btn-Ingresar" value='Ingresar' id="Ingresar"></a>
				 <a href="../Eco-register/eco-register.php">
				 <input type="button" class="btn-Registrar" value='Registrarse' id="Registrar"></a>
				 <input type="button" class="btn-cancelar" value='Cancelar' id="Cancelar1">
			 </form>
		 </div>
	 </div>

	 <div class='overlayi' id="overlay2">
		 <div class='popupi' id="popup2">
			 <h3><b>NO ESTAS CONECTADO</b></h3>
			 <h4>Para poder crear un comentario <br> inicia sesion o registrate</h4>
			 <img class="gif" src="Imagenes/Eco-Baile.gif">
			 <form action="">
				 <a href="../Eco-login/index.php">
				 <input type="button" class="btn-Ingresar" value='Ingresar' id="Ingresar"></a>
				 <a href="../Eco-register/eco-register.php">
				 <input type="button" class="btn-Registrar" value='Registrarse' id="Registrar"></a>
				 <input type="button" class="btn-cancelar" value='Cancelar' id="Cancelar2">
			 </form>
		 </div>
	 </div>
	 <script src="javascript/popup.js"></script>
	 <?php 
	}

?>
<div class="espacio"><br></div>

<div id="footer">
			<?php require "footer.php";?>
	</div>
</body>
</html>
