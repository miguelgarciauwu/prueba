<!DOCTYPE html>
<html lang="en">
    <meta charset="UTF-8">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/recuperar.css">
    <link rel= "shortcut icon" href="../Eco-aprende/" type="imagen/x-icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka+One&display=swap" rel="stylesheet">
    <title>Recuperacion de contraseña</title>
</head>
<body>



    <form method="post" action="../../controlador/Eco-recuperar/Eco-recuperarctrl.php" class="Form">
        Recuperacion de contraseña
        <br>
        <input type="email" name="mail" class= "email"placeholder="introduzca el correo con el que se encuetra registrado" required="required" autocomplete>
        <button type="submit" name="enviar">enviar</button>
    </form>


</form>
</body>
</html>