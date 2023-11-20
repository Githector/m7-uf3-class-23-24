<?php 
    //require_once(__DIR__ . "/config.php");
    //require_once(__DIR__ . "/Router.php");

    require_once(__DIR__ . "/App/autoload.php");

    $router = new Router();
    $router->run();
?>