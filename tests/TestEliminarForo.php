<?php

class Testeliminarforo extends \PHPUnit\Framework\TestCase{
    public function testeliminar(){
        $idforo ="3";
        include("Eliminarforo.php");
        $conexion = adminBD::conectar();
        $testEliForo = Eliminados::EliminarDato($conexion,$idforo);
        // echo $testforo. "OuO";
        $this->assertEquals(1,$testEliForo);
    }
}

