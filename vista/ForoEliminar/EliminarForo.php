<link rel="stylesheet" href="css/FormDelete.css">
<?php

$IDforo=$_REQUEST['id'];
$Titulo=$_REQUEST['til'];

?>


<form action="../../controlador/Eliminar-contOfi/DeleteCtrl.php" method="POST" class="FormDelete" >
        <h3 class="h3_delete">El foro a eliminar</h3><br>

    <label>Id del foro a eliminar</label>
        <input type="text" name="Id_cont_ofi" readonly="readonly" value="<?php echo $IDforo;?>"><br>

    <label>Titulo del foro a eliminar</label>
        <input type="text" id="input_titulo" name="titulo_cont_ofi" readonly="readonly" value ="<?php echo $Titulo;?>"><br>

        <a href="../../controlador/ForoEliminar/ControladorDelete.php?idF=<?php echo $IDforo; ?>">
        <button type = "button" name="eliminar_cont_ofi">Eliminar Foro</button></a>
        <a href = "../NotificacioAdmin/NotiForos.php" class="text_cancelar">Cancelar</a>
        </form>