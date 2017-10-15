<?php
// DIC configuration

$container = $app->getContainer();

// view renderer
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];
    return new Slim\Views\PhpRenderer($settings['template_path']);
};

// monolog
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));
    return $logger;
};

// Register flash Messages
$container['flash'] = function () {
    return new \Slim\Flash\Messages();
};

// Register PDO
$container['db'] = function ($c) {
    try {
        $settings = $c->get('settings')['db'];
        return new \PDO(
            $settings['db'],
            $settings['username'],
            $settings['password'],
            $settings['options']
        );
    } catch (\PDOException $e) {
        return $e;
    }
};

// Register sampleController
$container['sampleController'] = function ($c) {
    return new \ItAce\Controllers\SampleController($c);
};
