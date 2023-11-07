<?php 
    $folderPath =dirname($_SERVER['SCRIPT_NAME']);
    $urlPath = $_SERVER['REQUEST_URI'];
    $url = substr($urlPath, strlen($folderPath));

    define('URL', $url);

    //  echo $folderPath;
    //  echo "<br>";
    //  echo $urlPath;
    //  echo "<br>";
    //  echo $url;
    //  echo "<br>";
?>

