<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/rectangle.php";

    $app = new Silex\Application();

    $app->get("/", function(){
      return "Home";
    });

    return $app;
?>
