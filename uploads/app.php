<?php
    header("Access-Control-Allow-Origin: *");
    require "../vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable("../")->load();
    $router = new \Bramus\Router\Router();
    
?>