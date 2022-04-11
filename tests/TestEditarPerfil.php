<?php

class TestEditPerfil extends \PHPUnit\Framework\TestCase{

    public function testedituser(){
        $Nombre="larry";
        $Apellido="laurel";
        $Correo="lambor@gmail.com";
        $Ciudad="la";
        $Pais="Colombia";
        $Institucion="";
        $User="Larryxd";
        $Pass="larrypass";
        $Estado="1";
        $id_usuario="69";
        include("EditarPerfil.php");
        $conexion= adminBD::conectar();
        $Editar =editarUsuario::editar($conexion,$Nombre, $Apellido, $Correo, $Ciudad, $Pais, $Institucion, $User, $Pass,$Estado, $id_usuario);
        // echo $Editar. "PuP";
        $this->assertEquals(1,$Editar);
    }
}

?>
