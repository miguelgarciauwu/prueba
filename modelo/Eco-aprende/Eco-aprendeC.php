<?php

require_once("../../BsDConexion/adminBD.php");


class consultaraprende{
    public $Tot_reg1;
    public $Tot_reg2;
    public $Tot_reg3;
    public $Tot_reg4;
    public $Tot_reg5;
    public $Tot_reg6;
    public $Tot_reg7;
    public $Tot_reg8;
    public $titulo1;
    public $titulo2;
    public $titulo3;
    public $titulo4;
    public $titulo5;
    public $titulo6;
    public $titulo7;
    public $titulo8;
    public $id1;
    public $id2;
    public $id3;
    public $id4;
    public $id5;
    public $id6;
    public $id7;
    public $id8;
    public $resultado1;


    public function titulos($conex){

            //DATOS Y COMPROBACIONES PARA LA PAGINACIÓN
    $Tam_pag= 10;
        if(isset($_GET["pagina"]))
        {
            if($_GET["pagina"]=="1")
                {
                    header("location:../../vista/Eco-aprende/aprende-index.php");
                }else
                    {
                        $Pag= $_GET["pagina"];
                    }
        }else
            {
                $Pag= 1;
            }

    $empezar_desde = ($Pag-1)*$Tam_pag;



        //  CONSULTAS
        //CONSULTA PARA CONOCER LA CANTIDAD DE REGISTROS
        $Cantidad1="SELECT Titulo_cont_oficial, id_cont_oficial  FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '1'";
        $Cantidad2="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '2'";
        $Cantidad3="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '3'";
        $Cantidad4="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '4'";
        $Cantidad5="SELECT Titulo_cont_oficial , id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '5'";
        $Cantidad6="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '6'";
        $Cantidad7="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '7'";
        $Cantidad8="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '8'";
            //PETICIONES                                                          //CONTAR LOS REGISTROS
            $aplicar1 = mysqli_query($conex, $Cantidad1);                            $Tot_reg1= mysqli_num_rows($aplicar1);
            $aplicar2 = mysqli_query($conex, $Cantidad2);                            $Tot_reg2= mysqli_num_rows($aplicar2);
            $aplicar3 = mysqli_query($conex, $Cantidad3);                            $Tot_reg3= mysqli_num_rows($aplicar3);
            $aplicar4 = mysqli_query($conex, $Cantidad4);                            $Tot_reg4= mysqli_num_rows($aplicar4);
            $aplicar5 = mysqli_query($conex, $Cantidad5);                            $Tot_reg5= mysqli_num_rows($aplicar5);
            $aplicar6 = mysqli_query($conex, $Cantidad6);                            $Tot_reg6= mysqli_num_rows($aplicar6);
            $aplicar7 = mysqli_query($conex, $Cantidad7);                            $Tot_reg7= mysqli_num_rows($aplicar7);
            $aplicar8 = mysqli_query($conex, $Cantidad8);                            $Tot_reg8= mysqli_num_rows($aplicar8);


            //ALMACENAR LOS VALORES EN LOS ATRIBUTOS
            $this->Tot_reg1=$Tot_reg1;
            $this->Tot_reg2=$Tot_reg2;
            $this->Tot_reg3=$Tot_reg3;
            $this->Tot_reg4=$Tot_reg4;
            $this->Tot_reg5=$Tot_reg5;
            $this->Tot_reg6=$Tot_reg6;
            $this->Tot_reg7=$Tot_reg7;
            $this->Tot_reg8=$Tot_reg8;


        //SACAR LA CANTIDAD TOTAL DE REGISTROS DE LAS CONSULTAS
        global $Total_pag1;
        $Total_pag1= ceil($Tot_reg1/$Tam_pag);
        global $Total_pag2;
        $Total_pag2= ceil($Tot_reg2/$Tam_pag);
        global $Total_pag3;
        $Total_pag3= ceil($Tot_reg3/$Tam_pag);
        global $Total_pag4;
        $Total_pag4= ceil($Tot_reg4/$Tam_pag);
        global $Total_pag5;
        $Total_pag5= ceil($Tot_reg5/$Tam_pag);
        global $Total_pag6;
        $Total_pag6= ceil($Tot_reg6/$Tam_pag);
        global $Total_pag7;
        $Total_pag7= ceil($Tot_reg7/$Tam_pag);
        global $Total_pag8;
        $Total_pag8= ceil($Tot_reg8/$Tam_pag);


        //CONSULTA LIMITANDO LOS REGISTROS QUE SE MUESTRAN EN EL APARTADO DE APRENDE A RECICLAR
$consulta1 ="SELECT Titulo_cont_oficial, id_cont_oficial  FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '1' LIMIT $empezar_desde, $Tam_pag";
$consulta2 ="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '2'  LIMIT $empezar_desde, $Tam_pag";
$consulta3 ="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '3'  LIMIT $empezar_desde, $Tam_pag";
$consulta4 ="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '4'  LIMIT $empezar_desde, $Tam_pag";
$consulta5 ="SELECT Titulo_cont_oficial , id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '5' LIMIT $empezar_desde, $Tam_pag";
$consulta6 ="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '6'  LIMIT $empezar_desde, $Tam_pag";
$consulta7 ="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '7'  LIMIT $empezar_desde, $Tam_pag";
$consulta8 ="SELECT Titulo_cont_oficial, id_cont_oficial FROM contenido_oficial_de_la_pagina where id_clasificacion_Ofi = '8'  LIMIT $empezar_desde, $Tam_pag";
// PETICION
$resultado1=mysqli_query($conex, $consulta1);
$resultado2=mysqli_query($conex, $consulta2);
$resultado3=mysqli_query($conex, $consulta3);
$resultado4=mysqli_query($conex, $consulta4);
$resultado5=mysqli_query($conex, $consulta5);
$resultado6=mysqli_query($conex, $consulta6);
$resultado7=mysqli_query($conex, $consulta7);
$resultado8=mysqli_query($conex, $consulta8);


$this->resultado1=$resultado1;


$this->resultado2=$resultado2;
$this->resultado3=$resultado3;
$this->resultado4=$resultado4;
$this->resultado5=$resultado5;
$this->resultado6=$resultado6;
$this->resultado7=$resultado7;
$this->resultado8=$resultado8;
    }
}
//CLASE PARA EFECTUAR LA BÚSQUEDA
class busqueda{
    public $search;

    function __construct($search){
        $this->search = $search;
    }
    public function titulos($conex){
    $consulta9="SELECT Titulo_cont_oficial, id_cont_oficial  FROM contenido_oficial_de_la_pagina where Titulo_cont_oficial LIKE '%$this->search%' ";
    global $consultar9;
    $consultar9= mysqli_query($conex, $consulta9);
    return $consultar9;
    }
}
?>
