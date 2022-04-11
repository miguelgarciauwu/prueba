<?php
//CONTROLADOR PARA ACTUALIZAR FORO EDITADO
require_once("../../modelo/ForoEditar/Guardar.php");
require_once("../../BsDConexion/adminBD.php");

if(isset($_POST['actualizar'])){
  echo "<div class='overlay'>";
  echo "<div class='popup'>";
  echo "<div class='Form'>";
  
  echo "<b>Actualización Correcta</b><br>";
      $Img=$_FILES['imag']['name'];
      $Vid=$_FILES['vid']['name'];
    //No se subío una nueva imagen y video
    if(($Img=="")&&($Vid=="")){
      $Titulo=$_POST['titulo'];

      $fcha=Foro::FechaCreacion();

      echo "<br><b>Titulo Foro: </b>$Titulo";
      
      $Mensaje=$_POST['mensaje'];

      echo "<br><b>Mensaje del foro:</b> $Mensaje";
      echo "<br><b>Fecha de creacion:</b> $fcha ";

      $nombreImg=NULL;
      $nombreVid=NULL;

      $foro1 =new Foro($Titulo,$fcha,$nombreImg,$nombreVid,$Mensaje);
      $foro1->ActualizarForo0($Id);
    }else{
      //se subío un video nuevo
      if($Img==""){

        $Titulo=$_POST['titulo'];

        $fcha=Foro::FechaCreacion();

        echo "<br><b>Titulo Foro:</b> $Titulo";

        $nombreVid=Foro::VerificarVid();

        $Mensaje=$_POST['mensaje'];

        echo "<br><b>Mensaje del foro:</b> $Mensaje";
        echo "<br><b>Fecha de creacion:</b> $fcha";

        $nombreImg="<br>No hay imagen";

        $foro1 =new Foro($Titulo,$fcha,$nombreImg,$nombreVid,$Mensaje);
        $foro1->ActualizarForoImg($Id);
      }else{
        //Se subio una nueva imagen 
        if($Vid==""){

          $Titulo=$_POST['titulo'];

          $fcha=Foro::FechaCreacion();

          echo "<br><b>Titulo Foro:</b> $Titulo";

          $nombreImg=Foro::VerificarImg();

          $Mensaje=$_POST['mensaje'];

          echo "<br><b>Mensaje del foro:</b> $Mensaje";
          echo "<br><b>Fecha de creacion:</b> $fcha";

          $nombreVid="<br>No hay video";

          $foro1 =new Foro($Titulo,$fcha,$nombreImg,$nombreVid,$Mensaje);
          $foro1->ActualizarForoVid($Id);
        }
          else{
            //Se subio imagen y video
            $Titulo=$_POST['titulo'];
            $fcha=Foro::FechaCreacion();

            echo "<br><b>Titulo Foro:</b> $Titulo";

            $nombreImg=Foro::VerificarImg();
            $nombreVid=Foro::VerificarVid();
            $Mensaje=$_POST['mensaje'];

            echo "<br><b>Mensaje del foro:</b> $Mensaje";
            echo "<br><b>Fecha de creacion:</b> $fcha";

            $foro1 =new Foro($Titulo,$fcha,$nombreImg,$nombreVid,$Mensaje);
            $foro1->ActualizarForo($Id);
          }
        }
      }
      //Redireccion dependiendo las credenciales
      if( ($_SESSION['crendenciales']['type'])==4){?>
        <a href='../Foros/index.php'>
      <br><br>
      <input type='button' value='Siguiente' name='actualizar' style='background:#39793d; color:#FFFFFF ; width:100px;height:30px;'>
      </a>
        <?php 
      }else{?>
      <a href='../Foros/indexUser.php'>
      <br><br>
      <input type='button' value='Siguiente' name='actualizar' style='background:#39793d; color:#FFFFFF ; width:100px;height:30px;'>
      </a> <?php 
      } ?>
  </div>
<?php
}
echo "</div>";
echo "</div>";
?>
