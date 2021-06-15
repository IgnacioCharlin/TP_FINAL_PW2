<?php
    include_once("helpers/ModuleInitializer.php");
    include_once("helpers/Router.php");

    session_start();



        $page = isset($_GET["page"]) ? $_GET["page"] : "home";
        $action = isset($_GET["page"]) ? $_GET["page"] : "index";
        $moduleInitializer = new ModuleInitializer();

    Router::executeActionFromController($moduleInitializer, $page, $action);



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
