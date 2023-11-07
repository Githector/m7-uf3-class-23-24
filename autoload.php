<?php
    
    if(!isset($_SESSION)) {
        session_start();
    }
    require_once(__DIR__ . "/App/config.php");
    require_once(__DIR__ . "/App/Router.php");
    require_once(__DIR__ . "/App/Core/Controller.php");
    ?>