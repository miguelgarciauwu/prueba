<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet"  href = "css/contenido.css">
    <title>Document</title>
</head>
<body>
    <?php require_once "../../controlador/Ver-aprende/Ver-aprendeCtrl.php" ?>
<table>  <a name="principio">
        <tr>
        <?php while ($Ver= mysqli_fetch_array($rta)){
        //ECO-PERRI
        switch($Ver['Id_clasificacion_Ofi'])
        {
            case 1:
                ?> <a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/eco-perri-general.png" width="150px" height="150px" alt=""></a><?php
            break;
            case 2:
                ?><a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/eco-perricaja" width="200px" height="200px" alt=""></a><?php
            break;
            case 3:
                ?><a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/eco_perri_vidrio" width="150px" height="150px" alt=""></a><?php
            break;
            case 4:
                ?><a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/Eco-perri-organicos.png" width="150px" height="150px" alt=""></a><?php
            break;
            case 5:
                ?><a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/Eco_perri-plastico .png" width="150px" height="150px" alt=""></a><?php
            break;
            case 6:
                ?><a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/eco-perri-metal.png" width="150px" height="150px" alt=""></a><?php
            break;
            case 7:
                ?><a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/Eco_perri_papel" width="150px" height="150px" alt=""></a><?php
            break;
            case 8:
                ?><a href="Ver-aprende.php#principio"><img class="Eco-perri" src="img/eco_perri_RAEES.png" width="150px" height="150px" alt=""></a><?php
            break;
        }


        //TABLA QUE MUESTRA LA INFORMACIÓN
            ?>
            <th class= "Titulo" colspan= "2">
                <?php echo "<h2 class='title'>" .$Ver['Titulo_cont_oficial'] . "<br></h2>"; ?>
            </th>
        </tr>
        <tr>
            <td class= "Img" colspan= "2">
                <?php
                    //ver imágen
                    if($Ver['Imagenes_cont_oficial'] == ""){
                        echo "";
                    }else
                        {   ?>
                            <img src= "/intranet/ImageContOfi/<?php echo $Ver['Imagenes_cont_oficial'];?>" width= " 600px" height= "300px" >
                            <?php
                        }   ?>
                    </td>
                    </tr>
            <tr>
        <tr>
                <?php
                 if((str_word_count($Ver['Cuerpo_del_mensaje_cont_oficial']))>50){
                    $cantidadp=(str_word_count($Ver['Cuerpo_del_mensaje_cont_oficial'])/2);
                    $parray=$Ver['Cuerpo_del_mensaje_cont_oficial'];
                    $palabras_arreglo= explode(" ",$parray);
                    ?>
                    <td class="texto1"> <?php
                        $primer_texto = implode(" ", array_slice($palabras_arreglo, 0, $cantidadp));
                        echo $primer_texto."</td>"; ?>
                    <td class="texto2"><?php
                        $segundo_texto = implode(" ", array_slice($palabras_arreglo, $cantidadp)); 
                        echo $segundo_texto ."</td>"; 
                        } echo "<td class='texto'>".$Ver['Cuerpo_del_mensaje_cont_oficial'];
                        echo "</p>"?>
                   
                    

            </td>
        </tr>
            <td class="Vid" colspan= "2">
            <?php
            //Ver video
                if($Ver['Video_cont_oficial'] == ""){
                    echo "";
                }else
                    {   ?>
                        <video src= "/intranet/VideosContOfi/<?php echo $Ver['Video_cont_oficial'];?>" width= "500px" height= "300px" controls></video><br>
                        <?php
                    }   ?>
            </td>
        </tr>
        <?php } ?>
</table>
</body>
</html>