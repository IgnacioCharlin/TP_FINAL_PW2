<?php
    include_once ("helpers/Config.php");


    $render = Config::createRender();
    $database = Config::createDataBase();



$page = isset($_GET["page"]) ? $_GET["page"] : "home";
$action = isset($_GET["page"]) ? $_GET["page"] : "";
    switch ($page){
        case "home":
            include_once ("home.php");
            break;
       /* case "Nosotros";
            include_once ("nosotros.php");
            break;*/
    }

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
