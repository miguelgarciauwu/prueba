<?php
require_once ("../../modelo/ForoInvitado/ForoC.php");
require_once ("../../BsDConexion/adminBD.php");

$Muestra = new mostrar();
$Muestra->cantidad();
$Tamano_paginas=5;
if(isset($_GET['pag'])){
  if($_GET['pag']==1){
    header("Location:indexInvitado.php");
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
$Muestra->MostrarDatos($Empezar,$Tamano_paginas);
?>
