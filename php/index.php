<?php
use Slim\Factory\AppFactory;

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/controllers/AlunniController.php';
require __DIR__ . '/controllers/SiteController.php';
require_once("./Classe.php");

$app = AppFactory::create();

$app->get('/alunni', "AlunniController:index");
$app->get('/alunni/{id}', "AlunniController:show");

$app->post('/alunni', 'AlunniController:createAlunno');
$app->put('/alunni/{name}', 'AlunniController:updateAlunno');
$app->delete('/alunni{name}', 'AlunniController:deleteAlunno');

$app->run();
