<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel= "shortcut icon" href="../Eco-aprende/" type="imagen/x-icon">
	<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Recuperacion de contraseña</title>
</head>
<body>
    recuperacion de contraseña
    <form method="post" action="../../controlador/Eco-correo/CorreoCtrl.php">
        <input type="email" name="mail" placeholder="introduzca el correo con el que se encuetra registrado" required="required" autocomplete>
        <button type="submit" name="enviar">enviar</button>
    </form>
</body>
</html>