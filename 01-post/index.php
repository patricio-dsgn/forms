<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>form01</title>
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>

	<h1>Formulario para:</h1>
	<ul>
		<li>enviar contenido a backend</li>
	</ul>

	<form id="form_mail" action="backend.php" method="post">

		<input type="text" name="name" placeholder="Nombre">
		<input type="text" name="phone" placeholder="Teléfono">
		<input type="text" name="email" placeholder="Correo electrónico">

		<textarea name="message" placeholder="Mensaje"></textarea>

		<input type="submit" name="submit" value="Enviar">

	</form>

</body>
</html>