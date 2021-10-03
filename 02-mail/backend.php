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

    // variable para email: mensaje
    $msg =
        'Nombre: '.$name
        ."\n".'Teléfono: '.$phone
        ."\n".'Correo electrónico: '.$email
        ."\n".'Mensaje: '.$message;

    // variable para email: cabecera (datos antes de abrir el correo)
    $headers = "From:" . $from;

    // ENVIAR
    mail($to,$subject,$msg,$headers);

    // imprimir respuesta html en backend
echo'<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form02</title>
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



    /*

    Si deseas redirigir a otra página
    no debes usar echo en esta página
    y usa:

    header('Location: thank_you.php');

    */
}

?>