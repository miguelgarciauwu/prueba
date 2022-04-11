<?php
class Testregister extends \PHPUnit\Framework\TestCase{
    
   
   public function testinsertar(){
        $Username="Usuario Nuevo";
        $Password="usser";
        $Nombre="Soy nuevo";
        $Apellido="muy nuevo";
        $Correo="nuevo correo";
        include("register.php");
        $conexion= adminBD::conectar();
        $test = Testregistro::registrar($conexion,$Username,$Password,$Nombre,$Apellido,$Correo);
        $this->assertEquals(1,$test);
   }
}

?>