<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- ajax POST -->
    <div class="block_ajax">

        <h4>Método Post:</h4>
        <p>Este método trae información desde el servidor</p><br><br>

        <form name="testForm" action="" method="">
            <button class="btn btn-post line" type="button" id="send_create" value="send_create">Crear</button>
            <input class="line" type="text" name="var_create" id="var_create" placeholder="escribe archivo para crear" />
            <!-- <input type="button" value="Submit Form" onclick="postStuff();" /> -->
        </form>

        <form name="testForm" action="" method="">
            <button class="btn btn-post line" type="button" id="send_delete" value="send_delete">Borrar</button>
            <input class="line" type="text" name="var_delete" id="var_delete" placeholder="escribe archivo para borrar" />
            <!-- <input type="button" value="Submit Form" onclick="postStuff();" /> -->
        </form>

        <p>Aquí se muestra la lista de archivos con PHP, usando <i>scandir</i> </p>
        <div id="status" class="response_post">
        <?php
            $arr = scandir("./data-post/");
            foreach ($arr as $key => $value) {
                if ($value[0]!=".") {
                    echo $value.'<br>';
                };
            }
        ?>
        <script src="./js/ajax_post.js"></script>

    </div>
    <!-- - -->

</body>
</html>