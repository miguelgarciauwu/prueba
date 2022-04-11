
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Eco-Resultados</title>
		<link rel= "shortcut icon" href="Imagenes/iconopag.png" type="imagen/x-icon">
	<link rel="stylesheet" href="Css/disResultado.css">
</head>
<body>
	<header>

		<div id="encabezado">
	 		 <?php require_once("../navF/nav.php");?>
	  </div>

	</header>
	<div class="Inicio">
		<h2 id="Titulo">FOROS<img id="eco" src="Imagenes/ecoperri1.png" ></h2>
		<label id="Frase"><i>&nbsp; &nbsp;"Por ti, por nosotros y por todos los <br> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;
		Eco-perris" </i></label>
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
		</div>


<?php

$Busqueda = $_GET['buscar'];
echo "<div class='Usur'><h1>Resultados de busqueda de $Busqueda </h1></div>";
require_once("../../controlador/ForoBuscar/DatosCon.php");

echo "<div class='paginacionText'> Pagina $pagina de $totalPag <br></div>";

while($Ver= mysqli_fetch_array($resultados)){

	$IDforo=$Ver['Id_de_entrada'];
	echo "<section class='recuadro'>";

	echo "<a href='Foro.php?tx=$IDforo'>";
	echo "<button type='sumit' class='Ver'>";
	$Cuerpo = subword( $Ver['Cuerpo_del_mensaje_de_entrada'],0,3);
 	echo "<h3>".$Ver['Titulo_de_entrada']."</h3>";
 	echo $Cuerpo ." (...)<br><br>";

	echo "<div class='Autor'>";
	echo "<b>Autor: </b>".$Ver['Nombre'];
	echo "</div>";

 	echo"</button>";
	echo "</a>";
	echo "</section>";

}
echo "<div class='paginacionText1'> Pagina $pagina de $totalPag <br></div>";
echo "<div class='paginacion'>";
	for($i=1; $i<=$totalPag;$i++){

		echo "<div class='pagNum'> <a href='?pag=$i&buscar=$Busqueda'>"  .$i. "</a> </div>";

	}
echo "</div>";

?>
<div class="espacio"><br></div>
<div id="footer">
			<?php require "footer.php";?>
	</div>
</body>
</html>
