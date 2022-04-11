<?php
// ARCHIVOS AÑADIDOS
require_once ("../../modelo/Foros/ForoUser.php");
require_once ("../../BsDConexion/adminBD.php");

// Se crea la instancia para la paginación
$Muestra = new mostrar();
$Muestra->cantidad();
$Tamano_paginas=5;
if(isset($_GET['pag'])){
  if($_GET['pag']==1){
    if(isset($_SESSION['credenciales'])){
      if( ($_SESSION['crendenciales']['type'])==4){ 
        header("Location:../../vista/Foros");
      }else{
        header("Location:../../vista/Foros/indexUser.php");
      }
    }else{
      header("Location:../../vista/Foros/indexInvitado.php");
    }
  }else{
    $pagina=$_GET['pag'];
  }
}else{
$pagina=1;
}
$Empezar=($pagina-1)*$Tamano_paginas;
$num_filas=mysqli_num_rows($ResultadoC);
$totalPag=ceil($num_filas/$Tamano_paginas);
echo "<div class='paginacionText'> Pagina $pagina de $totalPag <br></div>";
// Mostrar Entradas de foros, con cierta cantidad
$Muestra->MostrarDatos($Empezar,$Tamano_paginas);
?>
