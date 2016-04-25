<?php

require '../vendor/autoload.php';
require 'database.php';

use Illuminate\Database\Capsule\Manager as Capsule;

$app = new \Slim\Slim([
    'view' => new \Slim\Views\Twig()
]);

$app->db = function() {
    return new Capsule;
};

$view = $app->view();
$view->setTemplatesDirectory('../app/views');
$view->parserExtensions = [
    new \Slim\Views\TwigExtension()
];

require 'routes.php';