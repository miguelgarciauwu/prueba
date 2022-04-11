<?php 
class Testlogin extends \PHPUnit\Framework\TestCase{
    public function testpass(){
        $User ="a";
        $pass = "b";
        include("Login.php");
        $conexion=adminBD::conectar();
        $PASS= PassTest::validar($conexion,$User,$pass);
        $this->assertEquals(1, $PASS);
    }
}
    ?>