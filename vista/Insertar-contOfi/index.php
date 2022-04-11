<!DOCTYPE html>
<html lang= "es">

    <head>
            <meta charset="UTF-8">
            <meta http equiv="X-UA-compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0 ">
            <link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
            <link rel="stylesheet" href="Estilo.css">
            <title>Creacion contenido oficial</title>
    </head>

    <body><?php
    session_start();
        if(($_SESSION['crendenciales']['type'])==4){


    }else{
        header("location:http://localhost/ejercicios/ecolombia/vista/Eco-principal/");
    }?>
        <!--RECOMENDACIONES AL ADMINISTRADOR-->
        <div class="message">
            <p>
                En este apartado podrá crear el contenido oficial del sitio web "Eco-lombia".<br>
                <br>
                <b>Ah tener en cuenta.</b>
                <ul class="li">
                    <li>Use fuentes confiables.</li>
                    <li>El contenido debeb ser facil de entender.</li>
                    <li>Buena redacción.</li>
                </ul>
            </p>
        </div>
        <!--FORMULARIO PARA INCLUIR EL CONTENIDO-->
        <div class= "Crea-cont-ofi">
            <h2 class="titulo-form">¡CREA EL CONTENIDO OFICIAL!</h2>
            <!-- action="../../controlador/Insertar-contOfi/insertarOfiCtrl.php" -->
            <form method ="POST" class = "form" accept-charset="UTF-8" enctype="multipart/form-data" >
                <lable>Título</lable><br>
                    <input type="text" name = "title" id="input-title" placeholder="Título de la entrada" autocomplete="off" maxlength="100">
                <label>Imágen de entrada</lable><br>
                    <input type="file" name="image" id="input-image" accept="image/jpeg, image/png, imagen/jpg">
                <label>Video de la entrada</lable><br>
                    <input type="file" name="video" id="input-video" accept="video/mp4" >
                <label>Cuerpo del mensaje</lable><br>
                    <textarea name="body" id="textarea-text" placeholder="Ingrese el desarrollo del tema" autocomplete="off" rows="20" cols="90" maxlength="65535"></textarea>
                <label>Clasificación de la entrada</label>
                    <select name="clasification" id="clasification" required>
                        <option>Seleccione la categoría</option>
                        <option>Generalidades</option>
                        <option>Carton</option>
                        <option>Vidrio</option>
                        <option>Organico</option>
                        <option>Plastico</option>
                        <option>Metal</option>
                        <option>Papel</option>
                        <option>RAEE</option>
                    </select>
                <button type="submit" name="button-publish" >Publicar</button>
            </form>


        </div>
        <!--BOTON REGRESAR-->
        <div class="Boton_regreso">
            <a href="../Ver-contOfi/Consultar.php" class="regresar_h3"><h3>Regresar </h3></a>
        </div>

        <!--LOGO-->
        <a href= "../Eco-principal/index.php"><img src='img/eco-logo.png' id='eco-logo'></a>
            <!-- <h2 class="eco-logo">Eco-lombia</h2> -->

        <!--ECO-PERRI MENSAJE-->
        <img src="img/Relajao.png" id="eco-perri-mg">

        <!-- ECO-PERRI OBSERVANDO -->
        <img src="img/Eco-observador_2.png" id="eco-observador">

        <!--CONEXION CON EL ARCHIVO toma-datos.php-->
        <?php
            include ("../../controlador/Insertar-contOfi/insertarOfiCtrl.php");
        ?>
    </body>
</html>
