<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="Ecoestilos.css">
	<title>Login</title>
</head>
<body>
	<?php
	//REDIRECCIONAMIENTO AL INDEX PRINCIPAL SI YA INGRESÓ
	session_start();
	if(isset($_SESSION['credenciales'])==true){
    header("../Eco-principal/index.php");
}?>
	<!-- FORMULARIO DE INGRESO AL SITIO WEB-->
	<div class="login">
		<img src="Img/Ecoperri.png" id="Ecoperri" alt="">
		<form method="POST" action="../../controlador/Eco-login/loginctrl.php" class="formulario" >
			<label>Usuario</label>
				<input type="text" name="username" id="input-usuario" placeholder="Username" autocomplete="off" >
			<label>Contraseña</label>
				<input type="password" name="contraseña" id="input-clave" placeholder="************" >
			<button type="submit" name="boton">Login</button>
			<a class= "recuperar" href ="../Eco-recuperar/eco-recuperar.php">¿Olvidaste tu contraseña?</a>
		</form>
	</div>
	<!-- BOTON DE REGRESO -->
	<a class="boton_regreso" href="../Eco-principal">Regresar</a>
	<!-- CONECTARSE CON EL ARCHIVO DE ANIMACIONES DEL ECO-PERRI -->
	<script src="Ecojavascript.js"></script>

	<?php
	?>
</body>
</html>
