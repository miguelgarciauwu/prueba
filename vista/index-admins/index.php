<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/indexadmin.css">
	<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Index Administrador </title>
</head>
<div class="nav">

		<?php session_start();
        require_once("../navF/nav.php");
        require 'sesion.php'; 
        if(($_SESSION['crendenciales']['type'])==4){

        }else{echo "no es 4";
            header("location:../Eco-principal/");
        }
        //consulta de datos
       
        ?>
	</div>
</head>
<body>

<div class="contenido">
            <table border="1"  >
                <tr>
                    <th>Contenido Oficial</th>
                    <th>Usuarios del sistema</th>
                    <th>Foros</th>
                    <th>Notificaciones</th>
                </tr>
                <tr>
                    <td><a class="ref"href="../Ver-contOfi/Consultar.php"><img class="entradas" src="Imagenes/Entradas.png" whith="50px" height="50px"></a></td>
                    <td><a class="ref"href="../Eco-Verusers/"><img class="users" src="Imagenes/Users.png" width="50px" height="50px"></a></td>
                    <td><a class="ref"href="../Foros/index.php"><img class="foro" src="Imagenes/Foro.png" width="50px" height="50px" ></a></td>
                    <td class="ref"><button class="btn-ir" id="btn-ir"><img class="foro" src="Imagenes/Notificaciones.png" width="50px" height="50px" ></button></td>
                </tr>
            </table>
</div>
<div class='overlay' id="overlay">
	<div class='popup' id="popup">
        <div class="center">
		<h3><b>¿QUE NOTIFICACIONES QUIERE VER?</b></h3>
		<form action="">
            <img class="Img" src="iconos/Foro.png" >
            <img class="Img" src="iconos/Comentario.png" >
			<a href='../../vista/NotificacioAdmin/NotiForos.php'>
			<input type="button" class="btn-foro" value='Foros' id="NForo"></a>
            <a href='../../vista/NotificacioAdmin/NotiComentarios.php'>
            <input type="button" class="btn-com" value='Comentario' id="Comentario"></a>
			<input type="button" class="btn-cancelar" value='Cancelar' id="Cancelar">
		</form>
        </div>
	</div>
</div>
<script src="javascript/popup.js"></script>
<div class="fondo-contenido"></div>
<div class="footere">
		<?php require 'footer.php'?>
	</div>
<script src="javascript/perfil.js"></script>
</body>