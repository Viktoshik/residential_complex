<?php

use DI\Container;

use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Src\Controllers\HomeController;


require __DIR__ . '/vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

SESSION_START();

$container->set(PhpRenderer::class, function () use ($container){
    return new PhpRenderer(__DIR__ . '/templates');
});

ORM::configure('mysql:host=database;dbname=docker;charset=utf8mb4');
ORM::configure('username', 'root');
ORM::configure('password', 'tiger');

$app->get('/', [HomeController::class, 'index']);
$app->get('/builds/{id}', [HomeController::class, 'showBuild']);
$app->get('/apartments/{id}', [HomeController::class, 'showApartment']);
$app->get('/builds/apartments/{id}', [HomeController::class, 'indexApartment']);
$app->get('/allApartments', [HomeController::class, 'allApartment']);

$app->run();
