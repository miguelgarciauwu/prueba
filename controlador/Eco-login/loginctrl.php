
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../vista/Eco-login/Ecoestilos.css">
    <title></title>
</head>
<body>
<?php
    include "../../modelo/Eco-login/Prueba.php";

    if(isset($_POST['boton'])){
        $user= $_POST['username'];
        $pass = $_POST['contraseña'];
    }
    $ingreso = new Validar($user,$pass);
    $ingreso->confirmar($conex);


    ?>
</body>
</html>

