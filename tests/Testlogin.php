<?php

class Testlogin extends \PHPUnit\Framework\TestCase{

    public function testingreso(){

        $User = "a" ;
        include("Login.php");
        $conexion= adminBD::conectar();
        $CLASE =Validartest::confirmar($conexion,$User);
        $this->assertEquals($CLASE, 1);

    }
}

?>
