<?php

// crear variables - - - - -

$name    = $_POST["name"];
$phone   = $_POST["phone"];
$email   = $_POST["email"];
$message = $_POST["message"];

// imprimir respuesta html en backend
echo'<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>form01</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <div class="title_description">datos enviados por formulario</div>
    <div class="tag">
        <div> <span>var name</span> '.$name.'</div>
        <div> <span>var phone</span> '.$phone.'</div>
        <div> <span>var email</span> '.$email.'</div>
        <div> <span>var message</span> '.$message.'</div>
    </div>

</body>
</html>';


?>