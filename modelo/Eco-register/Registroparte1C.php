<link rel="stylesheet" href="../../vista/Eco-register/estilos-register.css">
<?php
require_once("../../BsDConexion/adminBD.php");
conectar::conectarse($host, $root,$pass,$db);
class verificacioncorreo
{
    public $correo;
    public $code;

    public function __construct($correo){
        $this->correo = $correo;
    }
    public function generatecode()
    {
        $matriz = "123456789123456789abc";
        $longitud = 4;
        $code = substr( str_shuffle($matriz),0,$longitud);
        $this->code = $code;
    }
    public function verificar($conex){
        //verificar si existe el correo ingresado en la base de datos
        $consultacorreo = "SELECT count(*) FROM usuario_registrado WHERE Correo ='$this->correo'";
        $consultacorreo_resultado = mysqli_query($conex , $consultacorreo);
        $almacen_consulta= mysqli_fetch_row($consultacorreo_resultado);
        if(($almacen_consulta[0])==1){//existe un usuario con ese correo
            echo' <script language="javascript">alert("Ya existe una cuenta asociada a el correo ingresado por favor ingrese uno valido ");
            window.location = "../../vista/Eco-register/eco-registerparte1.php";
            </script>';
        }else{//el correo no esta registrado
            ?>
            <form method='post' action="verificacion_cod.php">
                                <input type="email" readonly id="correo" name="correo" value=<?php echo $this->correo;?>>
                                <input type="hidden" name="codigo" value=<?php echo $this->code;?>>
                            <input type="submit" name ="siguiente"class="siguiente" id="siguiente"value="siguiente">
                            </form> <hr>
            <?php
            }
        }
}
?>