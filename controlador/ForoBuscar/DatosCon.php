<?php
    require_once("../../modelo/ForoBuscar/Consulta.php");
    require_once("../../BsDConexion/adminBD.php");

    $Foro=new ForosId;
    $conexion=adminBD::conectar();
      //calcular cantidad de paginas para Paginacion
    $Muetra=ForosId::cantidad($conexion,$Busqueda);
    $Tamano_paginas=6;
    if(isset($_GET['pag'])){
      if($_GET['pag']==1){
        header("Location:../../vista/ForoBuscar/Resultado.php?buscar=".$_GET['buscar']);
      }else{
        $pagina=$_GET['pag'];
      }
    }else{
    $pagina=1;
    }
    $Empezar=($pagina-1)*$Tamano_paginas;
    $num_filas=mysqli_num_rows($dat1);
    $totalPag=ceil($num_filas/$Tamano_paginas);

    $resultados=ForosId::getDatos($conexion,$Busqueda,$Empezar,$Tamano_paginas);

?>
