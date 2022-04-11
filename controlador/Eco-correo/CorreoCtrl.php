<?php
    //Generar el código aleatorio
        $charpass ='aAbBcCdDeEfFgGhHiIjJkKLlmMnNoOPpQQqRrSsTtuUVvZz0123456789-';
        $longitud = 15;
        $passant = substr( str_shuffle($charpass),0,$longitud);
        $pass = "eco".$passant;
    //Definicion de variables
        $Destinatario= $_POST['mail'];
            // echo "MAIL " . $Destinatario;
        $titulo= 'ECO-LOMBIA recuperacion de contraseña';
        $mensaje=  'Este el el codigo con el cual podrá ingresar a su cuenta,<br>
                    recuerde cambiarla cuando ingrese nuevamente. CODIGO: ' .$passant;
        $cabecera = 'MIME-Version: 1.0' . "\r\n";
        $cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        //Envio del correo electrónico
        $email= mail($Destinatario, $titulo, $mensaje, $cabecera);

        if($email==false)
            {
                echo "Ocuirrio un error al efectuar su solicitud";
            }else
                {
                    echo "Correo enviado POOOOOOOG";
                }





?>