<?php

require 'inc/Slim-2.x/Slim/Slim.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/cadastroP',
    function () {

        require_once("view/cadastroP.php");
        
    }
);

$app->get(
    '/cadastroU',
    function () {

        require_once("view/cadastroU.php");
        
    }
);

$app->get(
    '/login',
    function () {

        require_once("view/login.php");
        
    }
);

$app->get(
    '/shop',
    function () {
        
        require_once("view/shop.php");
        
    }
);

$app->get(
    '/visualP',
    function () {
        
        require_once("view/visualP.php");
        
    }
);

$app->run();
