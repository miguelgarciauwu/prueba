<?php
    class logoutC {
        function close(){
            session_start();
            session_destroy();
            header("location: ../../vista/Eco-principal/index.php");
        }
    }
?>