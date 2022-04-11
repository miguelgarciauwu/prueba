<link rel="stylesheet" href="Estilo.css">
<meta charset= "UTF-8">

<?php
    // include "../../vista/Insertar-contOfi/index.php";
    include ("../../modelo/Insertar-contOfi/Eco-CrearOfiC.php");
//CAPTURAR EL SESSION DEL ADMINISTRADOR
    $a = ($_SESSION['credenciales']['id']);

    //TOMA DE DATOS DEL FORMULARIO

    if(isset($_POST['button-publish'])){
        if (strlen($_POST['title']) >= 1 && strlen($_POST['body']) >= 1 ){

            //VARIABLES QUE ALMACENARÁN LOS DATOS INGRESADOS EN EL FORMULARIO
            $titulo = trim($_POST['title']);
            // $img = ($_POST['image']);
            // $video = ($_POST['video']);
            $cuerpo = trim($_POST['body']);
            $clasification = ($_POST['clasification']);

                //CICLOS IF PARA CONVERTIR EL TEXTO EN NÚMEROS
            // if(isset($_POST['clasification']))
            // {
                if($clasification== "Generalidades")
                    {
                        $clasification = "1";
                    }
                if($clasification== "Carton")
                    {
                        $clasification = "2";
                    }
                if($clasification== "Vidrio")
                    {
                        $clasification = "3";
                    }
                if($clasification== "Organico")
                    {
                        $clasification = "4";
                    }
                if($clasification== "Plastico")
                    {
                        $clasification = "5";
                    }
                if($clasification== "Metal")
                    {
                        $clasification = "6";
                    }
                if($clasification== "Papel")
                    {
                        $clasification = "7";
                    }
                if($clasification== "RAEE")
                    {
                        $clasification = "8";
                    }

            //GUARDAR LA IMAGEN
            $nombreImg=$_FILES ['image']['name'];
            $tipoImg=$_FILES ['image']['type'];
            $tamaImg=$_FILES ['image']['size'];

                if($tamaImg<=01)
                    {
                        echo "<h4 class='noimg'>No se ha cargado Imagen</h4> <br>";
                    }else{
                            if ($tamaImg<=5000000)
                                {
                                    if($tipoImg=="image/jpeg" || $tipoImg=="image/jpg" || $tipoImg=="image/png")
                                        {
                                            echo "<h4 class= 'imgT'>Se cargó la imagen con éxito </h4><br>";
                                            $destino=$_SERVER['DOCUMENT_ROOT'] . '/intranet/ImageContOfi/';
                                            move_uploaded_file($_FILES['image']['tmp_name'] , $destino . $nombreImg);
                                        }else
                                            {
                                                echo "<h4 class ='extI'>Extenciones permitidas .png , .jpeg , .jpg </h4><br>";
                                            }
                                }else
                                    {
                                        echo"<h4 class ='tamlmg'>Tamaño de imagen demaciado grande, tamaño permidito es menos de 5mg </h4><br>";
                                    }
                        }

            //GUARDAR EL VIDEO
            $nombreVid=$_FILES ['video']['name'];
            $tipoVid=$_FILES ['video']['type'];
            $tamaVid=$_FILES ['video']['size'];

                if($tamaVid<=01)
                    {
                        echo "<h4 class='noVid'>No se ha cargado Video </h4><br>";
                    }else
                        {
                            // print_r($_FILES);
                            if ($tamaVid<=45000000)
                                {
                                    if($tipoVid=="video/mp4")
                                    {
                                        echo "<h4 class= 'VidT'>Se ha cargado Video </h4><br>";
                                        $destinoV=$_SERVER['DOCUMENT_ROOT'] . '/intranet/VideosContOfi/';
                                        move_uploaded_file($_FILES['video']['tmp_name'] , $destinoV . $nombreVid);
                                    }else
                                        {
                                            echo "<h4 class ='extV'>Extenccion permitida .mp4 </h4> <br>";
                                        }
                                }else
                                    {
                                        echo"<h4 class ='tamMul'>Tamaño de video demaciado grande, tamaño permidito es menos de 50mg </h4><br>";
                                    }
                        }
                $agregar= new crearContOfi($titulo, $nombreImg, $nombreVid, $cuerpo, $clasification,$a);
                $agregar->insertarOfi();
                // header("location:http://localhost/ejercicios/ecolombia/vista/Insertar-contOfi/");

    }
}


?>
