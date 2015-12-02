<?php

define('APP_PATH', dirname(__DIR__));

require APP_PATH . '/vendor/autoload.php';

// load configuration
$dotenv = new \Dotenv\Dotenv(APP_PATH);
$dotenv->load();
$dotenv->required(['APP_DEBUG']);

$container = new Slim\Container();

if (getenv('APP_DEBUG') == 'true') {
    $container['settings']['displayErrorDetails'] = true;
}

$container['view'] = function ($c) {
    $view = new \Slim\Views\Twig(APP_PATH . '/app/views', [
        'cache' => (getenv('APP_DEBUG') == 'true') ? false : APP_PATH . '/storage/twig'
    ]);
    $view->addExtension(new \Slim\Views\TwigExtension(
        $c['router'],
        $c['request']->getUri()
    ));

    return $view;
};

$app = new Slim\App($container);

require_once APP_PATH . '/app/routes.php';

$app->run();
