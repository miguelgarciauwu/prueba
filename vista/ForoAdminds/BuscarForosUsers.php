<!-- INTERFAZ PARA MOSTRAR LOS FOROS EN RELACIÓN CON EL ID-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="Css/disMisForos.css">
	<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
	
</head>
<body>
	<header>
		<div id="encabezado">
			<?php require_once("../navP/nav.php");?>
		</div>
		</section>
	</header>
	<!-- TITULO Y ACCIONES PRINCIPALES DE FOROS -->
	<div class="Inicio">
		<h2 id="Titulo">FOROS<img id="eco" src="Imagenes/ecoperri1.png" ></h2>
		<label id="Frase"><i>"Por ti, por nosotros y por todos los <br> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;
		Eco-perris" </i></label> 
				<div class="mis">
						<?php if(($_SESSION['crendenciales']['type'])==4){ ?>
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
	</div>
<?php
// Recibe el ID del formulario.
$Id = $_GET['Id'];
require_once("../../controlador/ForosAdminds/DatosCon.php");

echo "<div class='Usur'><h1> Foros del usuario " .$Id.  "</h1></div>";
//Mostrar datos especificos de acuerdo a la consulta
while($Ver= mysqli_fetch_array($resultado)){

	$IDforo=$Ver['Id_de_entrada'];
	echo "<section class='recuadro'>";

	echo "<a href='Foro.php?tx=$IDforo'>";
	echo "<button type='submit' class='Ver'>";

	$Cuerpo = substr( $Ver['Cuerpo_del_mensaje_de_entrada'],0,400);
 	echo "<h3>".$Ver['Titulo_de_entrada']."</h3>";
 	echo $Cuerpo ." (...)<br><br>";

	echo"</button>";
	echo "</a>";
	echo "</section>";
	}
	//PAGINACIÓN
echo "<div class='paginacionText1'> Pagina $pagina de $totalPag <br></div>";
echo "<div class='paginacion'>";
	for($i=1; $i<=$totalPag;$i++){
		echo "<div class='pagNum'> <a href='?pag=".$i."'> " .$i. " </a> </div>";
	}
echo "</div>";
	?>
<div id="footer">
			<?php require "footer.php";?>
	</div>
</body>
</html>
