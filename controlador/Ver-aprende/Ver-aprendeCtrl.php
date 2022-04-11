<?php
require_once("../../modelo/Ver-aprende/Ver-aprendeC.php");
require_once("../../BsDConexion/adminBD.php");
$id = $_POST['id_entrada'];
$Conex= ConexDB::ConexionDB($host, $user, $pass, $NomDB);
$ver= new Ver($id);
$ver->observar($Conex);

?>