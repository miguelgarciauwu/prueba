<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/manualidades.css">
</head>
<section class="manualidade">
<a name="manualidades"></a>
	<div class="manualidad">
	<h2 class="titulo" id="tituloforo" >Foro</h2>
	<div class="manualidades">
	<img  src="iconos/eco-perri/Eco perri sobre Colombia.png" alt="" class="eco-perri2">
	<div class="contenido-textos1">
	<p><h3><span>+</span></h3> </p><p id="textforo">Las mejores ideas pueden venir de cualquier lado. Te invitamos a 
		compartir tus ideas sobre reciclaje o a ver la de otros participantes en 
		<?php if(isset($_SESSION['credenciales']))
                {   if( ($_SESSION['crendenciales']['type'])==4)
                        {?><a href="../Foros/index.php">Foros</a><?php
                        }else{?>
                            <a href="../Foros/indexUser.php">Foros</a> <?php }?>
            <?php       }else{ ?>
                <a href="../Foros/indexInvitado.php">Foros</a>
                    <?php } ?>
	</p>
</div>
</div>
</section>