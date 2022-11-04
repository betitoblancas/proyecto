<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


   

function enviviarCorreos($correo,$asunto,$mensaje){
    
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function

require_once '../libreria/PHPMailer-master/src/PHPMailer.php';
require_once '../libreria/PHPMailer-master/src/SMTP.php';
require_once '../libreria/PHPMailer-master/src/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                   //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'donitasali10@gmail.com';                     //SMTP username
    $mail->Password   = 'ihbbfbuvfxpygnil';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('donitasali10@gmail.com', 'Nombre de la escuela');
    //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
    $mail->addAddress($correo);               //Name is optional

    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
   // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = $mensaje;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo true;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
}

if (!empty($_POST['correo_docente']) ?? []) {
    $asunto=$_POST['asunto'] ?? NULL;
    $mensaje=$_POST['mensaje'] ?? NULL;

    foreach ($_POST['correo_docente']as $key => $correo){   
        if (!enviviarCorreos($correo,$asunto,$mensaje)) {
            $errores[] = $key;
        }
             
    }
}

