<link rel="stylesheet" href="../../vista/Eco-register/verificacion_cod.css">
<?php

if (isset($_POST['verificar']))
    {
        if (
            strlen($_POST['correo']) >= 1 &&
            strlen($_POST['code']) >= 1 &&
            strlen($_POST['codigo']) >= 1
        )
        {
            $code = $_POST['code'];
            $codigo = $_POST['codigo'];
            $correo = $_POST['correo'];
            if($code === $codigo){
                
                ?>
                <h3>Ya casi terminamos solo diligencia el registro con tus datos...</h3>
                <form id="form1" method='post' action="../../vista/Eco-register/eco-register.php">
                    <input type="hidden" name="correo" value=<?php echo $_POST['correo'];?>>
                    <input type="submit" name="Siguiente" class="Siguiente1" id="Siguiente1"value="Siguiente">
                </form>
                <?php
            }else{
                echo '<script>alert("Lo hiciste mal Eco-parcero ingresa uno nuevo") ;
                window.location="../../vista/Eco-register/eco-registerparte1.php"</script>';
            }
        }
    }
?>