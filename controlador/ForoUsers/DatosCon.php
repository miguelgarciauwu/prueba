<?php
require_once("../../modelo/ForoUsers/Consulta.php");
require_once("../../BsDConexion/adminBD.php");
$Id = $_SESSION['credenciales']['id'];


    //$DatoF=new ForosId;
    $conexion=adminBD::conectar();
    //calcular cantidad de paginas para Paginacion
    $Muestra=ForosId::cantidad($conexion,$Id);
    $Tamano_paginas=5;
    if(isset($_GET['pag'])){
      if($_GET['pag']==1){
        header("Location:MisFOros.php");
      }else{
        $pagina=$_GET['pag'];
      }
    }else{
    $pagina=1;
    }
    $Empezar=($pagina-1)*$Tamano_paginas;
    $num_filas=mysqli_num_rows($dat2);
    $totalPag=ceil($num_filas/$Tamano_paginas);
    //resultado consulta
    $resultadoD=ForosId::getDatos($conexion, $Id);
    $resultadoF=ForosId::getForo($Id, $Empezar, $Tamano_paginas);

?>
