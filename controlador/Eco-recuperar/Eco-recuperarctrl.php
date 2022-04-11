<meta charset= "UTF-8">
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../../modelo/Eco-recuperar/Eco-recuperarC.php';
require_once("../../BsDConexion/adminBD.php");
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
// echo $pass;
conectar::conectarse($host, $root,$pass,$db);
PHPMailer::CHARSET_UTF8;
// direccion del correo del usuario o destinatario
$email = $_POST['mail'];
$recuperar = new passnew($email);
$recuperar->createpass($conex);
$mail = new PHPMailer(true);
$recuperar->recuperarUser($conex);
$mensaje = "
<div style='
padding: 0;
margin:0;
box-sizing:border-box;
'>
<div style='
    background-image: url(https://besthqwallpapers.com/Uploads/15-11-2020/144768/thumb2-retro-eco-background-blue-background-with-green-leaves-eco-background-green-leaves-background-leaves-texture.jpg);
    width: 100%;
    height: 600px;
    display: block;
    background-size: 100%;
    min-width: 961px ;
    '>
<div style='
background:rgba(144, 212, 252, 0.678);
display: block;
width: 50%;
height: 70px;
margin:  20px auto;
position: relative;
top:0px;
margin-top: 0px;
margin-bottom: 20px;
max-width: 351.969px;
max-height: 76.484px;
border-radius: 10px;
' >
    <img src='https://i.postimg.cc/6q6dqWZy/Eco-logo.png' width='100%'  style='
    display:block;
    margin: auto;
    max-width: 351.969px;
    max-height: 76.484px;
    background:rgba(144, 212, 252, 0.678);
    border-radius: 10px;
    position: relative;
    top:0px;
    margin-top: 0px;
    margin-bottom: 20px;
    '></img></div>
<div style='
background: rgba(181, 247, 150, 0.92);
border: solid 2px rgb(181, 247, 150);
border-radius: 10px;
margin-left: 10%;
width: 80%;
height: 30%px;
min-width:628.797px ;
position: relative;'>
<h2 style='
font-size:30px;color: rgb(12, 43, 3);
padding: 15px 10px 5px 10px;
text-align: center;
margin: 0;
'> La recuperacion de contraseña fue satisfactoria se le asigno provisionalmente la siguiente <hr style='padding: 0; margin: auto; margin-top: 10px; width: 90%;'> </h2>
<h3 style='
font-size: 35px;
text-align: center;
padding: 0;
margin: 0;
margin-bottom: 10px;
'>$code  <hr style='padding: 0; margin: auto;margin-top: 5px; width: 88%;'></h3>
<p style='text-align: center;'><b style='
font-size:30px;'>
    Usuario: $user</b> </p>
    <p style='
    padding:10px;
    margin-left:40px;
    '>Le sugerimos que haga una actualización de la contraseña para mayor seguridad. Si usted no realizo esta solicitud, comuniquese con los administradores del sitio web ó siga el protocolo</p></div>
<br></div>

    <div style='
    position: relative;
    bottom:200px;
    width: 80%;
    min-width:628.797px ;
    margin: auto;
    padding: 5px 10px 10px 10px ;
    border: solid 1px rgba(119, 247, 208, 0.651);
    border-radius: 5px;
    background:rgba(119, 247, 208, 0.651);
    '>
        <h3 style='padding: 0;
        margin: 0;'>Sistema de información para fomentar la conciencia del buen manejo de los residuos ECO-LOMBIA   </h3>
        <b>Contacto:<br> ecolombiaeco@gmail.com</b><br>
        <a href='../../vista/Eco-principal/index.php' style='text-decoration: none; color:#000; font-weight: bold;'>ir al sitio web Eco-lombia</a>
        <img src='https://i.postimg.cc/6q6dqWZy/Eco-logo.png' width ='100%'  style='
        display: block;
        position: relative;
        right: 10px !important;
        bottom: 10px !important;
        width: 200px;
        height: 70px;
        '></img>
    </div>
</div>
";

    try {
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
            );
        //Server settings
        $mail->SMTPDebug = 2;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'ecolombiaeco@gmail.com';                     //SMTP username
        $mail->Password   = 'eco123456';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('pruebacorreo@gmail.com', 'Eco-lombia');
        $mail->addAddress( $email);     //Add a recipient
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Recuperacion de cuenta Ecolombia';
        $mail->Body    = $mensaje;
        $mail->send();
        echo 'Message enviado';
    } catch (Exception $e) {
        echo "Message no enviado. Mailer Error: {$mail->ErrorInfo}";
    }

?>