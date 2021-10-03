<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form04</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>Formulario para:</h1>
	<ul>
		<li>enviar email</li>
		<li>copia al remitente</li>
		<li>validar con js</li>
	</ul>

	<form id="form_mail" action="backend.php" method="post">
	<!-- <form id="myForm" name="myForm" action="./backend.php" method="post"> -->

		<input type="text" id="name" name="name" placeholder="Nombre">
		<input type="text" id="phone" name="phone" placeholder="Teléfono">
		<input type="text" id="email" name="email" placeholder="Correo electrónico">

		<textarea id="message" name="message" placeholder="Mensaje"></textarea>

		<input type="submit" name="submit" value="Enviar">

	</form>

	<script src="./js/validateForm.js"></script>
</body>
</html>