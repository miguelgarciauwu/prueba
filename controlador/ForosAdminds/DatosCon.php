<?php
//Archivos que se requieren
    require_once("../../modelo/ForosAdminds/Consulta.php");
    require_once("../../BsDConexion/adminBD.php");
//Nueva instancia creada
    $Foro=new ForosId;
    //Conexion a BD
    $conexion=adminBD::conectar();
    $resultado=ForosId::getDatos($conexion,$Id);
    $Muestra=ForosId::cantidad($conexion,$Id);
    //Control de Paginación
    $Tamano_paginas=8;
    if(isset($_GET['pag'])){
      if($_GET['pag']==1){
        header("Location:../../vista/ForoAdminds/BuscarForosUsers.php");
      }else{
        $pagina=$_GET['pag'];
      }
    }else{
    $pagina=1;
    }
    $Empezar=($pagina-1)*$Tamano_paginas;
    $num_filas=mysqli_num_rows($dat2);
    $totalPag=ceil($num_filas/$Tamano_paginas);
    
?>
