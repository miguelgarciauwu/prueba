<?php

$Idusur=$_SESSION['credenciales']['id'];

require_once("../../Modelo/ForoCrear/Guardar.php");
require_once("../../BsDConexion/adminBD.php");

if(isset($_POST['Guardar'])){

  ?>       
  <link rel="stylesheet" href="../../vista/ForoCrear/css/DisForm.css">
  <?php
  echo "<div class='overlay'>";
    echo "<div class='popup'>";
      echo "<h3><b>DATOS INGRESADOS</b></h3><br>";

    $Titulo=$_POST['Titulo'];

    echo "<b><br>Titulo Foro:</b> $Titulo";

    $fcha=Foro::FechaCreacion();

    $nombreImg=Foro::VerificarImg();
    $nombreVid=Foro::VerificarVid();

    $Mensaje=$_POST['Mensaje'];

    echo "<br><b> Mensaje del foro:<br></b><textarea class='mensaje' name='mensaje' disabled>$Mensaje</textarea>";
    // echo "<br><b> Mensaje del foro:</b> $Mensaje";
    echo "<b><br>Fecha de creacion:</b> $fcha <br>";

    $foro1 =new Foro($Titulo,$fcha,$nombreImg,$nombreVid,$Mensaje,$Idusur);
    $foro1->GuardarForo();
    ?>
      <?php if( ($_SESSION['crendenciales']['type'])==4){?>

        <a href='../../vista/Foros/index.php'><input type='button' class='btn-aceptar-popup' value='Aceptar'></a>
          
      <?php }else{?>
        <a href='../../vista/Foros/indexUser.php'><input type='button' class='btn-aceptar-popup' value='Aceptar'></a>
              <?php } 
   echo "</div>";
  echo "</div>";
  }
?>
