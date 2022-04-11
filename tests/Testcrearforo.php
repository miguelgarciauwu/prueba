<?php

class Testcrearforo extends \PHPUnit\Framework\TestCase{
    public function testcrear(){
        $Titulo = "PRUEBA 1";
        $Fecha = "2022-04-01";
        $Cuerpo = "hola como te va en estos momentos estammos mamadisimos";
        $Iduser = "66";
        include("Crear_foro.php");
        $conexion = adminBD::conectar();
        $testforo = Crearforotest::GuardarForo($Titulo, $Fecha, $Cuerpo, $Iduser, $conexion);
        echo $testforo. "OuO";
        $this->assertEquals(1,$testforo);
    }
}

?>