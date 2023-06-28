<?php
    header("Access-Control-Allow-Origin: *");
    require "../vendor/autoload.php";
    $dotenv = Dotenv\Dotenv::createImmutable("../")->load();
    $router = new \Bramus\Router\Router();
    $router->mount('/campers', function() use($router){
        $router->post('/', '\App\crud@postAll');
        $router->put('/', '\App\crud@putAll');
        $router->get("/", '\App\crud@getAll');
        $router->delete('/', function() { 
            $cox = new \App\connect();
            $_DATA = json_decode(file_get_contents("php://input"));
            $res = $cox->con->prepare("DELETE FROM campers WHERE idCamper=:idCamper");
            $res->bindParam(':idCamper', $_DATA->idCamper);
            $res->execute();
            print_r($res->rowCount());
        });
    });

    $router->run();
?>