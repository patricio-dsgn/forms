<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- ajax Mail -->
    <div class="block_ajax">

        <h4>Método Post:</h4>
        <p>Este método trae información desde el servidor</p><br><br>

		<form id="myForm" name="myForm" action="./backend.php" method="post">

			<input type="text" id="name" name="name" placeholder="Nombre">
			<input type="text" id="phone" name="phone" placeholder="Teléfono">
			<input type="text" id="email" name="email" placeholder="Correo Electrónico">

			<textarea id="message" name="message" placeholder="Mensaje"></textarea>

			<!-- <input type="submit" name="submit" value="Enviar"> -->
			<button type="button" id="send" class="btn btn-send">Enviar</button>
		</form>

	    <div id="status">

		</div>

        <script src="./js/mail_ajax.js"></script>

    </div>
    <!-- - -->

</body>
</html>