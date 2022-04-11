<?php
//session_start();
//require "../../vista/Eco-perfil/nav.php";
require "../../modelo/Eco-aprende/Eco-aprendeC.php";
//require "../../vista/Eco-aprende/Conexion_DB.php";
require_once("../../BsDConexion/adminBD.php");

conectar::conectarse("localhost", "root","","ecolombia");
$ver = new consultaraprende();
$ver-> titulos($conex);

//si se efectua la consulta
if(isset($_POST['enviar'])){
    $busqueda = $_POST['busqueda'];
    $buscar = new busqueda($busqueda);
    $buscar->titulos($conex);
}
