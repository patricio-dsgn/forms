<?php

/*
verifica el acceso a esta página
presioando el botón enviar
en el formulario
*/
if(isset($_POST['submit'])){

    // CREAR VARIABLES

    // variable del formulario
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // variable mail destinatario
    $to = "patricio.ngg@gmail.com";

    // variable mail remitente
    $from = $email;

    // variable para email: asunto
    $subject = "Formulario Sitio Web: ". $name;
    $subject_copy = "Copia de su Formulario Web: ". $name;

    // variable para email: mensaje
    $msg = '
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        <div id="email-wrap" style="background: #43cea2; background: -webkit-linear-gradient(-45deg, #43cea2, #185a9d); background: linear-gradient(-45deg, #43cea2, #185a9d); color: #333; line-height:20px; width: auto; padding: 20px; border-radius: 10px; font-family: sans-serif;">
            <p style="display: block; margin-bottom: 30px; color:#fff"; max-width: 70ch;>Mensaje de formulario web:</p>
            <p style="display: block; margin-bottom: 5px; color:#fff;">'.$message.'</p>
            <p style="display: block; margin:20px 0 5px 0; font-size:16px;font-weight: bold; color: #fff; padding-top:0px">'.$name.'</p>
            <a style="display: block; margin-bottom: 5px; font-size:16px;text-decoration: none; color: #fff;" href="tel:'.$phone.'">'.$phone.'</a>
            <a style="display: block; margin-bottom: 5px; font-size:16px;text-decoration: none; color: #fff;" href="mailto:'.$email.'">'.$email.'</a>
        </div>
    </body>
</html>

            ';

    $msg_copy = '
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title></title>
    </head>
    <body>
        <div id="email-wrap" style="background: #8a2387; background: -webkit-linear-gradient(-45deg, #8a2387, #f27121); background: linear-gradient(-45deg, #8a2387, #f27121); color: #333; line-height:20px; width: auto; padding: 20px; border-radius: 10px; font-family: sans-serif;">
            <p style="display: block; margin-bottom: 30px; color:#fff"; max-width: 70ch;>Copia de mensaje de formulario web:</p>
            <p style="display: block; margin-bottom: 5px; color:#fff;">'.$message.'</p>
            <p style="display: block; margin:20px 0 5px 0; font-size:16px;font-weight: bold; color: #fff; padding-top:0px">'.$name.'</p>
            <a style="display: block; margin-bottom: 5px; font-size:16px;text-decoration: none; color: #fff;" href="tel:'.$phone.'">'.$phone.'</a>
            <a style="display: block; margin-bottom: 5px; font-size:16px;text-decoration: none; color: #fff;" href="mailto:'.$email.'">'.$email.'</a>
        </div>
    </body>
</html>

            ';


    // variable para email: cabecera (datos antes de abrir el correo)
    $headers  = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers .= "From: <".$from. ">" ;
    // ENVIAR
    mail($to,$subject,$msg,$headers);



    $headers_copy  = "MIME-Version: 1.0\r\n";
    $headers_copy .= "Content-type: text/html; charset=UTF-8\r\n";
    $headers_copy .= "From: <".$from. ">" ;
    // ENVIAR
    mail($from,$subject_copy,$msg_copy,$headers_copy);



    // imprimir respuesta html en backend
echo'<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form03</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="title_description">mensaje para usuario</div>
    <div class="thanks">
        <p>¡Correo enviado!</p>
        <p>Gracias '.$name .',</p>
        <p>nos pondrémos en contacto</p>
    </div>


    <div class="title_description">datos enviados por formulario</div>
    <div class="tag">
        <div> <span>var name</span> '.$name.'</div>
        <div> <span>var phone</span> '.$phone.'</div>
        <div> <span>var email</span> '.$email.'</div>
        <div> <span>var message</span> '.$message.'</div>
    </div>

</body>
</html>';


    // imprimir viaulización del email con formato
    echo '
    <div class="title_description">datos enviados por formulario</div>
    <div class="email">'.$msg.'</div>'
    ;

    // imprimir viaulización del email con formato
    echo '
    <div class="title_description">datos enviados por formulario (copia)</div>
    <div class="email">'.$msg_copy.'</div>'
    ;

    }


?>