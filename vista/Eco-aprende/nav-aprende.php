<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/nav-aprende.css">
	<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
</head>
<?php
require "../../controlador/Eco-aprende/Eco-aprendectrl.php";

?>
<section class="navegador">
    <div class="content-nav-aprende">
<!-- --------------------------------------------------------------------------------------------------- -->
                <button class="boton1"id="boton1"><p >Generalidades</p></button>


                <div class="bloque1" id="bloque1"><b>Aprende a reciclar > Generalidades</b>
                    <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a  class= "Crear" href="../Insertar-contOfi/index.php">  Crear </a> <?php }?>
                            <?php }else{echo "";}?>
                <hr>
                    <div class="bloque-content">
                        <?php
                        if($ver->Tot_reg1>0){
                            while($Fila1 = mysqli_fetch_row($ver->resultado1)){
                                $id=$Fila1[1];
                                $title=$Fila1[0];
                                ?>

                                <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                    <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                    <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                                </form><hr>
                                <?php
                            }
                            //------------------------------ PAGINACIÓN ---------------------------
                            for($i=1; $i <= $Total_pag1; $i++)
                                {
                                    echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";

                                }


                        }else{

                            echo"No se encontro contenido oficial de la pagina  correspondiente a Generalidades<br>";

                        }

                        ?>
                    </div>
            </div></button>
<!-- --------------------------------------------------------------------------------------------------- -->

                <button class="boton2" id="boton2"><p>Carton</p></button>
                    <div class="bloque2"id="bloque2"><b>Aprende a reciclar > Carton</b>
                    <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a  class= "Crear" href="../Insertar-contOfi/index.php">Crear</a> <?php }?>
                            <?php }else{echo "";}?>
                    <hr>
                    <div class="bloque-content"><?php
                        if($ver->Tot_reg2>0){
                            while($Fila2 = mysqli_fetch_row($ver->resultado2)){
                                $id=$Fila2[1];
                                $title=$Fila2[0];
                                ?>

                                <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                    <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                    <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                                </form><hr>
                                <?php
                            }
                            //------------------------------ PAGINACIÓN ---------------------------
                            for($i=1; $i <= $Total_pag2; $i++)
                                {
                                    echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                                }
                        }else{
                            echo"No se encontro contenido oficial de la pagina  correspondiente a Carton<br>";
                        }
                        ?>
                    </div>
                </div>
            <button class="boton3" id="boton3"><p>Vidrio</p></button>
                <div class="bloque3"id="bloque3"><b>Aprende a reciclar > Vidrio</b>
                <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a  class= "Crear" href="../Insertar-contOfi/index.php">Crear</a> <?php }?>
                            <?php }else{echo "";}?>
                <hr>
                <div class="bloque-content"><?php
                    if($ver->Tot_reg3>0){
                        while($Fila3 = mysqli_fetch_row($ver->resultado3)){
                            $id=$Fila3[1];
                            $title=$Fila3[0];
                            ?>

                            <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                            </form><hr>
                            <?php
                        }
                            //------------------------------ PAGINACIÓN ---------------------------
                            for($i=1; $i <= $Total_pag3; $i++)
                                {
                                    echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";

                                }
                        }else{
                                echo"No se encontro contenido oficial de la pagina  correspondiente a Vidrio<br>";
                        }
                        ?>
                    </div>
                </div>
                    <button class="boton4" id="boton4"><p>Organicos</p></button>
            <div class="bloque4" id="bloque4"><b>Aprende a reciclar > Organicos</b>
            <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a  class= "Crear" href="../Insertar-contOfi/index.php">Crear</a> <?php }?>
                            <?php }else{echo "";}?>
            <hr>
                <div class="bloque-content"><?php
                            if($ver->Tot_reg4>0){
                                while($Fila4 = mysqli_fetch_row($ver->resultado4)){
                                    $id=$Fila4[1];
                                    $title=$Fila4[0];
                                    ?>
                                    <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                        <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                        <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                                    </form><hr>
                                    <?php
                                }
                                    //------------------------------ PAGINACIÓN ---------------------------
                                    for($i=1; $i <= $Total_pag4; $i++)
                                        {
                                            echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                                        }
                            }else{
                                        echo"No se encontro contenido oficial de la pagina  correspondiente a Organicos<br>";
                                    }
                                    ?>
                </div>
            </div>
                <button class="boton5" id="boton5"><p>Plastico</p></button>
                <div class="bloque5" id="bloque5"><b>Aprende a reciclar >Plastico</b>
                <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a  class= "Crear" href="http://localhost/ejercicios/ecolombia/vista/Insertar-contOfi/index.php">Crear</a> <?php }?>
                            <?php }else{echo "";}?>
                <hr>
                    <div class="bloque-content"><?php
                            if($ver->Tot_reg5>0){
                                while($Fila5 = mysqli_fetch_row($ver->resultado5)){
                                    $id=$Fila5[1];
                                    $title=$Fila5[0];
                                    ?>
                                    <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                        <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                        <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                                    </form><hr>
                                    <?php
                                }
                                    //------------------------------ PAGINACIÓN ---------------------------
                                    for($i=1; $i <= $Total_pag5; $i++)
                                        {
                                            echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                                        }
                            }else{
                                        echo"No se encontro contenido oficial de la pagina  correspondiente a Plastico<br>";
                                    }
                                            ?>
                                        </div>
            </div>
                <button class="boton6" id="boton6"><p>Metal</p></button>
                <div class="bloque6" id="bloque6"><b>Aprende a reciclar > Metal</b>
                <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a class= "Crear"  href="../Insertar-contOfi/index.php">Crear</a> <?php }?>
                            <?php }else{echo "";}?>
                <hr>
                <div class="bloque-content"><?php
                        if($ver->Tot_reg6>0){
                            while($Fila6 = mysqli_fetch_row($ver->resultado6)){
                                $id=$Fila6[1];
                                $title=$Fila6[0];
                                ?>
                                <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                    <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                    <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                                </form><hr>
                                <?php
                            }
                                //------------------------------ PAGINACIÓN ---------------------------
                                for($i=1; $i <= $Total_pag6; $i++)
                                    {
                                        echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                                    }
                        }else{
                                echo"No se encontro contenido oficial de la pagina  correspondiente a Metal<br>";
                            }
                                        ?>
                                    </div>
            </div>
                <button class="boton7" id="boton7"><p>Papel</p></button>
                <div class="bloque7" id="bloque7"><b>Aprende a reciclar > Papel</b>
                <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a  class= "Crear" href="../Insertar-contOfi/index.php">Crear</a> <?php }?>
                            <?php }else{echo "";}?>
                <hr>
                <div class="bloque-content"><?php
                    if($ver->Tot_reg7>0){
                        while($Fila7 = mysqli_fetch_row($ver->resultado7)){
                            $id=$Fila7[1];
                            $title=$Fila7[0];
                            ?>
                            <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                            </form><hr>
                            <?php
                        }
                            //------------------------------ PAGINACIÓN ---------------------------
                            for($i=1; $i <= $Total_pag7; $i++)
                                {
                                    echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                                }
                            }else{
                                    echo"No se encontro contenido oficial de la pagina  correspondiente a Papel<br>";
                                }
                                ?>
                    </div>
            </div>
                <button class="boton8" id="boton8"><p>RAEE</p></button>
                <div class="bloque8" id="bloque8"><b>Aprende a reciclar > Residuos peligrosos</b>
                <?php
                        if(isset($_SESSION['crendenciales'])){
                            if(($_SESSION['crendenciales']['type'] == 4)){?> <a  class= "Crear" href="../Insertar-contOfi/index.php">Crear</a> <?php }?>
                            <?php }else{echo "";}?>
                <hr>
                <div class="bloque-content" ><?php
                        if($ver->Tot_reg8>0){
                            while($Fila8 = mysqli_fetch_row($ver->resultado8)){
                                $id=$Fila8[1];
                                $title=$Fila8[0];
                                ?>
                                <form method='post' target ="_blank"action="../Ver-aprende/Ver-aprende.php">
                                    <input type="hidden" name="id_entrada" value=<?php echo $id;?>>
                                    <input type="submit" class="title"id="boton_title"value="<?php  echo $title;?>">
                                </form><hr>
                                <?php
                            }
                                //------------------------------ PAGINACIÓN ---------------------------
                                for($i=1; $i <= $Total_pag8; $i++)
                                    {
                                        echo " <a class ='Pag' href= '?pagina=" . $i . "'>" . $i . "</a>";
                                    }
                            }else{
                                    echo"No se encontro contenido oficial de la pagina  correspondiente a Residuos peligrosos<br>";
                                }
                                ?>
                                </div>
            </div>

            <!-- BLOQUE DE BUSQUEDA -->
            <button class="boton9"id="boton9"><p >BUSCAR</p></button>
                <div class="bloque9" id="bloque9"><b>Aprende a reciclar > BUSQUEDA</b>
                <hr>
                    <div class="bloque-content">
                        <form method="POST" action="Eco-aprende_buscar.php" target="_blank">
                            <input type="text" placeholder="" maxlength="100" name="busqueda" id="busqueda" required>
                            <input id="enviar" type ="submit" name="enviar" value="Buscar">
                            </form>
                    </div>
                </div>
    </div>
<section>
<script src="javascript/nav-aprende.js"></script>