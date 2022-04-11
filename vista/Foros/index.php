<!DOCTYPE html>
<html>
<head>
	<!-- Nombre de pagina -->
	<meta charset="utf-8">
		<title>Eco-Foros</title>
		<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
		<link rel="stylesheet" href="css/estilos.css">
	
</head>
<!-- SECCION DE FOROS - ADMINISTRADOR -->
<body>
	<header>
		<div id="encabezado">
			<?php require_once("../navF/nav.php");?>
		</div>
	</header>
	<!-- PRESENTACIÓN DE FOROS -->
	<div class="Inicio">
		<h2 id="Titulo">FOROS<img id="eco" src="Imagenes/ecoperri1.png" ></h2>
		<label id="Frase"><i><br><br>&nbsp; &nbsp;"Por ti, por nosotros y por todos los <br> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
		Eco-perris" </i></label> 
		<div class="mis">
			<!-- BOTON DE "Mis foros" y "Busqueda de Usuario" validando credenciales-->
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
		<!-- Boton de Crear y Buscar foro -->
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
		<!-- Seccion de proyectos enbotellados -->
	<aside class="Mostrador">
		<div class="Recuadro">
			<div class="ContenidoRecuadro">
				<h3>Proyectos embotellados</h3>
					<table id="NoticeOne">
						<tr>
							<td id="textnoticeone"><label id="textnoticeone">EEUU apoya negociar un tratado mundial contra la contaminación del plástico</label></td>
							<td><img src="Imagenes/noticeone.png" width="90%" ></td>
						</tr>
						<tr>
							<td><img  src="Imagenes/noticetwo.png" width="100%" ></td>
							<td ><label>Argentina: El incendio en el Parque Nacional Ciervo de los Pantanos está controlado</label></td>
						</tr>
						<tr>
							<td ><h4>El ganado acorrala a la Amazonia:</h4><br>
							<label>Desde 2016, las reses que circundan los parques nacionales La Macarena, Picachos, Tinigua y Chiribiquete se ha duplicado. ¿Por qué y cómo se han podido apropiar los particulares de tierras públicas reservadas?</label></td>
							<td><img  src="Imagenes/Amazonas.png" width="100%" ></td>
							<td></td>
						</tr>
					</table>
			</div>
		</div>
	</aside>
	<div class="UltEntrada">
		<h2><b>Ultimas entradas:</b></h2>
	</div>
	<?php
		require_once ("../../controlador/Foros/ControlarUser.php");
		while($mostrar = mysqli_fetch_assoc($Resultado)){
			$IdF=$mostrar['Id_de_entrada'];
			$imag=$mostrar['Foto'];
	?><!-- Mostrar Foros creados Recientes -->
	<section class="section">
		<a href="../ForoBuscar/Foro.php?tx=<?php echo $IdF?>">
		<button class="btn">
			<table>
				<tr>
					<td class="tablaimg">
						<?php 
						if ($imag=="" || $imag == NULL){
								echo "<img id='img' src='Imagenes/IconoUsser.png'></img>";
						}else{
							echo "<img id='img' src='../../../../intranet/imageprofile/$imag'></img>";
						}?>
					</td>
					<td>
						<div class="informacion">
							<label id="id"><b>Autor: </b> <?php echo $mostrar["Nombre"];?></label>
							<br>
							<label><b>Titulo: </b> <?php  echo $mostrar["Titulo_de_entrada"];?> </label>
							<br>
							<label><b>Fecha creacion: </b> <?php echo $mostrar["Fecha"];?></label>
						</div>
					</td>
				</tr>				
			</table>
		</button></a>
	</section>
	<?php }
	//PAGINACIÓN
echo "<div class='paginacionText1'> Pagina $pagina de $totalPag <br></div>";
echo "<div class='paginacion'>";
	for($i=1; $i<=$totalPag;$i++){
		echo "<div class='pagNum'> <a href='?pag=".$i."'> " .$i. " </a> </div>";
	}
echo "</div>";
	?>
<div class="espacio"><br></div>
<!-- Llamar al footer y su diseño -->
	<div id="footer">
			<?php require "footer.php";?>
	</div>
</body>
</html>
