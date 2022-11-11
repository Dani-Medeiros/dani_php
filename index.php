<?php

    require __DIR__ . "/vendor/autoload.php";

    use CoffeeCode\Router\Router;

    $router = new Router(projectUrl: URL_BASE);

    /**
     * Controllers
     */

    $router->namespace("Source\App");

    /**
     * WEB
     * home
     */

    $router->group(null);
    $router->get("/", "Web:home");
    $router->get("/{filter}", "Web:home");

    /**
     * WEB
     * professor
     
     */

    $router->group("professor");
    $router->get("/", "Web:professor");
    $router->post("/", "Web:professor");
    $router->delete("/", "Web:professor");
    $router->get("/{sector}", "Web:professor");

    /**
     * ADMIN
     * Home
     */

    $router->group("professor");
    $router->get("/", "Professor:index");

    /**
     * ERROS
     */

    $router->group("ooops");
    $router->get("/{errcode}", "Web:error");

    $router->dispatch();

    if($router->error()) {

        $router->redirect("/ooops/{$router->error()}");

    }
    
?>