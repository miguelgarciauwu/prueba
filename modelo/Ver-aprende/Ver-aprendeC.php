<?php
require_once("../../BsDConexion/adminBD.php");
ConexDB::ConexionDB($host, $user, $pass, $NomDB);
class Ver
    {
        public $id;
    public function __construct($Id)
        {
            $this->id = $Id;
        }
    //CONSULTA SQL ver el contenido
    public function observar($Conex)
        {
        $Visualizar = "SELECT Titulo_cont_oficial,
                                Imagenes_cont_oficial,
                                Video_cont_oficial,
                                Cuerpo_del_mensaje_cont_oficial,
                                Id_clasificacion_Ofi
                        FROM contenido_oficial_de_la_pagina
                        WHERE Id_cont_oficial = '$this->id'";
        global $rta;
        $rta= mysqli_query($Conex, $Visualizar);
        return $rta;
        }
    }
?>

