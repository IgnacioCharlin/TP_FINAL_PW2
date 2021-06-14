<?php
    include_once ("helpers/Config.php");
    $database = Config::createDataBase();

    /*
     * Desde el index vamos a manejar que pagina queremos visualizar para no repetir tanto codigo como header o footer
     *
    $page = isset($_GET["page"]) ? $_GET["page"] : "home"
    switch ($page){
        case "inicio":
            include_once ("inicio.php");
            break;
        case "Nosotros";
            include_once ("nosotros.php");
            break;
    }
    */



    ?>




<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Prueba</h1>
</body>
</html>
