<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <!-- ajax GET -->
    <div class="block_ajax">

        <h4>Método Get:</h4>
        <p>Este método trae información desde el servidor</p><br><br>

        <p>Aquí se cargará la información con GET</p>
        <button class="btn btn-get line" id="btn_pull" type="button">
            Boton Get
        </button>
        <div class="response_get line" id="demo"></div>

        <script src="./js/ajax_get.js"></script>

    </div>
    <!-- - -->

    <!-- ajax POST -->
    <div class="block_ajax">

        <h4>Método Post:</h4>
        <p>Este método trae información desde el servidor</p><br><br>

        <button class="btn btn-post line" type="button" id="send">boton post</button>
        <form class="line" name="testForm" action="" method="">
            <input type="text" name="var1" id="var1" placeholder="Escriba el nombre de el archivo" />
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