<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Mis Eco-foros</title>
		<link rel= "shortcut icon" href="Imagenes/iconopag.png" type="imagen/x-icon">
	<link rel="stylesheet" href="Css/disMisForos.css">
</head>
<body>
	<header>

		<div id="encabezado">
	 		 <?php require_once("../navF/nav.php");?>
	  </div>

		</section>
	</header>
		<div class="Inicio">
		<h2> <a href="http://localhost/Ecolombia/ForoUsuarios/Usuario/Foro/Vista/Foro1.php" id="Titulo">FOROS</a><img id="eco" src="Imagenes/ecoperri1.png" ></h2>
		<label id="Frase"><i>"Por ti, por nosotros y por todos <br> </i></label>
			<label id="Frase"><i>los Eco-perris"</i></label>
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

require_once("../../controlador/ForoUsers/DatosCon.php");

$Dat= mysqli_fetch_assoc($resultadoD);
		$Nom=$Dat['Nombre'];
		$Username = $Dat['Username'];
		echo "<div class='Usur'><h1> Bienvenido a tus foros $Nom --- $Username </h1></div><br>";
		echo "<div class='paginacionText'> Pagina $pagina de $totalPag <br></div>";

// echo "<div class='Usur'><h1> Foros del usuario $Nombre </h1></div>";
while($Ver= mysqli_fetch_array($resultadoF)){
	$IDforo=$Ver['Id_de_entrada'];
	$Titulo=$Ver['Titulo_de_entrada'];

	echo "<section class='recuadro'>";

	echo "<a href='Foro.php?tx=$IDforo'>";
	echo "<button type='sumit' class='Ver'>";

	echo"<div class='text'>";
 	echo "<h3>$Titulo</h3>";
 	$Cuerpo = substr( $Ver['Cuerpo_del_mensaje_de_entrada'],0,400);
	echo $Cuerpo ." (...)<br><br>";
	echo "</div>";

 	echo"</button>";
	echo "</a>";
	echo "</section>";

}

echo "<div class='paginacionText1'> Pagina $pagina de $totalPag <br></div>";
echo "<div class='paginacion'>";

	for($i=1; $i<=$totalPag;$i++){

		echo "<div class='pagNum'> <a href='?pag=".$i."'> " .$i. " </a> </div>";

	}
echo "</div>";

?>
<div class="espacio"><br></div>

<div id="footer">
			<?php require "footer.php";?>
	</div>
</body>
</html>
