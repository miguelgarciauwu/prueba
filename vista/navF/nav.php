
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- <?php session_start();?> -->
	<meta charset="UTF-8">
	<link rel="stylesheet" href="../navF/css/nav.css">
	<link rel= "shortcut icon" href="iconos/iconopag.png" type="imagen/x-icon">
</head>
    <div class='navegation'>
        <nav class="nav">

        <?php
            if(isset($_SESSION['credenciales']))
            {   if( ($_SESSION['crendenciales']['type'])==4)
                    {?><a href="../index-admins" class="logoI" ><img src='Imagenes/logoadmin.png' width='250px' height='50px'></a><?php
                    }else{?>
                        <!-- Usuario -->
                        <a href="../Eco-principal/index.php" class="logoI" ><img src='Imagenes/Logo.png' width='250px' height='50px'></a> <?php }?>
        <?php       }else{ ?>
                <!-- Invitado -->
                <a href="../Eco-principal/index.php" class="logoI" ><img src='Imagenes/Logo.png' width='250px' height='50px'></a>
                <?php } ?>
        <a href="../Eco-principal/index.php">Inicio</a>
		<a href="../Eco-principal/index.php#aprende">Aprende a reciclar</a>

        <?php
            if(isset($_SESSION['credenciales']))
                {   if( ($_SESSION['crendenciales']['type'])==4)
                        {?><a href="../Foros/index.php">Foros</a><?php
                        }else{?>
                            <a href="../Foros/indexUser.php">Foros</a> <?php }?>
            <?php       }else{ ?>
                <a href="../Foros/indexInvitado.php">Foros</a>
                    <?php } ?>



		<a href="../Eco-principal/index.php#quien">¿Quienes somos?</a>
        <button class="icono-nav-button " id="icono-nav-button"></button>
        </nav>
    </nav>
    </div>
    <div class="icono-nav-bloque" id="icono-nav-bloque">
        <ul>

            <?php if(isset($_SESSION['credenciales'])==false){?>
        <li id="ingresar1"><a href="../Eco-login"><span>Ingresar</a></span></li>
        <li id="ingresar2"><a href="../Eco-register/eco-registerparte1.php"><span>Registrar</span></a></li><?php 
    }else{?>
        <li id="ingresado1"><a href="../Eco-perfil/perfil.php"><span>Perfil</span></a></li>
        <li id="ingresado2" class="perfil-fin"><a href="../../controlador/Eco-logout/logoutctrl.php">Salir de cuenta</a></li> <?php  }?>
        
        <li id="ingresar"><a href="https://drive.google.com/file/d/1JIU1pEa97gQrPdmK3ZRqzvgTGbHc1ldL/view?usp=sharing"><span>Ayuda</a></span></li>
        </ul>
    </div>
</head>
<script src="javascript/nav.js"></script>